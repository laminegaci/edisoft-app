
<?php
require_once("../includes/initialize.php");

if(is_post_request() && isset($_POST['inscrire'])){
      
    /*
    foreach ($_POST as $key => $value) {            
      $_POST[$key] = test_input($value);
      }
    */

   
    //création et préparation de données pour les convertirs en objets 
      $args = [];
      $args['username'] = $_POST['username'];
      if($_POST['password_1']==$_POST['password_2'])
      {
        $args['password'] = $_POST['password_1'];
      }
      
      

     //var_dump($args) . "<br>";
      
      $admin = new Admin($args);
      $result = $admin->hash_password();

      if($result == true){
       
        echo "<script>alert('success')</script>";
        redirect_to('../dashboard.php');
      }else{
         echo "error";
         echo "<script>alert('failes')</script>";
      }
    
}


///////////////////////////////////////////////////////////////////////////////////
?>