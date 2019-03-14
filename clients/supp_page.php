
<?php 
require_once('../includes/initialize.php');


 $id = $_GET['id'] ?? NULL;
if(isset($id) && !empty($id)){

        $client = Client::delete($id);
   
}else{
    echo 'faragh';
}

?>