<?php 
require_once('../includes/initialize.php');


$id = $_GET['id'];
$cons = Conception::find_by_id($id);

if($cons == false){
redirect_to('index.php');
};
if(is_post_request() && isset($_POST['modifier'])){
      
    /*
    foreach ($_POST as $key => $value) {            
      $_POST[$key] = test_input($value);
      }
    */

 
    
   $args = [];
  

   $args['commentaire_con'] = $_POST['comment'] ?? NULL;
   $args['etat_con'] = $_POST['etat_con'] ?? NULL;
   
   

  $cons->merge_attributes($args);
  $result =$cons->update();
  if($result){
    // 'jazat la requete';
    redirect_to('index.php');
  }else{
      echo '<script> alert("mamchatch");</script>';
      echo var_dump(self::$database->error_list);
  }
  
}
?>