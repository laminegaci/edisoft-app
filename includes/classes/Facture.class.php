<?php 


class Facture{


    /////// active record code
    static protected $database;
    
    static function set_database($database){
        self::$database = $database;
    }

    static protected $db_columns =[
       'id_fact', 
       'date_fact',
       'type_pai_fact', 
       'cheque',
       'totale_fact', 
       'id_ad', 
       
       'id_cl'
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
        $sql = "SELECT * FROM facture";
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
        $sql = "SELECT * FROM facture ";
        $sql .="WHERE id_fact='". self::$database->escape_string($id) ."'";
        $object_array= self::find_by_sql($sql);
        if(!empty($object_array)){
            return array_shift($object_array);
        }else{
            return false;
        }
    }

   
    public function create(){
        
        $attributes = $this->sanitized_attributes();//mna9yiin

        $sql = "INSERT INTO facture(";
        $sql .= join(', ', array_keys($attributes));
        $sql .= ") VALUES ('";
        $sql .= join("', '", array_values($attributes) );
        $sql .= "');";

        //  echo $sql . "<br>";
           
            
        $result = self::$database-> query($sql);

        if($result){
            $this->id_fact = self::$database->insert_id;
        }else{
          echo var_dump(self::$database->error_list);
        }
        return $result;
    }
    
    public static  function update_heb_id($ids=[]){
        
        foreach ($ids as $id) {
           $sql = "UPDATE hebergement SET id_fact = '1' WHERE id_heb = '";
           $sql .=   $id ."';";
          $resultat =  self::$database->query($sql);
        }
        if($resultat){
            return $resultat;
        }else{
          echo var_dump(self::$database->error_list);

        }
        
    }
    
    public function attributes(){
        $attributes = [];
        foreach (self::$db_columns as $column) {
            if($column == 'id_fact'){ continue;};
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
    static public function rows_tot()
    {
        $sql = "select*from facture";
        $result = self::$database->query($sql);
        $row = $result->num_rows;
        $result->free();

        return $row;
    }

    static public function rows_cache()
    {
        $sql = "select*from facture where type_pai_fact='cache'";
        $result = self::$database->query($sql);
        $row = $result->num_rows;
        $result->free();

        return $row;
    }
    static public function rows_cheque()
    {
        $sql = "select*from facture where type_pai_fact='cheque'";
        $result = self::$database->query($sql);
        $row = $result->num_rows;
        $result->free();

        return $row;
    }
    static public function rows_ccp()
    {
        $sql = "select*from facture where type_pai_fact='ccp'";
        $result = self::$database->query($sql);
        $row = $result->num_rows;
        $result->free();

        return $row;
    }

    static public function find_total_revenu()
    {
        $sql = "SELECT SUM(totale_fact) FROM facture";
        $result = self::$database->query($sql);
        $array = $result->fetch_assoc();
        foreach($array as $key => $value)
        {
            $som = $value;
        }
        
        
        return $som;
        

    }

    /////// end record code////////////////////////////

    public $id_fact; 
    public $date_fact;
    public $type_pai_fact; 
    public $cheque;
    public $totale_fact; 
    public $id_ad; 
  
    public $id_cl; 

   
    
    public function __construct($args=[])
    {
        $this->id_fact = $args['id_fact'] ?? '';
        $this->date_fact = $args['date_fact'] ?? '';
        $this->type_pai_fact = $args['type_pai_fact'] ?? '';
        $this->cheque = $args['cheque'] ?? '/';
        $this->prix_pack = $args['prix_pack'] ?? '';
        $this->totale_fact = $args['totale_fact'] ?? '';
        $this->id_ad = $args['id_ad'] ?? '';
        $this->id_cl = $args['id_cl'] ?? '';

       
    }

    

};


?>