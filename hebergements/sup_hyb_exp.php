<?php 
require_once('../includes/initialize.php');


 $id = $_GET['id'] ?? NULL;
 

 //echo $id."waslaaaaaaaaaat";
if(isset($id) && !empty($id)){

        $hybergement = Hebergement::delete($id);
        
        redirect_to('../dashboard.php');
        
   
}else{
    //echo 'faragh';
}

?>
