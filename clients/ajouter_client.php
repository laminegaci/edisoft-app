
<style>
#search {
    background: inherit !important;
    margin-bottom: 10px;
    border: 0;
}

.prompt {
    border-radius: 5px !important;
}

label {
    float: left;
}
.open_cl{
        border-right:3px solid #119ee7;
        
        }
.error_email{
    background-color:#FFF6F6;
    color: #9F3A38;
    border:1px solid;
    border-radius:4px;
}
.error_email li{
    color: #9F3A38;
    margin:2px;
    text-align: left;
}
</style>

    <?php 
require_once("../includes/initialize.php");

/////////////////////////////////////////////////////////////////////////////

if(is_post_request() && isset($_POST['ajouter'])){

$check_exist = Client::check_email($_POST['email']); 
if($check_exist){
       
    $_SESSION['email'] = true;
    $_SESSION['error'] = 'email exist deja';
   
}
else{
    
//if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) { hadi tchecker l'email
          

   
    //création et préparation de données pour les convertirs en objets 
      $args = [];
      $args['nom_cl'] = $_POST['nom_cl'] ?? NULL;
      $args['prenom_cl'] = $_POST['prenom_cl'] ?? NULL;
      $args['num_tel_cl'] = $_POST['telephone'] ?? NULL;
      $args['email_cl'] = $_POST['email'] ?? NULL;  
      $args['adresse_cl'] = $_POST['adresse'] ?? NULL;

      if($_POST['check'] == 'particulier'){
        $args['type_cl'] = 1;
      }else{
      $args['type_cl'] = 0;
      }
      $args['nom_societe_cl'] = $_POST['entreprise'] ?? '/';
      $args['id_ad'] = /*$_POST[''] ?? NULL*/ 1;


     // var_dump($args) . "<br>";
      
      $client = new Client($args);
      var_dump($client);
      ///////////////////////////////////////////////
      $result = $client->check_validation();
      
      if($result === true){

        $_SESSION['toast'] = true;
        $_SESSION['toastType'] = "un ajout d'un client ";
        redirect_to('index.php');

      }else{
        session_start();
        $_SESSION['errors'] = $result;//ykhabi les erreurs ta3 validate()
        redirect_to('ajouter_client.php');//bah yweli hna
      }
      //////////////////////////////////////////////
    //   $result = $client->create();

    //   if($result == true){
        
    //     $_SESSION['toast'] = true;
    //     $_SESSION['toastType'] = "un ajout d'un client ";

    //     redirect_to('index.php');
    //   }else{
    //      // echo "error";
    //   }
    
///}hna taghla9 tcheck email
// else{
//     $_SESSION['valid_email'] = true;
//     $_SESSION['error_valid'] = 'email non valide';

 

// }
} 
}
///////////////////////////////////////////////////////////////////////////////////
include("../includes/app_head.php");
?>


    <div class="page">

        <div class="ui fluid container">

            <?php include('../includes/menu_head.php'); ?>






            <div class="ui padded grid">

                <div class="ui fifteen wide column row centered grid segment">
                    <h2 class="ui left aligned header"><i class=" icons">
                            <i class="users icon"></i>
                            <i class="corner add icon"></i>
                        </i>&nbsp;Ajouter un client</h2>
                    <form method="POST" class="ui form">
                        <div class="two fields">
                            <div class="field">
                                <label>Nom</label>
                                <input type="text" value="<?php if(isset($_POST['nom_cl'])) echo $_POST['nom_cl']; ?>" name="nom_cl" placeholder="Nom de client">
                            </div>
                            <div class="field">
                                <label>Prénom</label>
                                <input type="text" value="<?php if(isset($_POST['prenom_cl'])) echo $_POST['prenom_cl']; ?>" name="prenom_cl" placeholder="Prenom de client">
                            </div>

                        </div>
                        <div class="three fields">
                            <div class="field">
                                <label style="">Adresse</label>
                                <input type="text" value="<?php if(isset($_POST['adresse'])) echo $_POST['adresse']; ?>" name="adresse" placeholder="Adresse">
                            </div>
                            <div class="field">
                                <label>E-mail</label>
                                <input type="Email" name="email" placeholder="exemple@gmail.com" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>">
                            </div>
                            <div class="field">
                                <label>Téléphone</label>
                                <input type="text" name="telephone" placeholder="+213 ...">
                            </div>

                        </div>
                        <label>Vous ètes:</label><br><br>
                        <div class="one  fields">
                            <div class="field">
                                <div class="ui radio checkbox">
                                    <input type="radio"  id="particulier" name="check" value="particulier" class="hidden"
                                        checked>
                                    <label>Particulier</label>
                                </div>
                            </div>

                        </div>
                        <div class="one  fields">
                            <div class="field">
                                <div class="ui radio checkbox">
                                    <input type="radio"  id="professionnel" name="check" value="professionnel"
                                        class="hidden">
                                    <label>Professionnel</label>
                                </div>
                            </div>
                        </div>
                        <div class="one  fields">
                            <div class="field" id="myfield" hidden>
                                <label>Nom de l'entreprise</label>
                                <input type="text"  name="entreprise" placeholder="Entreprise" id="myCheck" disabled>
                            </div>
                        </div>
                        <div class="one  fields">
                            <div class="field">

                                <input type="submit" class="ui button" value="ajouter" name="ajouter">
                            </div>
                        </div>

                        <!-- <div class="ui error message"><?php echo $php_errormsg ?? ''; ?></div> -->
                        <?php
                        if($_SESSION['email']){
                            echo '<div class="error_email"><ul><li>'.$_SESSION['error'].'</li></ul></div>';
                        }
                       
                        ?>
                    </form><!-- end form -->
                    <div class="<?php if(isset($_SESSION['errors']) and !empty($_SESSION['errors'])){ echo 'ui error message';} ?>">
                        <ul class="list">
                                        
                        <?php
                            
                            foreach ($_SESSION['errors'] as $error) {
                            
                                echo '<li>'. $error . '</li>';
                            }
                        
                        
                        ?>

                        </ul>

                    </div>

                </div><!-- end segment-->





            </div><!-- end grid-->


        </div><!-- end container-->



    </div>
    <!--fin page-->

<?php
$_SESSION['errors'] = [];
$_SESSION['email'] = false;
$_SESSION['valid_email'] = false;
unset($_SESSION["error"]);
unset($_SESSION["error_valid"]);

?>
    <script>
    $('.menu .item')
        .tab();

    $('.ui.radio.checkbox')
        .checkbox();

    $('#particulier').change(function() {
        $("#myfield").hide(500, function() {

        });
        document.getElementById("myCheck").disabled = true;

    });
    $('#professionnel').change(function() {
        $("#myfield").show(500, function() {

        });
        document.getElementById("myCheck").disabled = false;

    });


    
       
    </script>


    <?php 
require_once("../includes/app_foot.php");
?>
