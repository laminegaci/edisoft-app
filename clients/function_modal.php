<?php 
require_once('../includes/initialize.php');
require_login();


function supprimer_modal($id_tab, $type_client){

    
    $id= $id_tab ?? false;
    include('supprimer_modal.php');

}

function afficher_modal($id_tab, $type_client){

    $id= $id_tab ?? false;
  
    include('afficher.php');

}

function modifier_modal($id_tab, $type_client){

    $id= $id_tab ?? false;
  
    include('modifier_modal.php');

}


?>