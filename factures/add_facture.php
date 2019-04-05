
<?php 
require_once('../includes/initialize.php');
//upload image


$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["valider"])) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["image"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

//

///////////// Insertion de la facture :)///////////////////
//echo $_FILES['image']['name'];
if (isset($_POST['valider'])) {

    $args = [];
    $args['id_ad'] =1; //$_SESSION['id_ad'] ?? NULL;
    $args['id_cl'] =  $_POST['id_cl'] ?? '';

    $args['totale_fact'] =  $_POST['totale_fact'] ?? '';
    $args['type_pai_fact'] =  $_POST['type_pai_fact'] ?? '';
    $args['image'] =  $_FILES['image']['name'] ?? '';
    $args['date_fact'] =  date('Y-m-d');
    //var_dump($args);
    $heb_array = unserialize($_POST['heb_array']);
    

    $facture = new Facture($args);
    //var_dump($facture);
    $result = $facture->create();
    if($result){

      

       $update = Facture::update_heb_id($heb_array, $facture->id_fact);
      
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