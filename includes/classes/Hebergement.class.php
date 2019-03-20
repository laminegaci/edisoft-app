<?php 


class Hebergement{


    /////// active record code
    static protected $database;
    
    static function set_database($database){
        self::$database = $database;
    }

    static protected $db_columns =['id_heb', 'url_heb', 'date_deb_heb', 'date_fin_heb', 'espace_heb',  'prix',    'id_ad',   'id_cl',  'id_pack' ];
    
    
    
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

    //---------------------------------------------------------------------------------------

    static public function find_all(){
        $sql = "SELECT * FROM hebergement";
       return self::find_by_sql($sql);
    }

    //---------------------------------------------------------------------------------------
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
    //---------------------------------------------------------------------------------------
    
    static public function find_by_id($id){
        $sql = "SELECT * FROM hebergement ";
        $sql .="WHERE id_heb='". self::$database->escape_string($id) ."'";
        $object_array= self::find_by_sql($sql);
        if(!empty($object_array)){
            return array_shift($object_array);
        }else{
            return false;
        }
    }
    //---------------------------------------------------------------------------------------


    //---------------------------------------------------------------------------------------
    public function create(){
        
        $attributes = $this->sanitized_attributes();//mna9yiin

        $sql = "INSERT INTO hebergement(";
        $sql .= join(', ', array_keys($attributes));
        $sql .= ") VALUES ('";
        $sql .= join("', '", array_values($attributes) );
        $sql .= "');";

       // echo $sql . "<br>";
           
            
        $result = self::$database-> query($sql);

        if($result){
            $this->id_heb = self::$database->insert_id;
        }else{
         echo var_dump(self::$database->error_list);
        }
        return $result;
    }
    
//---------------------------------------------------------------------------------------
    
    public function attributes(){
        $attributes = [];
        foreach (self::$db_columns as $column) {
            if($column == 'id_heb'){ continue;};
           $attributes[$column] = $this->$column;
        }
        return $attributes;
    }

    //---------------------------------------------------------------------------------------
    protected function sanitized_attributes(){
        //hadi la fonction pour éviter SQL injection be fonction wessmha escapestring jaya fe 
        //objet ta3 base de données
        $sanitized = [];
        foreach ($this->attributes() as $key => $value) {
            
            $sanitized[$key] = self::$database->escape_string($value);
        }

        return $sanitized;
    } 

     public function sani_echo(){
        return $this->sanitized_attributes();
    }
 
    //---------------------------------------------------------------------------------------
    static public function delete($id){
        $sql = "DELETE FROM hebergement WHERE id_heb =";
        $sql .= "'" . $id ."';";
        
        $result = self::$database->query($sql);
        if($result){
           return $result;
        }else{
         echo var_dump(self::$database->error_list);
        }

    }
//---------------------------------------------------------------------------------------

     static public function find_by_name($string){
         $sql = "SELECT * FROM hebergement WHERE url_heb LIKE ";
         $sql .= "'" . self::$database->escape_string($string) ."%'";
         $object_array= self::find_by_sql($sql);
         if(!empty($object_array)){
             return $object_array;
         }else{
             return false;
         }

     }
//---------------------------------------------------------------------------------------
     public function update(){
         $attributes = $this->sanitized_attributes();
         $attributes_pairs = [];
         foreach ($attributes as $key => $value) {
            
             $attributes_pairs[] = "{$key}='{$value}'";
         }

         $sql = "UPDATE hebergement SET ";
         $sql .= join(', ', $attributes_pairs);
         $sql .= " WHERE id_heb='". self::$database->escape_string($this->id_heb)."' ";
         $sql .= "LIMIT 1";
         echo $sql . "<br>";
         $result = self::$database->query($sql);

         if($result){
             $this->id_heb = self::$database->insert_id;
         }else{
          echo var_dump(self::$database->error_list);
         }
         return $result;
        
     }
    //---------------------------------------------------------------------------------------

    public function find_names()
    {
            $sql = "SELECT url_heb FROM hebergement ";
            $object_array= self::find_by_sql($sql);
            if(!empty($object_array)){
                return $object_array;
            }else{
                return false;
            }
    }

    public function merge_attributes($args=[]){

        foreach ($args as $key => $value) {
            if(property_exists($this, $key)){
                $this->$key = $value;
            }
            //else echo 'properté not'
        }
    }
    //---------------------------------------------------------------------------------------
    static public function rows_tot()
    {
        $sql = "select*from hebergement";
        $result = self::$database->query($sql);
        $row = $result->num_rows;
        $result->free();

        return $row;
    }
     

    /////// end record code////////////////////////////

    public $id_heb; 
    public $url_heb; 
    public $date_deb_heb;
    public $date_fin_heb;
    public $espace_heb; 
    public $prix; 
    public $id_ad;
    public $id_cl; 
    public $id_pack; 
    

    
    
    public function __construct($args=[])
    {
        $this->id_con = $args['id_heb'] ?? '';
        $this->id_con = $args['url_heb'] ?? '';
        $this->id_con = $args['date_deb_heb'] ?? '';
        $this->id_con = $args['date_fin_heb'] ?? '';
        $this->id_con = $args['espace_heb'] ?? '';
        $this->id_con = $args['prix'] ?? '';
        $this->id_con = $args['id_ad'] ?? '';
        $this->id_con = $args['id_cl'] ?? '';
        $this->id_con = $args['id_pack'] ?? '';
        



    }


};


?>