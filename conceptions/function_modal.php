
<?php 
require_once('../includes/initialize.php');
require_login();



function modifier_modal($id_tab, $type_modal){

    $id= $id_tab ?? false;
  
    include('modifier_modal.php');

}


?>