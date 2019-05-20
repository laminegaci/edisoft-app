<?php 
require_once('../includes/initialize.php');
require_login();

 $id = $_GET['id'] ?? NULL;
// session_start();
$_SESSION['toast'] = true;
$_SESSION['toastType'] = "Supression";
 
 //echo $id."waslaaaaaaaaaat";
if(isset($id) && !empty($id)){

        $hybergement = Hebergement::delete($id);
        
       if($hybergement){
        $_SESSION['toast'] = true;
        $_SESSION['toastType'] = "Une suppression d'hébergement";
        redirect_to('../dashboard.php');
         
       }else{
           echo "erreur de suppression";
            var_dump($hybergement);
       }
   
}else{
    //echo 'faragh';
}

?>
