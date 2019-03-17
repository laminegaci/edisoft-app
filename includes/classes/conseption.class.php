<?php 


class conseption{


    /////// active record code
    static protected $database;
    
    static function set_database($database){
        self::$database = $database;
    }

    static protected $db_columns =['id_con', 'nom_con', 'type_con', 'date_db_con', 'delai_con', 'prix_con', 'versement_con', 'multilan_con', 'etat_con', 'commentaire_con', 'id_ad','id_cl'];
    
    // static public function find_by_sql($sql){   

        
    //     $result = self::$database->query($sql);
    //     if(!$result){
    //         exit("erreur de requête.");
    //     };
    //     // convert result into object
        
    //     $object_array = [];
        
        
    //     while($record = $result->fetch_assoc()){
    //         $object_array [] = self::instantiate($record);
    //     };
       
       
    //     $result->free();

    //     return $object_array;
    // }

    //---------------------------------------------------------------------------------------

    // static public function find_all(){
    //     $sql = "SELECT * FROM client";
    //    return self::find_by_sql($sql);
    // }

    //---------------------------------------------------------------------------------------
    // static protected function instantiate($record){
    //     $object = new self;
    //     //
    //     foreach ($record as $property => $value) {
    //         if(property_exists($object, $property)){
    //             $object->$property = $value;
    //         }
    //     }
    //     return $object;
    // }
    //---------------------------------------------------------------------------------------
    
    // static public function find_by_id($id){
    //     $sql = "SELECT * FROM client ";
    //     $sql .="WHERE id_cl='". self::$database->escape_string($id) ."'";
    //     $object_array= self::find_by_sql($sql);
    //     if(!empty($object_array)){
    //         return array_shift($object_array);
    //     }else{
    //         return false;
    //     }
    // }
    //---------------------------------------------------------------------------------------

    // static public function find_pro(){
    //     $sql = "SELECT * FROM client ";
    //     $sql .="WHERE type_cl=0";
    //     $object_array= self::find_by_sql($sql);
    //     if(!empty($object_array)){
    //         return $object_array;
    //     }else{
    //         return false;
    //     }
    // }

    //---------------------------------------------------------------------------------------
    // static public function find_particulier(){
    //     $sql = "SELECT * FROM client ";
    //     $sql .="WHERE type_cl=1";
    //     $object_array= self::find_by_sql($sql);
    //     if(!empty($object_array)){
    //         return $object_array;
    //     }else{
    //         return false;
    //     }
    // }

    //---------------------------------------------------------------------------------------
    // public function create(){
        
    //     $attributes = $this->sanitized_attributes();//mna9yiin

    //     $sql = "INSERT INTO client(";
    //     $sql .= join(', ', array_keys($attributes));
    //     $sql .= ") VALUES ('";
    //     $sql .= join("', '", array_values($attributes) );
    //     $sql .= "');";

    //    // echo $sql . "<br>";
           
            
    //     $result = self::$database-> query($sql);

    //     if($result){
    //         $this->id_cl = self::$database->insert_id;
    //     }else{
    //      // echo var_dump(self::$database->error_list);
    //     }
    //     return $result;
    // }
    
//---------------------------------------------------------------------------------------
    
    // public function attributes(){
    //     $attributes = [];
    //     foreach (self::$db_columns as $column) {
    //         if($column == 'id_cl'){ continue;};
    //        $attributes[$column] = $this->$column;
    //     }
    //     return $attributes;
    // }

    //---------------------------------------------------------------------------------------
    // protected function sanitized_attributes(){
    //     //hadi la fonction pour éviter SQL injection be fonction wessmha escapestring jaya fe 
    //     //objet ta3 base de données
    //     $sanitized = [];
    //     foreach ($this->attributes() as $key => $value) {
            
    //         $sanitized[$key] = self::$database->escape_string($value);
    //     }

    //     return $sanitized;
    // } 
 
    //---------------------------------------------------------------------------------------
    // static public function delete($id){
    //     $sql = "DELETE FROM client WHERE id_cl =";
    //     $sql .= "'" . $id ."';";
        
    //     $result = self::$database->query($sql);
    //     if($result){
    //        return $result;
    //     }else{
    //      echo var_dump(self::$database->error_list);
    //     }

    // }
//---------------------------------------------------------------------------------------

    // static public function find_by_name($string){
    //     $sql = "SELECT * FROM client WHERE nom_cl LIKE ";
    //     $sql .= "'" . self::$database->escape_string($string) ."%'";
    //     $object_array= self::find_by_sql($sql);
    //     if(!empty($object_array)){
    //         return $object_array;
    //     }else{
    //         return false;
    //     }

    // }
//---------------------------------------------------------------------------------------
    // public function update(){
    //     $attributes = $this->sanitized_attributes();
    //     $attributes_pairs = [];
    //     foreach ($attributes as $key => $value) {
            
    //         $attributes_pairs[] = "{$key}='{$value}'";
    //     }

    //     $sql = "UPDATE client SET ";
    //     $sql .= join(', ', $attributes_pairs);
    //     $sql .= " WHERE id_cl='". self::$database->escape_string($this->id_cl)."' ";
    //     $sql .= "LIMIT 1";
    //     echo $sql . "<br>";
    //     $result = self::$database->query($sql);

    //     if($result){
    //         $this->id_cl = self::$database->insert_id;
    //     }else{
    //      echo var_dump(self::$database->error_list);
    //     }
    //     return $result;
        
    // }
    //---------------------------------------------------------------------------------------

    // public function merge_attributes($args=[]){

    //     foreach ($args as $key => $value) {
    //         if(property_exists($this, $key)){
    //             $this->$key = $value;
    //         }
    //     }
    // }
    //---------------------------------------------------------------------------------------
    // static public function rows_tot()
    // {
    //     $sql = "select*from client";
    //     $result = self::$database->query($sql);
    //     $row = $result->num_rows;
    //     $result->free();

    //     return $row;
    // }
    // static public function rows_pro()
    // {
    //     $sql = "select*from client where type_cl=0";
    //     $result = self::$database->query($sql);
    //     $row = $result->num_rows;
    //     $result->free();

    //     return $row;
    // }
    // static public function rows_part()
    // {
    //     $sql = "select*from client where type_cl=1";
    //     $result = self::$database->query($sql);
    //     $row = $result->num_rows;
    //     $result->free();

    //     return $row;
    // }    

    /////// end record code////////////////////////////

    public $id_con; 
    public $nom_con; 
    public $type_con; 
    public $date_deb_con;
    public $delai_con; 
    public $prix_con; 
    public $versement_con;
    public $multilan_con; 
    public $id_ad;
    public $id_cl; 
    public const CATEGORIES = ['statique', 'dynamique'];

    
    
    public function __construct($args=[])
    {
        $this->id_con = $args['id_con'] ?? '';
        $this->nom_con = $args['nom_con'] ?? '';
        $this->type_con = $args['type_con'] ?? 0;
        $this->date_deb_con = $args['date_deb_con'] ?? '';
        $this->delai_con = $args['delai_con'] ?? '';
        $this->prix_con = $args['prix_con'] ?? '';
        $this->versement_con = $args['versement_con'] ?? '';
        $this->nom_societe_cl = $args['nom_societe_cl'] ?? NULL;
        $this->id_ad = $args['id_ad'] ?? '';



    }

    

};


?>