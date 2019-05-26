<?php 
require_once("../includes/initialize.php");
require_login();
   /////////////////////////////////////////////////////////////////////////////

   if(is_post_request() && isset($_POST['ajouter'])){

    $_POST['multilan_con'] = join('-', $_POST['multilan_con']);
    $position_tire= strpos($_POST['id_cl'],  '-');

    $_POST['id_cl'] = substr($_POST['id_cl'], 0, $position_tire);
   

    
    //var_dump($_POST);
      
    /*
    foreach ($_POST as $key => $value) {            
      $_POST[$key] = test_input($value);
      }
    */

   
    //création et préparation de données pour les convertirs en objets 
    
    $args = [];
      $args['date_deb_con'] = $_POST['date_deb_con'] ?? NULL;
      $args['delai_con'] = $_POST['delai_con'] ?? NULL;
      $args['type_con'] = $_POST['type_con'] ?? 'statique';
      $args['prix_con'] = $_POST['prix_con'] ?? NULL;

      $args['versement_con'] = ($_POST['prix_con'] * 30 / 100) ?? NULL;


      $args['multilan_con'] = $_POST['multilan_con'] ?? NULL;
      $args['etat_con'] = $_POST['etat_con'] ?? NULL;
      $args['commentaire_con'] = $_POST['commentaire_con'] ?? NULL;
      $args['id_ad'] = 1;//$_POST['id_ad'] ?? NULL ;
      $args['id_cl'] = $_POST['id_cl'] ?? NULL;

      $args['nom_con'] = $_POST['nom_con'] ?? NULL;


     // var_dump($args) . "<br>";
      
     
      $conception = new Conception($args);
      $result = $conception->create();
        //var_dump($conception->sani_echo());

      if($result == true){
        $_SESSION['toast'] = true;
    $_SESSION['toastType'] = "une conception a été ajoutée avec succés!";
        redirect_to('index.php');
      }else{
         // echo "error";
      }
      
      
    
}


///////////////////////////////////////////////////////////////////////////////////

?>