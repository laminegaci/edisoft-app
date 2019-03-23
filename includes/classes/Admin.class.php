<?php 


class Admin{


    /////// active record code
    static protected $database;
    
    static function set_database($database){
        self::$database = $database;
    }

    static protected $db_columns =[
       'id_ad', 
       'username_ad',
       'hashed_password',
    ];
    
    static public function find_by_sql($sql){

        
        $result = self::$database->query($sql);
        if(!$result){
            exit("erreur de requête.");
        };
        // convert result into object
        
        $object_array = [];
        
        
        while($record = $result->fetch_assoc()){
            $object_array [] = self::instantiate($record);
        };
       
       
        $result->free();

        return $object_array;
    }

    static public function find_all(){
        $sql = "SELECT * FROM pack";
       return self::find_by_sql($sql);
    }

    static protected function instantiate($record){
        $object = new self;
        //
        foreach ($record as $property => $value) {
            if(property_exists($object, $property)){
                $object->$property = $value;
            }
        }
        return $object;
    }
    
    static public function find_by_id($id){
        $sql = "SELECT * FROM pack ";
        $sql .="WHERE id_pack='". self::$database->escape_string($id) ."'";
        $object_array= self::find_by_sql($sql);
        if(!empty($object_array)){
            return array_shift($object_array);
        }else{
            return false;
        }
    }

   
    public function create(){
        
        $attributes = $this->sanitized_attributes();//mna9yiin

        $sql = "INSERT INTO admin(";
        $sql .= join(', ', array_keys($attributes));
        $sql .= ") VALUES ('";
        $sql .= join("', '", array_values($attributes) );
        $sql .= "');";

       // echo $sql . "<br>";
           
            
        $result = self::$database-> query($sql);

        if($result){
            $this->id_ad = self::$database->insert_id;
        }else{
          echo var_dump(self::$database->error_list);
        }
        return $result;
    }
    

    
    public function attributes(){
        $attributes = [];
        foreach (self::$db_columns as $column) {
            if($column == 'id_ad'){ continue;};
           $attributes[$column] = $this->$column;
        }
        return $attributes;
    }
    protected function sanitized_attributes(){
        //hadi la fonction pour éviter SQL injection be fonction wessmha escapestring jaya fe 
        //objet ta3 base de données
        $sanitized = [];
        foreach ($this->attributes() as $key => $value) {
            
            $sanitized[$key] = self::$database->escape_string($value);
        }

        return $sanitized;
    } 



    public function merge_attributes($args=[]){

        foreach ($args as $key => $value) {
            if(property_exists($this, $key)){
                $this->$key = $value;
            }
        }
    }
    

    /////// end record code////////////////////////////

    public $id_ad; 
    public $username_ad; 
    public $password_ad;
    protected $hashed_password;
    
    public function __construct($args=[])
    {
        
        $this->username_ad = $args['username'] ?? '';
        $this->password_ad = $args['password'] ?? '';
        
    }
    public function set_hashed_password(){
        $this->hashed_password = password_hash($this->password_ad, PASSWORD_BCRYPT);
    }
    public function hash_password(){
        $this->set_hashed_password();
        return $this->create();
    }

    

};


?>