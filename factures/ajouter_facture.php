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

select.ui.dropdown {
    height: 100%;
}
</style>



<div class="page">

    <div class="ui fluid container">

        <?php include('../includes/menu_head.php'); ?>

        <div class="ui padded grid">

            <div class="ui fifteen wide column row centered grid segment">
                <h2 class="ui left aligned header"><i class=" icons">
                        <i class="server icon"></i>
                        <i class="corner add icon"></i>
                    </i>&nbsp;Impression de la facture</h2>
                <br><br>



                <div class="thirteen wide column">
                    <form class="ui large form" method="POST" action="facture.php">
                        <div class="fields">


                            <div class="ten wide field">
                                <label for="">Client:</label>
                                <div class="ui search">
                                    <div class="ui icon input">
                                        <input class="prompt" type="text" placeholder="Common passwords..." name="id_cl">
                                        <i class="search icon"></i>
                                    </div>
                                    <div class="results"></div>
                                </div>

                            </div>


                        
                           



                        </div>

                        <div class="fields">

                                            <div class="field">

                                            <label for="">Paiement en :</label>
                                <select class="ui  icon dropdown" id="menu_type" name="type_pai_fact" required>
                                    <div class="menu">
                                        <option value="">type...</option>

                                        <option value="cheque">Chéque</option>

                                        <option value="espece">Espéce</option>
                                        <option value="ccp">CCP</option>
                                       
                                    </div>

                                </select>
                                            </div>

                        </div>

                       
                        

                        <div class="field">
                            <input type="submit" class="ui big green right floated button" value="Imprimer" name="imprimer">
                            
                        </div>
                        <div class="ui error message"></div>

                    </form>

                </div>





            </div><!-- end segment-->





        </div><!-- end grid-->


    </div><!-- end container-->



</div>
<!--fin page-->


<script>

$('.ui.search')
  .search({
    apiSettings: {
        url: 'getclient.php/?q={query}'
    }
   

    
   
    
  })
;
$(document).ready(function() {


    $('.selection.dropdown, #menu_type')
        .dropdown();

    $('.standard_calendar')
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
                months: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août',
                    'Septembre',
                    'Octobre', 'Novembre', 'Decembre'
                ],
                monthsShort: ['Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Aou', 'Sep', 'Oct', 'Nov',
                    'Dec'
                ],
                today: 'Aujourd\'hui',
                now: 'Maintenant'

            }
        });




    $('.ui.form')
        .form({
            on: 'blur',
            fields: {

                url_dns: {
                    identifier: 'url_dns',
                    rules: [{
                            type: 'empty',
                            prompt: '<b>URL de site</b> ne doit pas être vide!'
                        }



                    ]
                },
                date_debut: {
                    identifier: 'date_debut',
                    rules: [{
                            type: 'empty',
                            prompt: '<b>la date de début</b> ne doit pas être vide!'
                        }



                    ]
                }





            }
        });

      




});
</script>


<?php 
require_once("../includes/app_foot.php");
?>