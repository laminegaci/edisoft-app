<?php 


function supprimer_modal($id_tab, $type_client){

    
    $id= $id_tab ?? false;
    include('supprimer_modal.php');

}


function modifier_modal($id_tab, $type_client){

    $id= $id_tab ?? false;
  
    include('modifier_modal.php');

}


?>