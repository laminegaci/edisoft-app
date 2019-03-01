<?php 
require_once("../includes/initialize.php");
include("../includes/app_head.php");
?>

<style>
#search {
    background: inherit !important;
    margin-bottom: 10px;
    border: 0;
}

.prompt {
    border-radius: 5px !important;
}
</style>

<div class="page">

    <div class="ui fluid container">

        <?php include('../includes/menu_head.php'); ?>

        <div class="ui padded grid">

            

            <div class="ui fifteen wide column row centered grid segment">

                <div class="ui pointing secondary big menu">


                    <h1 class="ui center aligned header item"><i class="server icon"></i>Factures</h1>


                   

                    <div class="right item">
                        <a href="ajouter_facture.php" class="">
                            <i class="large plus circle icon"></i>

                        </a>
                        <div class="ui action input">
                            <input type="text" placeholder="Rechercher">
                            <div class="ui button">Go</div>
                        </div>
                    </div>
                </div>

                <div class="ui tab  active" data-tab="first">
                        <div class="ui top attached tabular  menu">
                            <a class="active item" data-tab="first/a">Tout</a>
                         

                        </div>
                        <div class="ui bottom attached active tab segment" data-tab="first/a">


                            <table class="ui striped table" >
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>client</th>
                                        <th>Date d'impression</th>   
                                        <th>Nombre de packs</th>                                     
                                        <th>Totale TTC</th>
                                        <th>Payement en</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                      <td>1</td>
                                      <td>BENOUNNAS Oussama</td>
                                      <td>3/3/2019</td>
                                      <td>3 packs</td>
                                      <td>7500 DA</td>
                                      <td>espéce</td>

                                    </tr>
                                   
                                </tbody>
                            </table>




                        </div>
                        






                    </div>


                 

              
            </div>




        </div>


        <!-- end row head-->



    </div>






</div>
<!--fin page-->


<script>
$('.menu .item')
    .tab();
</script>


<?php 
require_once("../includes/app_foot.php");
?>
?>