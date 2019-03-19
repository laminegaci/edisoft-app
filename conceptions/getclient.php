<?php 
require_once('../includes/initialize.php');

$searchWord = $_REQUEST["q"];
//find by name LIKE %
$clients = Client::find_by_name($searchWord);
$names = [];
foreach ($clients as $client) {
    $names[] = $client->id_cl . '-'.$client->nom_cl . " " . $client->prenom_cl;
}

//var_dump($names);

//fix the word
//inject it in function 
//return results 


//$myArr = "{ \"results\":[{\"title\": 'oussama'}]}";

class Results {
    /*
    public $results = [
            1 => ['title' =>'oussama']
    ];
    */

    public $final = [];
    public $names =[];
    public $titles =[];
    public function __construct($args=[])
    {
     $this->names = $args;   
    }
    
    public function names(){
       for ($i=0; $i < sizeof($this->names) ; $i++) { 
                
        $this->titles[$i] = ["title"=> $this->names[$i]];

       }

      $this->final['results'] = $this->titles; 
    }
}

$myArr = new Results($names);
$myArr->names();
$result = $myArr->final;
//echo '<pre>',print_r($result),'</pre>';

$myJSON = json_encode($result);

echo $myJSON;

?>