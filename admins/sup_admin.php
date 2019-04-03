<?php 
require_once('../includes/initialize.php');


 $id = $_GET['id'] ?? NULL;
 

echo $id."waslaaaaaaaaaat";
session_start();
$_SESSION['toast'] = true;
redirect_to('index.php');

// if(isset($id) && !empty($id)){

//         $admins = Admin::delete($id);
        
//         redirect_to('index.php');
        
   
// }else{
//     //echo 'faragh';
// }

?>
