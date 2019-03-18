<?php 
require_once("../includes/initialize.php");
include("../includes/app_head.php");
?>
<style>
label {
    float: left;
}

.ui.checkbox {
    display: block;
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
      
      if($_POST['type_con'] == 'statique'){
        $args['type_con'] = 0;
      }else{
      $args['type_con'] = 1;
      }

    //   if($_POST['check_anglais'] == 'anglais'){
    //     $args['check_anglais'] = 'oui';
    //   }else{
    //   $args['check_anglais'] = 'Non';
    //   }

    //   if($_POST['check_arabe'] == 'arab'){
    //     $args['check_arabe'] = 'oui';
    //   }else{
    //   $args['check_arabe'] = 'Non';
    //   }

      $args['check_anglais'] = $_POST['check_anglais'] ?? 'non';
      $args['check_arabe'] = $_POST['check_arabe'] ?? 'non';

      $args['nom_con'] = $_POST['nom_con'] ?? NULL;
     
      $args['date_db_con'] = $_POST['date_db_con'] ?? NULL;
      $args['delai_con'] = $_POST['delai_con'] ?? NULL;
      $args['prix_con'] = $_POST['prix_con'] ?? NULL;
      $args['versement_con'] = $_POST['versement_con'] ?? NULL;
      $args['commentaire_con'] = $_POST['commentaire_con'] ?? NULL;
      
      $args['id_ad'] = /*$_POST[''] ?? NULL*/ 1;
      $args['id_cl'] = /*$_POST[''] ?? NULL*/ 1;
      $args['etat_con'] = 0;


      
    //var_dump($args) . "<br>";
      
    $conception = new Conception($args);

    //echo  var_dump($conception).'</br>';
      $result = $conception->create();

      if($result == true){
        //redirect_to('index.php');
        
        header('location:index.php');
      }else{
         //echo "<div style='background-color:red;'>error</div>";
         printf("<div style='background-color:orange;'>Errormessage: %s\n</div>", mysqli_errno());
      }
    
}
?>

<div class="page">

    <div class="ui fluid container">

        <?php include('../includes/menu_head.php'); ?>

        <div class="ui padded grid">

            <div class="ui fifteen wide column row centered grid segment">
                <h2 class="ui left aligned header"><i class=" icons">
                        <i class="code icon"></i>
                        <i class="corner add icon"></i>
                    </i>&nbsp;Ajouter une conception</h2>
                <br><br>



                <form class="ui equal width large form" method="POST">

                    <div class="fields">
                            <div class="field">
                                <label for="">Client:</label>
                                <div class="ui search">
                                    <div class="ui icon input">
                                    <?php ?>
                                    <select name="nom_cl" id="">
                                        <optgroup ><option value="">selectionner un client</option></optgroup>
                                        <option value="amin1">amin1</option>
                                        <option value="amin2">amin2</option>
                                        <option value="amin3">amin3</option>
                                        <option value="amin4">amin4</option>
                                        <option value="amin5">amin5</option>
                                    </select>
                                    </div>
                                    <div class="results"></div>
                                </div>
                            </div>
                            <div class="field">
                                <label for="fruit">Selectionner type du site</label>
                                <div class="field">
                                    <div class="ui radio checkbox checked">
                                        <input type="radio" checked="" tabindex="0" class="hidden" name="type_con" value="statique">
                                        <label>Statique</label>
                                    </div>
                                </div>
                                <div class="field">
                                <div class="ui radio checkbox">
                                    <input type="radio" tabindex="0" class="hidden" name="type_con" value="dynamique">
                                    <label>Dyanmique</label>
                                </div>
                                </div>
                            </div>
                            <div class="field">
                            <label for="">Multilangue : </label>
                                <div class="ui toggle checkbox"><br><br>
                                    <input type="checkbox" tabindex="0"  value="anglais" class="hidden" name="check_anglais" style="margin-right:20px;">
                                    <label>Anglais</label>
                                </div><br><br>
                                <div class="ui toggle checkbox">
                                    <input type="checkbox" tabindex="0" value="arab" class="hidden" name="check_arabe">
                                    <label>Arabe</label>
                                </div>

                            </div>
                            

                    </div>
                    <div class="fields">
                        <div class="field">
                            <label>Nom du site</label>
                            <input type="text" placeholder="Username" name="nom_con" autocomplete="off">
                        </div>



                        


                        <div class="field">
                            <label for="">Date début</label>
                            <div class="ui calendar" id="standard_calendar">
                                <div class="ui input left icon">
                                    <i class="calendar icon"></i>
                                    <input type="text" placeholder="Date de début.." name="date_db_con" autocomplete="off">
                                </div>
                            </div>

                        </div>
                        <div class="field">
                            <label>Délai</label>
                            <div class="ui left labeled input">
                                <div class="ui label">Jours</div>
                                <input type="text" name="delai_con" autocomplete="off" placeholder="30..">

                            </div>
                        </div>

                    </div>

                    <div class="fields">
                        <div class="field">
                        <br>
                            <label>Prix</label>
                            <div class="ui left icon input">
                                <i class="dollar sign icon"></i>
                                <input type="text" name="prix_con" autocomplete="off" placeholder="60000..">

                            </div>
                        </div>

                        <div class="field">
                        <br>
                            <label>Versement</label>
                            <div class="ui left icon input">
                                <i class="hand holding usd icon"></i>
                                <input type="text" name="versement_con" autocomplete="off">

                            </div>
                        </div>
                        <div class="field">
                            <label>commentaire</label>
                            <div class="ui left icon input">
                                <i class="hand holding usd icon"></i>
                                <!-- <input type="text" name="comment" autocomplete="off"> -->
                                <textarea name="commentaire_con" cols="30" rows="3"></textarea>

                            </div>
                        </div>

                    </div>


                    <div class="grouped fields">
                        


                    </div>



                    <div class="field">


                       

                    </div>



                    <div class=" field">

                        <div class=" field">
                           

                        </div>


                    </div>

                    <div class=" field">

                        <input type="submit" name="ajouter" value="valider" class="ui large green button">

                    </div>
                    <div class="ui error message"></div>
            </div>



            </form>


        </div><!-- end segment-->





    </div><!-- end grid-->


</div><!-- end container-->



</div>
<!--fin page-->


<script>
$('#standard_calendar')
    .calendar({

        type: 'date',
        formatter: {
            date: function(date, settings) {
                if (!date) return '';
                var day = date.getDate();
                var month = date.getMonth() + 1;
                var year = date.getFullYear();
                return year + '-' + month + '-' + day;
            }
        },

        text: {
            days: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
            months: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre',
                'Octobre', 'Novembre', 'Decembre'
            ],
            monthsShort: ['Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Aou', 'Sep', 'Oct', 'Nov', 'Dec'],
            today: 'Aujourd\'hui',
            now: 'Maintenant'

        }
    });
$('.ui.checkbox')
    .checkbox();

$('.ui.radio.checkbox')
    .checkbox();

$('.ui.form')
    .form({
        on: 'blur',
        fields: {

            nom_cl: {
                identifier: 'nom_cl',
                rules: [{
                        type: 'empty',
                        prompt: '<b>Selectionner un client'
                    }



                ]
            },
            nom_site: {
                identifier: 'nom_con',
                rules: [{
                        type: 'empty',
                        prompt: '<b>le nom de site</b> ne doit pas être vide!'
                    }



                ]
            },
            delai: {
                identifier: 'delai_con',
                rules: [{
                        type: 'empty',
                        prompt: '<b>le delai</b> ne doit pas être vide!'
                    },
                    {
                        type: 'number',
                        prompt: 'veuillez entrer un delai valide'
                    }



                ]
            },
            prix: {
                identifier: 'prix_con',
                rules: [{
                        type: 'empty',
                        prompt: '<b>le prix</b> ne doit pas être vide!'
                    },
                    {
                        type: 'number',
                        prompt: 'veuillez entrer un prix valide'
                    }



                ]
            },
            versement: {
                identifier: 'versement_con',
                rules: [{
                        type: 'empty',
                        prompt: "tapez 0 dans le cas d'aucun versement"
                    },
                    {
                        type: 'number',
                        prompt: 'veuillez entrer versement valide'
                    },





                ]
            },
            date_debut: {
                identifier: 'date_db_con',
                rules: [{
                        type: 'empty',
                        prompt: "<b>la date</b> ne doit pas être vide!"
                    }





                ]
            },


        }
    });
</script>


<?php 
require_once("../includes/app_foot.php");
?>