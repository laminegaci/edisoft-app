
<?php 
require_once('../includes/initialize.php');
///////////// Insertion de la facture :)///////////////////

if (isset($_POST['valider'])) {

    $args = [];
    $args['id_ad'] =1; //$_SESSION['id_ad'] ?? NULL;
    $args['id_cl'] =  $_POST['id_cl'] ?? '';

    $args['totale_fact'] =  $_POST['totale_fact'] ?? '';
    $args['type_pai_fact'] =  $_POST['type_pai_fact'] ?? '';
    $args['date_fact'] =  date('Y-m-d');
    //var_dump($args);
    $heb_array = unserialize($_POST['heb_array']);
    

    $facture = new Facture($args);
    
    $result = $facture->create();
    if($result){

      
        $update = Facture::update_heb_id($heb_array);
      
      if($update){
        redirect_to('index.php');

      }else{
          echo "madarch update";
      }

    }else{
        echo 'erreur créée';
    }
    
}

?>