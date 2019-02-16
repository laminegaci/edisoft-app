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
                            <label>Nom du site</label>
                            <input type="text" placeholder="Username" name="nom_site" autocomplete="off" >
                        </div>





                        <div class="field">
                        <label for="">Date début</label>
                            <div class="ui calendar" id="standard_calendar">
                                <div class="ui input left icon">
                                    <i class="calendar icon"></i>
                                    <input type="text" placeholder="Date de début.." name="date_debut" autocomplete="off" >
                                </div>
                            </div>

                        </div>
                        <div class="field">
                            <label>Délai</label>
                            <div class="ui left labeled input">
                                <div class="ui label">Jours</div>
                                <input type="text" name="delai" autocomplete="off" placeholder="30..">

                            </div>
                        </div>

                    </div>

                    <div class="fields">
                        <div class="field">
                            <label>Prix</label>
                            <div class="ui left icon input">
                                <i class="dollar sign icon"></i>
                                <input type="text" name="prix" autocomplete="off" placeholder="60000..">

                            </div>
                        </div>

                        <div class="field">
                            <label>Versement</label>
                            <div class="ui left icon input">
                                <i class="hand holding usd icon"></i>
                                <input type="text" name="versement" autocomplete="off" >

                            </div>
                        </div>

                    </div>


                    <div class="grouped fields">
                        <label for="fruit">Selectionner type du site</label>
                        <div class="field">
                            <div class="ui radio checkbox checked">
                                <input type="radio" checked="" tabindex="0" class="hidden" name="type" value="statique">
                                <label>Statique</label>
                            </div>
                        </div>
                        <div class="field">
                            <div class="ui radio checkbox">
                                <input type="radio" tabindex="0" class="hidden" name="type" value="dynamique">
                                <label>Dyanmique</label>
                            </div>
                        </div>


                    </div>



                    <div class="field">


                        <div class="ui toggle checkbox">
                            <input type="checkbox" tabindex="0" class="hidden" name="anglais">
                            <label>Anglais</label>
                        </div>

                    </div>



                    <div class=" field">

                        <div class=" field">
                            <div class="ui toggle checkbox">
                                <input type="checkbox" tabindex="0" class="hidden" name="arabe">
                                <label>Arabe</label>
                            </div>

                        </div>


                    </div>

                    <div class=" field">

                        <input type="submit" name="valider" value="valider" class="ui large green button">

                    </div>
                    <div class="ui error message"></div>
            </div>



            </form>

<?php 
        if(isset($_POST['valider'])){
            echo $_POST['date_debut'];
        }
?>




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
      date: function (date, settings) {
      if (!date) return '';
      var day = date.getDate();
      var month = date.getMonth() + 1;
      var year = date.getFullYear();
      return year + '-' + month + '-' + day;
    }
    }, 

    text: {
      days: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
      months: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Decembre'],
      monthsShort: ['Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Aou', 'Sep', 'Oct', 'Nov', 'Dec'],
      today: 'Aujourd\'hui',
      now: 'Maintenant'
     
    }
  })
;
$('.ui.checkbox')
    .checkbox();

$('.ui.radio.checkbox')
    .checkbox();

$('.ui.form')
    .form({
        on: 'blur',
        fields: {

            nom_site: {
                identifier: 'nom_site',
                rules: [{
                        type: 'empty',
                        prompt: '<b>le nom de site</b> ne doit pas être vide!'
                    }



                ]
            },
            delai: {
                identifier: 'delai',
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
                identifier: 'prix',
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
                identifier: 'versement',
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
                identifier: 'date_debut',
                rules: [{
                        type: 'empty',
                        prompt: "<b>la date</b> ne doit pas être vide!"
                    }
                    

                    


                ]
            }


        }
    });
</script>


<?php 
require_once("../includes/app_foot.php");
?>