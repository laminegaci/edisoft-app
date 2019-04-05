<?php 
require_once("../includes/initialize.php");
include("../includes/app_head.php");
?>

<style>

.ui.fifteen.wide.column.row.centered.grid.segment{
    height: 85vh;
    overflow: scroll;
}

.ui.search .prompt{
    border-radius: 500rem !important;
}
</style>

<div class="page">

    <div class="ui fluid container">

        <?php include('../includes/menu_head.php'); ?>

        <div class="ui padded grid">

            

            <div class="ui fifteen wide column row centered grid segment">

                <div class="ui pointing secondary big menu">


                    <h1 class="ui  header item"><i class="server icon"></i>Factures</h1>


                   

                    <div class="right item">
                        <a href="ajouter_facture.php" class="">
                            <i class="big plus circle icon"></i>

                        </a>
                        <div class="ui search  ">
                                            <div class="ui icon input">
                                                <input class="prompt" type="text" placeholder="Rechercher..."
                                                    id="search">  
                                                <i class="search icon"></i>
                                            </div>
                                            <div class="results">
                                            </div>
                        </div>
                        
                    </div>
                </div>

                <div class="ui tab  active" data-tab="first">
                        <div class="ui top attached tabular  menu">
                            <a class="active item" data-tab="first/a">Tout</a>
                         

                        </div>
                        <div class="ui bottom attached active tab segment" data-tab="first/a">

<?php $factures = Facture::find_all(); ?>
                            <table class="ui striped table" >
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>client</th>
                                        <th>Date d'impression</th>   
                                        <th>Totale TTC</th>
                                        <th>Payement en</th>
                                        <th>ccp image</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if($factures){
                                        foreach ($factures as $facture) {
                                           $client = Client::find_by_id($facture->id_cl);
                                          
                                    ?>
                                    <tr>
                                      <td><?php echo h($facture->id_fact);?></td>
                                      <td><?php echo h($client->nom_cl ." " .$client->prenom_cl);?></td>
                                      <td><?php echo h($facture->date_fact);?></td>
                                      <td><?php echo h($facture->totale_fact);?></td>
                                      <td><?php echo h($facture->type_pai_fact);?></td>
                                      
                                      <td ><?php if($facture->ccp_img_fact == NULL){ echo "/";}else { echo '<img style="width:100px;height:20px;" src="uploads/'.$facture->ccp_img_fact.'" alt="malgahach">';}?></td>

                                    </tr>
                                    <?php }
                                    } ?>
                                    
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