
<?php 
require_once('../includes/initialize.php');


 $id = $_GET['id'] ?? NULL;
if(isset($id) && !empty($id)){

        $client = Client::delete($id);
        session_start();
$_SESSION['toast'] = true;
$_SESSION['toastType'] = "suppression";

        redirect_to('index.php');
   
}else{
    echo 'faragh';
}

?>