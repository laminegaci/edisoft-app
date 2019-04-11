<?php 


class Client{


    /////// active record code
    static protected $database;
    
    static function set_database($database){
        self::$database = $database;
    }

    static protected $db_columns =['id_cl', 'nom_cl', 'prenom_cl', 'num_tel_cl', 'email_cl', 'adresse_cl', 'type_cl', 'nom_societe_cl', 'id_ad'];
    
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
        $sql = "SELECT * FROM client ORDER by id_cl DESC";
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
        $sql = "SELECT * FROM client ";
        $sql .="WHERE id_cl='". self::$database->escape_string($id) ."'";
        $object_array= self::find_by_sql($sql);
        if(!empty($object_array)){
            return array_shift($object_array);
        }else{
            return false;
        }
    }

    static public function find_pro(){
        $sql = "SELECT * FROM client ";
        $sql .="WHERE type_cl=0";
        $object_array= self::find_by_sql($sql);
        if(!empty($object_array)){
            return $object_array;
        }else{
            return false;
        }
    }
    static public function find_particulier(){
        $sql = "SELECT * FROM client ";
        $sql .="WHERE type_cl=1";
        $object_array= self::find_by_sql($sql);
        if(!empty($object_array)){
            return $object_array;
        }else{
            return false;
        }
    }
    
    public function create(){
        
        $attributes = $this->sanitized_attributes();//mna9yiin

        $sql = "INSERT INTO client(";
        $sql .= join(', ', array_keys($attributes));
        $sql .= ") VALUES ('";
        $sql .= join("', '", array_values($attributes) );
        $sql .= "');";

       // echo $sql . "<br>";
           
            
        $result = self::$database-> query($sql);

        if($result){
            $this->id_cl = self::$database->insert_id;
        }else{
         // echo var_dump(self::$database->error_list);
        }
        return $result;
    }


    public function check_validation(){
       
        $validation = $this->validate();
       if(empty($validation)){
               
        return $this->create();
       }else{
         return $validation;
       }
     
    }
    
    

    
    public function attributes(){
        $attributes = [];
        foreach (self::$db_columns as $column) {
            if($column == 'id_cl'){ continue;};
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

    static public function delete($id){
        $sql = "DELETE FROM client WHERE id_cl =";
        $sql .= "'" . $id ."';";
        
        $result = self::$database->query($sql);
        if($result){
           return $result;
        }else{
         echo var_dump(self::$database->error_list);
        }

    }

    static public function find_by_name($string){
        $sql = "SELECT * FROM client WHERE nom_cl LIKE ";
        $sql .= "'" . self::$database->escape_string($string) ."%'";
        $object_array= self::find_by_sql($sql);
        if(!empty($object_array)){
            return $object_array;
        }else{
            return false;
        }

    }

    public function update(){
        $attributes = $this->sanitized_attributes();
        $attributes_pairs = [];
        foreach ($attributes as $key => $value) {
            
            $attributes_pairs[] = "{$key}='{$value}'";
        }

        $sql = "UPDATE client SET ";
        $sql .= join(', ', $attributes_pairs);
        $sql .= " WHERE id_cl='". self::$database->escape_string($this->id_cl)."' ";
        $sql .= "LIMIT 1";
        echo $sql . "<br>";
        $result = self::$database->query($sql);

        if($result){
            $this->id_cl = self::$database->insert_id;
        }else{
         echo var_dump(self::$database->error_list);
        }
        return $result;
        
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
        $sql = "select*from client";
        $result = self::$database->query($sql);
        $row = $result->num_rows;
        $result->free();

        return $row;
    }
    
    static public function rows_pro()
    {
        $sql = "select*from client where type_cl=0";
        $result = self::$database->query($sql);
        $row = $result->num_rows;
        $result->free();

        return $row;
    }
    static public function rows_part()
    {
        $sql = "select*from client where type_cl=1";
        $result = self::$database->query($sql);
        $row = $result->num_rows;
        $result->free();

        return $row;
    }
    static public function check_email($email)
    {
        $sql = "select*from client where email_cl='".$email."'";
        $object_array = self::find_by_sql($sql);
        if(!empty($object_array)){
            return $object_array;
        }else{
            return false;
        }
    }    


    /////// end record code////////////////////////////

    public $id_cl; 
    public $nom_cl;
    public $prenom_cl; 
    public $num_tel_cl; 
    public $email_cl; 
    public $adresse_cl; 
    public $type_cl; 
    public $nom_societe_cl; 
    public $id_ad;
    public $errors = [];

    public const CATEGORIES = ['Pro', 'Particulier'];
    
    public function __construct($args=[])
    {
        $this->id_cl = $args['id_cl'] ?? '';
        $this->nom_cl = $args['nom_cl'] ?? '';
        $this->prenom_cl = $args['prenom_cl'] ?? '';
        $this->num_tel_cl = $args['num_tel_cl'] ?? '';
        $this->email_cl = $args['email_cl'] ?? '';
        $this->adresse_cl = $args['adresse_cl'] ?? '';
        $this->type_cl = $args['type_cl'] ?? 1;
        $this->nom_societe_cl = $args['nom_societe_cl'] ?? NULL;
        $this->id_ad = $args['id_ad'] ?? '';



    }
    protected function validate(){
        $this->errors = [];
        //nom client
        if(is_blank($this->nom_cl)) {
            $this->errors[] = "nom du client ne doit pas être vide.";
        }elseif(!has_length($this->nom_cl, array('min' => 4, 'max' => 255))) {
            $this->errors[] = "nom du client doit avoir au moins 4 caractéres! ";
        }elseif(ctype_alpha($this->nom_cl) === false){
            $this->errors[] = "nom du client doit avoir seulement des caractère alphabetique! ";
        }
        //prenom client
        if(is_blank($this->prenom_cl)) {
            $this->errors[] = "prenom du client ne doit pas être vide.";
        }elseif(!has_length($this->prenom_cl, array('min' => 4, 'max' => 255))) {
            $this->errors[] = "prenom du client doit avoir au moins 4 caractéres! ";
        }elseif(ctype_alpha($this->prenom_cl) === false){
            $this->errors[] = "prenom du client doit avoir seulement des caractère alphabetique! ";
        }
        //adresse client
        if(is_blank($this->adresse_cl)) {
            $this->errors[] = "adresse du client ne doit pas être vide.";
        }
        //email client
        if(is_blank($this->email_cl)) {
            $this->errors[] = "email du client ne doit pas être vide.";
        }elseif(!filter_var($this->email_cl, FILTER_VALIDATE_EMAIL)){
            $this->errors[] = "email du client non valide.";
        }
        //numero
        if(is_blank($this->num_tel_cl)) {
            $this->errors[] = "numero telephone du client ne doit pas être vide.";
        }elseif(!has_length($this->num_tel_cl, array('min' => 10, 'max' => 13))){
            $this->errors[] = "numero telephone du client  doit avoir au moin 10 nombre! .";   
        }elseif (preg_match('/[a-z]/', $this->num_tel_cl)) {
            $this->errors[] = "numero telephone du client doit avoir seulement des caractère numerique ";
          }
        
        if(is_blank($this->nom_societe_cl)) {
            $this->errors[] = "societé du client ne doit pas être vide.";
        }
          return $this->errors;
    }
    
    

    

};


?>