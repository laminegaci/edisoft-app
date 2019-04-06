<?php 
require_once('../includes/initialize.php');


 $id = $_GET['id'] ?? NULL;
 session_start();
$_SESSION['toast'] = true;
 
// redirect_to('../dashboard.php');
 //echo $id."waslaaaaaaaaaat";
if(isset($id) && !empty($id)){

        $hybergement = Hebergement::delete($id);
        
        redirect_to('../dashboard.php');
        
   
}else{
    //echo 'faragh';
}

?>
