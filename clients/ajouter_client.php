
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
</style>

    <?php 
require_once("../includes/initialize.php");

/////////////////////////////////////////////////////////////////////////////

if(is_post_request() && isset($_POST['ajouter'])){
      
    /*
    foreach ($_POST as $key => $value) {            
      $_POST[$key] = test_input($value);
      }
    */

   
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
      $args['nom_societe_cl'] = $_POST['entreprise'] ?? NULL;
      $args['id_ad'] = /*$_POST[''] ?? NULL*/ 1;


     // var_dump($args) . "<br>";
      
      $client = new Client($args);
      $result = $client->create();

      if($result == true){
        redirect_to('index.php');
      }else{
         // echo "error";
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
                                <input type="text" name="nom_cl" placeholder="Nom de client">
                            </div>
                            <div class="field">
                                <label>Prénom</label>
                                <input type="text" name="prenom_cl" placeholder="Prenom de client">
                            </div>

                        </div>
                        <div class="three fields">
                            <div class="field">
                                <label style="">Adresse</label>
                                <input type="text" name="adresse" placeholder="Adresse">
                            </div>
                            <div class="field">
                                <label>E-mail</label>
                                <input type="Email" name="email" placeholder="exemple@gmail.com">
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
                                    <input type="radio" id="particulier" name="check" value="particulier" class="hidden"
                                        checked>
                                    <label>Particulier</label>
                                </div>
                            </div>

                        </div>
                        <div class="one  fields">
                            <div class="field">
                                <div class="ui radio checkbox">
                                    <input type="radio" id="professionnel" name="check" value="professionnel"
                                        class="hidden">
                                    <label>Professionnel</label>
                                </div>
                            </div>
                        </div>
                        <div class="one  fields">
                            <div class="field" id="myfield" hidden>
                                <label>Nom de l'entreprise</label>
                                <input type="text" name="entreprise" placeholder="Entreprise" id="myCheck" disabled>
                            </div>
                        </div>
                        <div class="one  fields">
                            <div class="field">

                                <input type="submit" class="ui button" value="ajouter" name="ajouter">
                            </div>
                        </div>

                        <div class="ui error message"><?php echo $php_errormsg ?? ''; ?></div>
                    </form><!-- end form -->

                </div><!-- end segment-->





            </div><!-- end grid-->


        </div><!-- end container-->



    </div>
    <!--fin page-->


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


    $('.ui.form')
        .form({
            on: 'blur',
            fields: {

                nom_cl: {
                    identifier: 'nom_cl',
                    rules: [{
                            type: 'empty',
                            prompt: 'manque un nom'
                        },

                    ]
                },
                prenom_cl: {
                    identifier: 'prenom_cl',
                    rules: [{
                            type: 'empty',
                            prompt: 'manque un prenom'
                        },

                    ]
                },
                adresse_cl: {
                    identifier: 'adresse',
                    rules: [{
                            type: 'empty',
                            prompt: 'manque une adresse'
                        },

                    ]
                },
                email_cl: {
                    identifier: 'email',
                    rules: [{
                            type: 'empty',
                            prompt: 'manque un email'
                        },

                    ]
                },
                telephon_cl: {
                    identifier: 'telephone',
                    rules: [{
                            type: 'number',
                            prompt: 'manque un numero telephon'
                        },

                    ]
                },
                entreprise: {
                    identifier: 'entreprise',
                    rules: [{
                            type: 'empty',
                            prompt: 'manque un nom d\'entreprise'
                        },

                    ]
                },

            }
        });
    </script>


    <?php 
require_once("../includes/app_foot.php");
?>
