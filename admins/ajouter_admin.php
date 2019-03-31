
<?php
require_once("../includes/initialize.php");
if(require_login() && $session->show_id() !== 1){
  redirect_to(url_for('dashboard.php'));
  }
if(is_post_request() && isset($_POST['inscrire'])){
      
    /*
    foreach ($_POST as $key => $value) {            
      $_POST[$key] = test_input($value);
      }
    */

   
    //création et préparation de données pour les convertirs en objets 
      $args = [];
      $args['password_ad'] = $_POST['password_ad'] ?? '';
      $args['username_ad'] = $_POST['username_ad'] ?? '';
      $args['confirm_password'] = $_POST['confirm_password'] ?? '';
     
      

    //var_dump($args) . "<br>";
      
     
      $admin = new Admin($args);
     

      $result = $admin->hash_password();

     // var_dump($result);
      
      if($result === true){
              
        redirect_to('index.php');
      }else{
        session_start();
        $_SESSION['errors'] = $result;//ykhabi les erreurs ta3 validate()
        redirect_to('add_admin.php');//bah yweli hna
      }
      
    
}


///////////////////////////////////////////////////////////////////////////////////
?>
