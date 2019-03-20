<?php 
require_once('../includes/initialize.php');


$id = $_GET['id'];
$client = Client::find_by_id($id);

if($client == false){
redirect_to('index.php');
};
if(is_post_request() && isset($_POST['modifier'])){
      
    /*
    foreach ($_POST as $key => $value) {            
      $_POST[$key] = test_input($value);
      }
    */

   
   $args = [];
   $args['id_cl'] = $_GET['id']?? NULL;

   $args['nom_cl'] = $_POST['nom_cl'] ?? NULL;
   $args['prenom_cl'] = $_POST['prenom_cl'] ?? NULL;
   $args['num_tel_cl'] = $_POST['telephon'] ?? NULL;
   $args['email_cl'] = $_POST['email'] ?? NULL;
   $args['adresse_cl'] = $_POST['adresse'] ?? NULL;

   if($_POST['check'] == 'particulier'){
     $args['type_cl'] = 1;
     $args['nom_societe_cl'] = '/';
   }else{
   $args['type_cl'] = 0;
   $args['nom_societe_cl'] = $_POST['entreprise'];
   }
  
   $args['id_ad'] = /*$_POST[''] ?? NULL*/ 1;
   

   $client->merge_attributes($args);
  $result =$client->update();
  if($result){
    //echo 'jazat la requete';
    redirect_to('index.php');
  }else{
     //echo 'mamchatch';
  }
}
?>