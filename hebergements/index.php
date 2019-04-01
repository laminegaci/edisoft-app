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
.ui.fifteen.wide.column.row.centered.grid.segment{
    height: 85vh;
    overflow: scroll;
}
</style>

<div class="page">

    <div class="ui fluid container">

        <?php include('../includes/menu_head.php');
   $hebergement = new Hebergement;
   $client = new Client;
        
        ?>

        <div class="ui padded grid">

            

            <div class="ui fifteen wide column row centered grid segment">

                <div class="ui pointing secondary big menu">


                    <h1 class="ui center aligned header item"><i class="server icon"></i>Hébérgements</h1>

                    <?php
$rows = Hebergement::rows_tot();

?>
                    <a class="item active" data-tab="first"><i class="large box icon"></i>Tout(<?php echo $rows;?>)</a>


                    <div class="right item">
                        <a href="ajouter_hebergement.php" class="">
                            <i class="large plus circle icon"></i>

                        </a>
                        <div class="ui search  ">
                                        <div class="ui icon input">
                                            <input class="prompt" type="text" placeholder="chercher..."
                                                id="search">
                                            <i class="search icon"></i>
                                        </div>
                                        <div class="results"></div>
                        </div>
                    </div>
                </div>

                <div class="ui tab  active" data-tab="first">
                <?php if($rows==0) echo '<h3 style="color:red">pas d\'hybergement ajouter</h3>';?>
                        <div class="ui top attached tabular  menu">
                            

                        </div>
                        <div class="ui bottom attached active tab " data-tab="first/a">
<?php 
   $hebergements= $hebergement->find_all();
   //var_dump($hebergements);
   
?>

                            <table class="ui striped table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>client</th>
                                        
                                        <th>nom de domaine</th>
                                        <th>date début</th>
                                        <th>date d'expiration</th>
                                        <th>pack</th>
                                        <th>prix pack</th>
                                        <th>etat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                
                                if ($hebergements) {
                                   
                                   foreach ($hebergements as $hebergement) {
                                    
                                 
                                 ?>

                                    <tr>
                                        <td><?php echo h($hebergement->id_heb); ?></td>
                                        <td><?php echo h($client->prenom_cl ." ". $client->nom_cl); ?></td>
                                        
                                        <td><?php echo h($hebergement->url_heb) ;?></td>
                                        <td><?php echo h($hebergement->date_deb_heb); ?></td>
                                        <td><?php echo h($hebergement->date_fin_heb) ;?></td>
                                        <td><?php echo h($hebergement->nom_pack);?></td>
                                        <td><?php echo h($hebergement->prix). " <b>Da</b>" ;?></td>
                                        <td><?php  if($hebergement->id_fact == NULL){echo 'non payé';}else{echo 'payé';} ?></td>
                                       
                                    </tr>
                                   
                                    <?php
                                   }
                                }
                                ?>
                                </tbody>
                            </table>




                        </div>

                       
                       



                  
                   


                                <!-- fin tornado -->

                  
                     

      
                       







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