<?php 
require_once('../includes/initialize.php');


 $id = $_GET['id'] ?? NULL;
 

//echo $id."waslaaaaaaaaaat";
//redirect_to('index.php');

if(isset($id) && !empty($id)){

    if($id==1)
    {
        session_start();
        $_SESSION['toast_admin'] = true;
        redirect_to('index.php');
    }
    else{
        session_start();
        $_SESSION['toast'] = true;

        $admins = Admin::delete($id);
        
        redirect_to('index.php');
    }
        
        
   
}else{
    //echo 'faragh';
}

?>
