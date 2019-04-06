<?php 
require_once('../includes/initialize.php');


 $id = $_GET['id'] ?? NULL;
// session_start();
$_SESSION['toast'] = true;
$_SESSION['toastType'] = "Supression";
 
<<<<<<< HEAD
// redirect_to('../dashboard.php');
=======
>>>>>>> 71c7a7fb6b6fe235cacb9152dbcb3751a0644ab1
 //echo $id."waslaaaaaaaaaat";
if(isset($id) && !empty($id)){

        $hybergement = Hebergement::delete($id);
<<<<<<< HEAD
        
        redirect_to('../dashboard.php');
=======
>>>>>>> 71c7a7fb6b6fe235cacb9152dbcb3751a0644ab1
        
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
