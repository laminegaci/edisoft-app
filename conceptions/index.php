<?php
require_once("../includes/initialize.php");
include("../includes/app_head.php");
include('function_modal.php');


?>


<?php include('../includes/menu_head.php'); ?>

<style>
.ui.fifteen.wide.column.row.centered.grid.segment{
    height: 85vh;
    overflow: scroll;
}
</style>
<div class="page">

<div class="ui fluid container">








             <div class="ui padded grid">

                            <div class="ui fifteen wide column row centered grid segment">
                   

                         

                            <!--

                                <div class="right item">
                                      <div class="ui action input">
                                        <input type="text" placeholder="Rechercher">
                                        <div class="ui button">Go</div>
                                      </div>
                                    </div>

                            -->
                            <div class="ui pointing secondary big menu">
  

                            <h1 class="ui center aligned header item"><i class="code icon"></i>Conceptions</h1>        
<?php
$rows = Conception::rows_tot();
$rows1 = Conception::rows_statique();
$rows2 = Conception::rows_dynamique();
?>

                              <a class="item active" data-tab="first"><i class="large list icon"></i>Tout(<?php echo $rows; ?>)</a>
                              <a class="item " data-tab="second"><i class="large html5 icon"></i>Statique(<?php echo $rows1; ?>)</a>
                              <a class="item" data-tab="third"><i class="large node js icon"></i>Dynamique(<?php echo $rows2; ?>)</a>
                            

                              <div class="right item">
                              <a href="ajouter_conception.php" class="">
                                     <i class="large plus circle icon"></i>
                                                                          
                               </a>
                                      <div class="ui action input">
                                        <input type="text" placeholder="Rechercher">
                                        <div class="ui button">Go</div>
                                      </div>
                                    </div>
                            </div>


                            <div class="ui tab  active" data-tab="first">
                              <div class="ui top attached tabular menu">
                             
                                <a class="item active" data-tab="first/a"><i class="spinner yellow icon"></i>en cours</a>
                                <a class="item " data-tab="first/b"><i class="check green circle icon"></i>terminées</a>
                              </div>
                              <div class="ui bottom attached tab segment active" data-tab="first/a">
                              <!-- 1 A -->
<?php 

$conception = Conception::find_all();

?>
                              <table class="ui celled yellow table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Client</th>
                                            <th>Nom du site</th>
                                            <th>Type</th>
                                            <th>Multilangue</th>
                                            <th>Prix</th>
                                            <th>Versement</th>
                                            <th>date de début</th>
                                            <th>délai restant</th>
                                            <th>état d'avancement</th>
                                            <th colspan="2">Commentaire</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($conception as $cons){
                                ?>
                                        <tr>
                                            <td><?php echo h($cons->id_con);?></td>
                                            <td><?php echo h($cons->id_cl);?></td>
                                            <td><?php echo h($cons->nom_con);?></td>
                                            <td><?php echo h($cons->type_con);?></td>
                                            <td><?php echo h($cons->multilan_con);?></td>
                                            <td><?php echo h($cons->prix_con);?></td>
                                            <td><?php echo h($cons->versement_con);?></td>
                                            <td><?php echo h($cons->date_deb_con);?></td>
                                            <td>------</td>
                                            <td>
                                            <div class="ui red progress" data-percent="20">
                                                    <div class="bar"></div>
                                                    <div class="label"><?php echo h($cons->etat_con);?></div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="ui bulleted list">
                                                    <div class="item"><?php echo h($cons->commentaire_con);?></div>

                                                    
                                                </div>
                                            </td>
                                            <td>
                                                <button class="ui tiny yellow  button"
                                                data-button_id="<?php echo h($cons->id_con) ?>" ><i
                                                class="edit outline icon"></i><span>Modifier</span></button>

                                                <div class="ui modal m<?php echo h($cons->id_con) ?>">
                                                  <div class="content">
                                                  <?php modifier_modal($cons->id_con, '') ?>

                                                  </div>
                                                </div>
                                            </td>
                                        </tr>

                                       
                                        <?php
                                        } ?>
                                    </tbody>
                                </table>
                              
                              </div>
                              <div class="ui bottom attached tab segment " data-tab="first/b">
                              <table class="ui celled green table">
                                    <thead>
                                        <tr>
                                            <th>Client</th>
                                            <th>Nom du site</th>
                                            <th>Prix</th>
                                            <th colspan="2">date de début</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Edisoft</td>
                                            <td>OEdisoft.dz</td>
                                            <td>5000 Da</td>
                                            <td>17-02-2019</td>
                                        </tr>

                                        <tr>
                                            <td>Edisoft</td>
                                            <td>OEdisoft.dz</td>
                                            <td>6000DA</td>
                                            <td>20-02-2019</td>
                                        </tr>

                                        <tr>
                                            <td>Edisoft</td>
                                            <td>OEdisoft.dz</td>
                                            <td>15000DA</td>
                                              <td>03-02-2019</td>
                                           
                                            
                                        </tr>

                                    </tbody>
                                </table>
                              
                              
                              </div>
                             
                            </div>



                            <div class="ui tab  " data-tab="second">
                              <div class="ui top attached tabular menu">
                                <a class="item active" data-tab="second/a"><i class="spinner yellow icon"></i>en cours</a>
                                <a class="item " data-tab="second/b"><i class="check green circle icon"></i>terminées</a>
                                
                              </div>
                              <div class="ui bottom attached tab segment active" data-tab="second/a">
<?php
$conception = Conception::find_statique();
?>
                              <table class="ui celled yellow table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Client</th>
                                            <th>Nom du site</th>
                                            <th>Type</th>
                                            <th>Multilangue</th>
                                            <th>Prix</th>
                                            <th>Versement</th>
                                            <th>date de début</th>
                                            <th>délai restant</th>
                                            <th>état d'avancement</th>
                                            <th colspan="2">Commentaire</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($conception as $cons){
                                ?>
                                        <tr>
                                            <td><?php echo h($cons->id_con);?></td>
                                            <td><?php echo h($cons->id_cl);?></td>
                                            <td><?php echo h($cons->nom_con);?></td>
                                            <td><?php echo h($cons->type_con);?></td>
                                            <td><?php echo h($cons->multilan_con);?></td>
                                            <td><?php echo h($cons->prix_con);?></td>
                                            <td><?php echo h($cons->versement_con);?></td>
                                            <td><?php echo h($cons->date_deb_con);?></td>
                                            <td>------</td>
                                            <td>
                                            <div class="ui red progress" data-percent="20">
                                                    <div class="bar"></div>
                                                    <div class="label"><?php echo h($cons->etat_con);?></div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="ui bulleted list">
                                                    <div class="item"><?php echo h($cons->commentaire_con);?></div>

                                                    
                                                </div>
                                            </td>
                                            <td>
                                                <button class="ui tiny yellow  button"
                                                data-button_id="1<?php //echo h($client->id_cl) ?>" ><i
                                                class="edit outline icon"></i><span>Modifier</span></button>

                                                <div class="ui modal 1">
                                                  <div class="content">
                                                  <?php modifier_modal(1) ?>

                                                  </div>
                                                </div>
                                            </td>
                                        </tr>

                                       
                                        <?php
                                        } ?>
                                    </tbody>
                                </table>
                              
                              </div>


                              <div class="ui bottom attached tab segment " data-tab="second/b">2B</div>
                              
                            </div>




                            <div class="ui tab " data-tab="third">
                              <div class="ui top attached tabular menu">
                                <a class="item active" data-tab="third/a"><i class="spinner yellow icon"></i>en cours</a>
                                <a class="item" data-tab="third/b"><i class="check green circle icon"></i>terminées</a>
                              </div>
                              <div class="ui bottom attached tab segment active" data-tab="third/a">
<?php
$conception = Conception::find_dynamique();
?>

                              <table class="ui celled yellow table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Client</th>
                                            <th>Nom du site</th>
                                            <th>Type</th>
                                            <th>Multilangue</th>
                                            <th>Prix</th>
                                            <th>Versement</th>
                                            <th>date de début</th>
                                            <th>délai restant</th>
                                            <th>état d'avancement</th>
                                            <th colspan="2">Commentaire</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($conception as $cons){
                                ?>
                                        <tr>
                                            <td><?php echo h($cons->id_con);?></td>
                                            <td><?php echo h($cons->id_cl);?></td>
                                            <td><?php echo h($cons->nom_con);?></td>
                                            <td><?php echo h($cons->type_con);?></td>
                                            <td><?php echo h($cons->multilan_con);?></td>
                                            <td><?php echo h($cons->prix_con);?></td>
                                            <td><?php echo h($cons->versement_con);?></td>
                                            <td><?php echo h($cons->date_deb_con);?></td>
                                            <td>------</td>
                                            <td>
                                            <div class="ui red progress" data-percent="20">
                                                    <div class="bar"></div>
                                                    <div class="label"><?php echo h($cons->etat_con);?></div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="ui bulleted list">
                                                    <div class="item"><?php echo h($cons->commentaire_con);?></div>

                                                    
                                                </div>
                                            </td>
                                            <td>
                                                <button class="ui tiny yellow  button"
                                                data-button_id="1<?php //echo h($client->id_cl) ?>" ><i
                                                class="edit outline icon"></i><span>Modifier</span></button>

                                                <div class="ui modal 1">
                                                  <div class="content">
                                                  <?php modifier_modal(1) ?>

                                                  </div>
                                                </div>
                                            </td>
                                        </tr>

                                       
                                        <?php
                                        } ?>
                                    </tbody>
                                </table>
                              </div>
                              <div class="ui bottom attached tab segment" data-tab="third/b">3B</div>
                              
                            </div>

                            
                                 
                          </div>











                        </div>
                        </div>
                    
</div>         

      <!-- end row head-->



        </div>
     





      </div><!--fin page-->

     
<script>
  
$('.ui.progress').progress();

$('.ui.segment .menu .item')
  .tab({
    context: '.ui.segment'
  })
;

function modifier_modal(id){
  $('.ui.modal.' + id)
    .modal('show');
}
 $('button').click(function() {

console.log("it works");


let button_id = $(this).data('button_id'); // njib id
console.log(button_id);

  modifier_modal(button_id);

// }
 });


</script>


<?php
require_once("../includes/app_foot.php");
?>
