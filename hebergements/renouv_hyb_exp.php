<?php 
require_once('../includes/initialize.php');
require_login();

 $id_heb = $_GET['id_heb'] ?? NULL;
 $id_pack = $_GET['id_pack'] ?? NULL;
 $hebergement = Hebergement::find_by_id($id_heb);
// session_start();
$_SESSION['toast'] = true;
echo 'id_heberg = '.$_GET['id_heb'].'<br>';
echo 'id_pack = '.$_GET['id_pack'].'<br>';
 
 //echo $id."waslaaaaaaaaaat";
if(!is_null($id_heb) && !is_null($id_pack)){


    $pack = Pack::find_by_id($id_pack);
   
   
//création et préparation de données pour les convertirs en objets 
$now = new DateTime();
$dateFin=date('Y-m-d', strtotime('+1 year', strtotime($now->format('Y-m-d'))) );// +1 ans

$args = [];
$args['date_deb_heb'] = $now->format('Y-m-d') ?? NULL;
$args['date_fin_heb'] = $dateFin;

$args['espace_heb'] = $pack->espace_pack ?? NULL ;
$args['prix'] = $pack->prix_pack ?? NULL;



$hebergement->merge_attributes($args);
$result =$hebergement->update();
    
if($result){
    //echo 'jazat la requete';
    session_start();
    $_SESSION['toast'] = true;
    $_SESSION['toastType'] = "modification (renouvelement)";
    redirect_to(url_for('dashboard.php'));
  }else{
     echo 'mamchatch' . var_dump($result);
  }


}else{
    //echo 'faragh';
}

?>
