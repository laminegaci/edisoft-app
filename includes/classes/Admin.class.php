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
        $sql = "SELECT * FROM admin";
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
        $sql = "SELECT username_ad FROM admin ";
        $sql .="WHERE id_ad='". self::$database->escape_string($id) ."'";
        $result = self::$database->query($sql);
        $array = $result->fetch_assoc();
        foreach($array as $key => $value)
        {
             return $value;
        }
        
        var_dump($array);
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
    public $confirm_password;
    public $errors = [];
    public function __construct($args=[])
    {
        
        $this->username_ad = $args['username_ad'] ?? '';
        $this->password_ad = $args['password_ad'] ?? '';
        $this->confirm_password = $args['confirm_password'] ?? '';
        
    }
    public function set_hashed_password(){
        $this->hashed_password = password_hash($this->password_ad, PASSWORD_BCRYPT);
    }
    public function verify_password($password){
        return password_verify($password, $this->hashed_password);
    }

    public function hash_password(){
       
        $validation = $this->validate();
       if(empty($validation)){
        $this->set_hashed_password();
        
        return $this->create();
       }else{
         return $validation;
       }
     
    }
    static public function find_by_username($username){
        $sql = "SELECT * FROM admin ";
        $sql .="WHERE username_ad='". self::$database->escape_string($username) ."'";
        $object_array= self::find_by_sql($sql);
        if(!empty($object_array)){
            return array_shift($object_array);
        }else{
            return false;
        }
    }

    protected function validate(){
        $this->errors = [];

        if(is_blank($this->username_ad)) {
            $this->errors[] = "nom d'utilisateur ne doit pas être vide.";
          } elseif (!has_length($this->username_ad, array('min' => 8, 'max' => 255))) {
            $this->errors[] = "nom d'utilisateur doit avoir au moins 8 caractéres! ";
          }elseif(!has_unique_username($this->username_ad, $this->id_ad ?? 0)){
            $this->errors[] = "nom d'utilisateur existe déja, veuillez choisir un autre";

          }

          if(is_blank($this->password_ad)) {
            $this->errors[] = "le mot de passe ne doit pas être vide.";
          } elseif (!has_length($this->password_ad, array('min' => 8))) {
            $this->errors[] = "le mot de passe doit contenir au moins 8 caractéres ou plus";
          } elseif (!preg_match('/[A-Z]/', $this->password_ad)) {
            $this->errors[] = "le mot de passe doit contenir au moins un caractére majiscule";
          } elseif (!preg_match('/[a-z]/', $this->password_ad)) {
            $this->errors[] = "le mot de passe doit contenir au moins un caractére miniscule";
          } elseif (!preg_match('/[0-9]/', $this->password_ad)) {
            $this->errors[] = "le mot de passe doit contenir au moins un numéro";
          } elseif (!preg_match('/[^A-Za-z0-9\s]/', $this->password_ad)) {
            $this->errors[] = "le mot de passe doit contenir au moins un symbol";
          }
        
          if(is_blank($this->confirm_password)) {
            $this->errors[] = "la confirmation du mot de passe ne doit pas être";
          } elseif ($this->password_ad !== $this->confirm_password) {
            $this->errors[] = "le mot de passe et la confirmation sont pas les mêmes !";
          }
          return $this->errors;
    }
    

};


?>