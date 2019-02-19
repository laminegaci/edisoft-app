<?php 


function supprimer_modal($id_tab){

    
    $id= $id_tab;
    include('supprimer_modal.php');

}

function afficher_modal($id_tab){

    $id = $id_tab;
    include('afficher.php');

}

function modifier_modal($id_tab){

    $id = $id_tab;
    include('modifier_modal.php');

}


?>