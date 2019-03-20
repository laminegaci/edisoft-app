<?php 
require_once('../includes/initialize.php');


$id = $_GET['id'];
$pack = Pack::find_by_id($id);

if($pack == false){
redirect_to('index.php');
};
if(is_post_request() && isset($_POST['modifier'])){
      
    /*
    foreach ($_POST as $key => $value) {            
      $_POST[$key] = test_input($value);
      }
    */

   
   $args = [];
   $args['nom_pack'] = $_POST['nom_pack'] ?? NULL;
      $args['prenom_cl'] = $_POST['prenom_cl'] ?? NULL;
      $args['espace_pack'] = $_POST['espace_pack'] ?? NULL;
      $args['prix_pack'] = $_POST['prix_pack'] ?? NULL;


   $pack->merge_attributes($args);
  $result =$pack->update();
  if($result){
    //echo 'jazat la requete';
    redirect_to('index.php');
  }else{
     //echo 'mamchatch';
  }
}
?>