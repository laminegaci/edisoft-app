
<?php 
require_once('../includes/initialize.php');


 $id = $_GET['id'] ?? NULL;
if(isset($id) && !empty($id)){

        $pack = Pack::delete($id);
        redirect_to('index.php');
   
}else{
    echo 'faragh';
}

?>