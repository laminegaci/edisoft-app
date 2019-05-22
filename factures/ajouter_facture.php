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
.open_fact{
        border-right:3px solid #119ee7;
        }

</style>



<div class="page">

    <div class="ui fluid container">

        <?php include('../includes/menu_head.php');
     $clients = Client::find_all();
        
        ?>

        <div class="ui padded grid">

            <div class="ui fifteen wide column row centered grid segment">
                <h2 class="ui left aligned header"><i class=" icons">
                        <i class="server icon"></i>
                        <i class="corner add icon"></i>
                    </i>&nbsp;Impression de la facture</h2>
                <br><br>



                <div class="thirteen wide column">
                    <form class="ui large form" method="POST" action="facture.php" >
                        <div class="fields">

<?php 

 ?>
                            <div class="ten wide field">
                                <label for="">Client:</label>
                                <select class="ui search dropdown" name="id_cl" value=''>
                                <option value="<?php if(isset($_GET['id']) ){ echo urldecode($_GET['id']);  
                                 } ?>" <?php if(isset($_GET['id']) ){ echo "selected";    }; ?> >
                                <?php 
                                 if(isset($_GET['id']) ){ echo urldecode($_GET['id']);  
                                 }else{
                                     echo 'Client:';
                                 }; 
                                ?></option>

                               <?php foreach ($clients as $client) {
                                   ?>
                                <option value="<?php echo $client->id_cl . '-'.$client->nom_cl . " " . $client->prenom_cl; ?>">  <?php echo $client->id_cl . '-'.$client->nom_cl . " " . $client->prenom_cl; ?></option>

                                <?php
                               }?>
                                </select>


                            </div>


                        
                           



                        </div>

                        <div class="fields">

                                            <div class="field">

                                            <label for="">Paiement en :</label>
                                <select class="ui icon dropdown" id="menu_type" name="type_pai_fact" >
                                    <div class="menu">
                                        <option value="">type...</option>

                                        <option value="cheque" id="cheque">Chéque</option>

                                        <option value="espece" id="espece">Espéce</option>
                                        <option value="ccp" id="ccp">CCP</option>
                                       
                                    </div>

                                </select>
                                            </div>

                        </div>
                        <div class="fields">
                            <div class="field"  >
                            
                        </div>
                        <div class="field">
                            <input type="submit" class="ui big green right floated button" value="valider" name="imprimer">

                        </div> 

                         
                    </form>
                   
                <div class="ui error message" ></div>
                   

                </div>
            




            </div><!-- end segment-->





        </div><!-- end grid-->


    </div><!-- end container-->



</div>
<!--fin page-->

<script>

$('.ui.dropdown')
  .dropdown({
      ignoreDiacritics: true,
      sortSelect: true,
      fullTextSearch: 'exact'
  })
;

$('.ui.search')
  .search({
    apiSettings: {
    url: 'getclient.php/?q={query}'
    }
});


$(document).ready(function() {


    $('.selection.dropdown, #menu_type')
        .dropdown({
            ignoreDiacritics: true,
      sortSelect: true,
      fullTextSearch: 'exact'
        });

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
});

$('.ui.large.form')
        .form({
            on: 'blur',
            fields: {

                id_cl: {
                    identifier: 'id_cl',
                    rules: [{
                            type: 'empty',
                            prompt: '<b>selectionner</b> un client!'
                        }



                    ]
                },
                type_pai_fact: {
                    identifier: 'type_pai_fact',
                    rules: [{
                            type: 'empty',
                            prompt: '<b>type de payement</b> ne doit pas être vide!'
                        }



                    ]
                },
               
            }
        });

</script>


<?php 
require_once("../includes/app_foot.php");
?>