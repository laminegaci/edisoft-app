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
                    </i>&nbsp;Ajouter un hébérgement</h2>
                <br><br>



                <div class="thirteen wide column">
                    <form class="ui large form" method="POST" action="simple.php">
                        <div class="fields">


                            <div class="eight wide field">
                                <label for="">Client:</label>
                                <div class="ui search">
                                    <div class="ui icon input">
                                        <input class="prompt" type="text" placeholder="Common passwords...">
                                        <i class="search icon"></i>
                                    </div>
                                    <div class="results"></div>
                                </div>

                            </div>


                            <div class="eight wide field">
                                <label for="">Hébérgement:</label>
                                <select class="ui   " id="menu_type" name="type_hebergement" required>
                                    <div class="menu">
                                        <option value="">Pack..</option>

                                        <option value="1">Nom de domaine</option>

                                        <option value="2">Wind</option>
                                        <option value="3">Thunder</option>
                                        <option value="4">Wave</option>

                                        <option value="5">Tornado</option>
                                        <option value="6">Storm</option>
                                        <option value="7">Sunshine</option>

                                        <option value="8">Moon</option>
                                        <option value="9">Earth</option>
                                        <option value="10">Sun</option>
                                    </div>

                                </select>
                            </div>


                           



                        </div>

                        <div class="fields">
                        <div class="eight wide field">
                                <label>URL</label>
                                <input type="text" placeholder="Edisoft.com" name="URL" autocomplete="off">
                            </div>


                            <div class="eight wide field">
                                <label for="">Date début</label>
                                <div class="ui calendar standard_calendar">
                                    <div class="ui input left icon">
                                        <i class="calendar icon"></i>
                                        <input type="text" placeholder="Date de début.." name="date_debut"
                                            autocomplete="off" value="">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="field">
                            <input type="submit" class="ui big green right floated button" value="Ajouter">

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
$(document).ready(function() {

   
    $('.ui.search')
  .search({
    apiSettings: {
        url: 'getclient.php/?q={query}'
    }
   

    
   
    
  });
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