<?php 
require_once('../includes/initialize.php');


 $id = $_GET['id'] ?? NULL;
// session_start();
$_SESSION['toast'] = true;
$_SESSION['toastType'] = "Supression";
 
 //echo $id."waslaaaaaaaaaat";
if(isset($id) && !empty($id)){

        $hybergement = Hebergement::delete($id);
        
       if($hybergement){
        redirect_to('../dashboard.php');
         
       }else{
           echo "erreur de suppression";
            var_dump($hybergement);
       }
   
}else{
    //echo 'faragh';
}

?>
