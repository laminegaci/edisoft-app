<?php 
require_once('../includes/initialize.php');

require_login();
$pack = new Pack;
$packs= $pack->find_all();

/////////////////////////////////////////////////////////////////////////////

if(is_post_request() && isset($_POST['ajouter'])){

/*

var_dump($packs);
*/

//var_dump($_POST);

/*
foreach ($_POST as $key => $value) {            
$_POST[$key] = test_input($value);
}
*/


//création et préparation de données pour les convertirs en objets 

$args = [];
$args['id_ad'] =1; //$_SESSION['id_ad'] ?? NULL;
//client id
$position_tire= strpos($_POST['id_cl'],  '-');
$_POST['id_cl'] = substr($_POST['id_cl'], 0, $position_tire);

$args['id_cl'] = $_POST['id_cl'] ?? NULL;
$args['url_heb'] = $_POST['url_heb'] ?? NULL;
$dateDebut = $_POST['date_deb_heb'] ?? NULL;

$dateFin=date('Y-m-d', strtotime('+1 year', strtotime($dateDebut)) );// +1 ans
$args['date_deb_heb'] = $dateDebut;
$args['date_fin_heb'] = $dateFin;


///récupérer men table pack
foreach ($packs as $pack) {
 
if($_POST['nom_pack'] == $pack->nom_pack){
    $args['espace_heb'] = $pack->espace_pack;
    $args['prix'] = $pack->prix_pack;
    $args['id_pack'] = $pack->id_pack;
    //assign values :D
}
}


// var_dump($args) . "<br>";


$hebergement = new Hebergement($args);
$result = $hebergement->create();




if($result == true){
    $_SESSION['toast'] = true;
    $_SESSION['toastType'] = "Un ajout d'hébergement a été effectué avec succés";
redirect_to('index.php');
}else{
 // echo "error";
}


}


///////////////////////////////////////////////////////////////////////////////////


?>