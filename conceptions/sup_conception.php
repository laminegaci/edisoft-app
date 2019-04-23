<?php 
require_once('../includes/initialize.php');




 $id = $_GET['id'] ?? NULL;
 

//echo $id."waslaaaaaaaaaat";
//redirect_to('index.php');

if(isset($id) && !empty($id)){

         session_start();
          $_SESSION['toast'] = true;
          $_SESSION['toastType'] = "suppression";
         $cons = Conception::delete($id);
        
         redirect_to('index.php');
    
        
        
}   
else{
    //echo 'faragh';
}

?>
