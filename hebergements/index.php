<?php 
require_once("../includes/initialize.php");
include("../includes/app_head.php");
?>

<style>
.ui.search .prompt{
    border-radius: 500rem !important;
}
.ui.fifteen.wide.column.row.centered.grid.segment{
    height: 85vh;
    overflow: scroll;
}
.ui.big.form select{
height: 100%;
}
.open_heb{
        border-right:3px solid #119ee7;
        }
</style>

<div class="page">

    <div class="ui fluid container">

        <?php include('../includes/menu_head.php');
        $bool = $_SESSION['toast'] ?? false; 
   $hebergement = new Hebergement;
   $client = new Client;
        
        ?>

        <div class="ui padded grid">

            

            <div class="ui fifteen wide column row centered grid segment">

                <div class="ui pointing secondary big menu">


                    <h1 class="ui  header item"><i class="server icon"></i>Hébérgements</h1>

                    <?php
$rows = Hebergement::rows_tot();


?>


                    <div class="right item">
                        <a href="ajouter_hebergement.php" class="">
                            <i class="big plus circle icon"></i>

                        </a>
                        <div class="ui search  ">
                                        <div class="ui icon input" id="load_search">
                                            <input class="prompt" type="text" placeholder="chercher..."
                                                id="search">
                                            <i class="search icon"></i>
                                        </div>
                                        <div class="results"></div>
                        </div>
                    </div>
                </div>
                <?php 
   $hebergements= $hebergement->find_all();
   $pack = new Pack;
   $packs= $pack->find_all();
   //var_dump($pack);
   
?>

                <div class="ui tab  active" data-tab="first">
               
                <div class="row">
                     <div class=" column">
                         <div class="ui big form">
                             <div class="fields">
                                 <div class=" five wide field" >
                                    <select name="" id="selectFilter" class="ui dropdown">
                                        <option value="" id="all">Tout (<?php echo $rows ?>)</option>
                                      <?php 
                                
                                if ($packs) {
                                    foreach ($packs as $pack) {
                                        ?>

                                        <option value="<?php echo h($pack->nom_pack);?>" id="<?php echo h($pack->nom_pack);?>">
                                        <?php echo h($pack->nom_pack) . ' (' . Hebergement::rows_where_id($pack->id_pack) . ')';?>
                                    </option>
                                   
                                   <?php
                                    }
                                } ?>
                                    </select>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                        <div class="ui bottom attached active tab " data-tab="first/a">



                            <table class="ui striped large table" id="tabAll">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>client</th>
                                        
                                        <th>nom de domaine</th>
                                        <th>pack</th>

                                        <th>date début</th>
                                        <th>date d'expiration</th>
                                        <th>prix pack</th>
                                        <th>etat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                
                                if ($hebergements) {
                                   
                                   foreach ($hebergements as $hebergement) {
                                    
                                 
                                 ?>

                                    <tr class="all <?php echo h($hebergement->nom_pack);
                                    $dateDeb = new DateTime();
                                    $dateFin = new DateTime($hebergement->date_fin_heb);
                                   
                                    $interval = $dateDeb->diff($dateFin);
                                    
                                    if($interval->format('%R%a') <= 0 ){
                                        echo ' red';
                                    }elseif($interval->format('%R%a') <= 30){
                                        echo ' orange';
                                    }

                                    ?>">
                                        <td><?php echo h($hebergement->id_heb); ?></td>
                                        <td><?php echo h($hebergement->nom_cl ." ". $hebergement->prenom_cl ); ?></td>
                                        
                                        <td><?php echo h($hebergement->url_heb) ;?></td>
                                        <td><b><?php echo h($hebergement->nom_pack);?></b><small>(<?php echo h($hebergement->espace_heb); ?>Go)</small></td>

                                        <td><?php echo h($hebergement->date_deb_heb); ?></td>
                                        <td><?php echo h($hebergement->date_fin_heb) ;?></td>

                                        <td><?php echo h($hebergement->prix). " <b>Da</b>" ;?></td>
                                        <td><?php  if($hebergement->id_fact == NULL){echo 'non payé';}else{echo 'payé';} ?></td>
                                    
                                    </tr>
                                   
                                    <?php
                                   }
                                }
                                ?>
                                
                                </tbody>
                            </table>
                            <?php if($rows==0) echo '<h3 style="color:red">pas d\'hybergement ajouter</h3>';?>




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
$(document).ready(() => {
    <?php
if($bool){
    echo "
    $('body')
 .toast({
   class: 'success',
  
    message: ` ".  $_SESSION['toastType'] ." a été effectuée avec succés!`
 })
;
    ";
}    
$_SESSION['toast'] = false;
?>

})

     $('#selectFilter').change(function () {
                                        $(".all").hide();
                                        $("." + $(this).find(":selected").attr("id")).show();
                             });

$('.menu .item')
    .tab();

    $("#search").keyup(function() {
                 var searchText = $(this).val().toLowerCase();
                 // Show only matching TR, hide rest of them
                 $.each($("#tabAll tbody tr"), function() {
                     if ($(this).text().toLowerCase().indexOf(searchText) === -1)
                         $(this).hide();
                     else
                         $(this).show();
                 });
             });
</script>


<?php 
require_once("../includes/app_foot.php");
?>
?>