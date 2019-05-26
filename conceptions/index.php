<?php
require_once("../includes/initialize.php");
include("../includes/app_head.php");
include('function_modal.php');
$bool = $_SESSION['toast'] ;


?>


<?php include('../includes/menu_head.php');

 ?>

<style>

.ui.search .prompt{
    border-radius: 500rem !important;
}

.ui.fifteen.wide.column.row.centered.grid.segment{
    height: 85vh;
    overflow: scroll;
}
.open_cons{
        border-right:3px solid #119ee7;
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
  

                            <h1 class="ui  header item"><i class="code icon"></i>Conceptions</h1>        
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
                                        <i class="big plus circle icon"></i>
                                                                              
                                  </a>
                                  <div class="ui search  " id="load_search">
                                            <div class="ui icon input">
                                                <input class="prompt" type="text" placeholder="chercher..."
                                                    id="search">  
                                                <i class="search icon"></i>
                                            </div>
                                            <div class="results">
                                            </div>
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
                              <table class="ui celled table" id="tabAll">
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
                                            <th colspan="2">Commentaire</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php if($conception){
                                      foreach($conception as $cons){
                                      $id = $cons->id_cl;
                                      $name = Conception::find_name($id);
                                      $date_now =  (new \DateTime())->format('Y-m-d');
                                      $date_fin = Conception::date_fin($cons->date_deb_con,$cons->delai_con);
                                      $delai = Conception::delai($date_now,$date_fin);
                                ?>
                                        <tr>
                                            <td><?php echo h($cons->id_con);?></td>
                                            <td><?php echo $name; ?></td>
                                            <td><?php echo h($cons->nom_con);?></td>
                                            <td><?php echo h($cons->type_con);?></td>
                                            <td><?php echo h($cons->multilan_con);?></td>
                                            <td><?php echo h($cons->prix_con);?></td>
                                            <td><?php echo h($cons->versement_con);?></td>
                                            <td><?php echo h($cons->date_deb_con);?></td>
                                            <td><?php echo /*h($cons->delai_con) . ' rest' . '('. */$delai /*.$date_fin'' .')'*/;?></td>
                                          
                                            <td>
                                                <div class="ui bulleted list">
                                                    <div class="item"><?php echo h($cons->commentaire_con);?></div>

                                                    
                                                </div>
                                            </td>
                                            <td>
                                                <button class="ui tiny yellow  button"
                                                data-button_id="<?php echo h($cons->id_con) ?>" ><i
                                                class="edit outline icon"></i><span>Modifier</span></button>

                                                <div class="ui modal m<?php echo h($cons->id_con) . '' ?>">
                                                  <div class="content">
                                                  <?php modifier_modal($cons->id_con, '') ?>

                                                  </div>
                                                </div>
                                            </td>
                                        </tr>

                                       
                                        <?php
                                        }
                                       }
                                       //else echo '<h3 style="color:red;">pas de conception en cours</h3>'; ?>
                                    </tbody>
                                </table>
                                <?php if($rows==0) echo '<h3 style="color:red">pas de conception en cours</h3>';?>
                              
                              </div>
                              <div class="ui bottom attached tab segment " data-tab="first/b">
<?php 

$conception = Conception::find_all_terminer();

?>
                              <table class="ui celled green table" id="tabAll">
                                    <thead>
                                        <tr>
                                        <th>#</th>
                                            <th>Client</th>
                                            <th>Nom du site</th>
                                            <th>Prix</th>
                                            <th colspan="2">date de début</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php if($conception){
                                      foreach($conception as $cons){
                                      $id = $cons->id_cl;
                                      $name = Conception::find_name($id);
                                      
                                ?>
                                        <tr>
                                        <td><?php echo h($cons->id_con); ?></td>
                                            <td><?php echo $name; ?></td>
                                            <td><?php echo h($cons->nom_con); ?></td>
                                            <td><?php echo h($cons->prix_con); ?></td>
                                            <td><?php echo h($cons->date_deb_con); ?></td>
                                            <form action="sup_conception.php?id=<?php echo $cons->id_con;?>"  method='POST'>
                                            <td><button  class="ui tiny red button" name="supprimer"><i class="minus circle icon"></i><span>Supprimer</span></button></td>
                                            </form>
                                        </tr>

                                       
                                        <?php
                                        }
                                       }
                                       else echo '<h3 style="color:red;">pas de conception terminée</h3>'; ?> 
                                        
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
                              <table class="ui celled yellow table" id="tabstatique">
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
                                           
                                            <th colspan="2">Commentaire</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php  if($conception){
                                      foreach($conception as $cons){
                                      $id=$cons->id_cl;
                                      $name = Conception::find_name($id);
                                      $date_now =  (new \DateTime())->format('Y-m-d');
                                      $date_fin = Conception::date_fin($cons->date_deb_con,$cons->delai_con);
                                      $delai = Conception::delai($date_now,$date_fin);
                                ?>
                                   
                                        <tr>
                                            <td><?php echo h($cons->id_con);?></td>
                                            <td><?php echo $name;?></td>
                                            <td><?php echo h($cons->nom_con);?></td>
                                            <td><?php echo h($cons->type_con);?></td>
                                            <td><?php echo h($cons->multilan_con);?></td>
                                            <td><?php echo h($cons->prix_con);?></td>
                                            <td><?php echo h($cons->versement_con);?></td>
                                            <td><?php echo h($cons->date_deb_con);?></td>
                                            <td><?php echo $delai;?></td>
                                          
                                            <td>
                                                <div class="ui bulleted list">
                                                    <div class="item"><?php echo h($cons->commentaire_con);?></div>

                                                    
                                                </div>
                                            </td>
                                            <td>
                                                <button class="ui tiny yellow  button"
                                                data-button_id="<?php echo h($cons->id_con) . 'statique'?>" ><i
                                                class="edit outline icon"></i><span>Modifier</span></button>

                                                <div class="ui modal m<?php echo h($cons->id_con) .'statique' ?>">
                                                  <div class="content">
                                                  <?php modifier_modal($cons->id_con ,'statique')?>

                                                  </div>
                                                </div>
                                            </td>
                                        </tr>

                                        
                                        <?php
                                        }
                                      }
                                      else  echo '<h3 style="color:red;">pas de conception statique en cours</h3>';
                                         ?>
                                    </tbody>
                                </table>
                              
                              </div>


                              <div class="ui bottom attached tab segment " data-tab="second/b">
                              <?php 

$conception = Conception::find_stat_terminer();

?>
                              <table class="ui celled green table" id="tabstatique">
                                    <thead>
                                        <tr>
                                            <th>Client</th>
                                            <th>Nom du site</th>
                                            <th>Prix</th>
                                            <th colspan="2">date de début</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php if($conception){
                                      foreach($conception as $cons){
                                      $id = $cons->id_cl;
                                      $name = Conception::find_name($id);
                                      
                                ?>
                                        <tr>
                                            <td><?php echo $name; ?></td>
                                            <td><?php echo h($cons->nom_con); ?></td>
                                            <td><?php echo h($cons->prix_con); ?></td>
                                            <td><?php echo h($cons->date_deb_con); ?></td>
                                        </tr>

                                       
                                        <?php
                                        }
                                      }
                                      else  echo "<h3 style='color:red;'>pas de conception statique terminée</h3>"; ?>
                                    </tbody>
                                </table>  
                              
                            
                              </div>
                              
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

                              <table class="ui celled yellow table" id="tabdynamique">
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
                                            
                                            <th colspan="2">Commentaire</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php if($conception){
                                       foreach($conception as $cons){
                                      $id = $cons->id_cl;
                                      $name = Conception::find_name($id);
                                      $date_now =  (new \DateTime())->format('Y-m-d');
                                      $date_fin = Conception::date_fin($cons->date_deb_con,$cons->delai_con);
                                      $delai = Conception::delai($date_now,$date_fin);

                                ?>
                                        <tr>
                                            <td><?php echo h($cons->id_con);?></td>
                                            <td><?php echo $name;?></td>
                                            <td><?php echo h($cons->nom_con);?></td>
                                            <td><?php echo h($cons->type_con);?></td>
                                            <td><?php echo h($cons->multilan_con);?></td>
                                            <td><?php echo h($cons->prix_con);?></td>
                                            <td><?php echo h($cons->versement_con);?></td>
                                            <td><?php echo h($cons->date_deb_con);?></td>
                                            <td><?php echo $delai;?></td>
                                           
                                            <td>
                                                <div class="ui bulleted list">
                                                    <div class="item"><?php echo h($cons->commentaire_con);?></div>

                                                    
                                                </div>
                                            </td>
                                            <td>
                                                <button class="ui tiny yellow  button"
                                                data-button_id="<?php echo h($cons->id_con) . 'dynamique' ?>" ><i
                                                class="edit outline icon"></i><span>Modifier</span></button>

                                                <div class="ui modal m<?php echo h($cons->id_con) . 'dynamique';?>">
                                                  <div class="content">
                                                  <?php modifier_modal($cons->id_con, 'dynamique'); ?>

                                                  </div>
                                                </div>
                                            </td>
                                        </tr>

                                       
                                        <?php
                                        } 
                                      }
                                      else echo '<h3 style="color:red;">pas de conception dynamique en cours</h3>';
                                        ?>
                                    </tbody>
                                </table>
                              </div>
                              <div class="ui bottom attached tab segment" data-tab="third/b">
                              <?php 

$conception = Conception::find_dyn_terminer();

?>
                              <table class="ui celled green table" id="tabdynamique">
                                    <thead>
                                        <tr>
                                            <th>Client</th>
                                            <th>Nom du site</th>
                                            <th>Prix</th>
                                            <th colspan="2">date de début</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    if($conception){
                                    foreach($conception as $cons){
                                      $id = $cons->id_cl;
                                      $name = Conception::find_name($id);
                                      
                                ?>
                                        <tr>
                                            <td><?php echo $name; ?></td>
                                            <td><?php echo h($cons->nom_con); ?></td>
                                            <td><?php echo h($cons->prix_con); ?></td>
                                            <td><?php echo h($cons->date_deb_con); ?></td>
                                        </tr>

                                       
                                        <?php
                                        }
                                      }
                                      else echo '<h3 style="color:red;">pas de conception dynamique terminée</h3>';
                                         ?>
                                    </tbody>
                                </table>
                              </div>
                              
                            </div>

                            
                                 
                          </div>











                        </div>
                        </div>
                    
</div>         

      <!-- end row head-->



        </div>
     





      </div><!--fin page-->

     
<script>
  <?php
if($bool){
    echo "
    $('body')
 .toast({
   class: 'success',
  
    message: ` ".  $_SESSION['toastType'] ." `
 })
;
    ";
}    
$_SESSION['toast'] = false;
?> 
$('.ui.slider')
  .slider()
;
  
$('.ui.progress').progress();

$('.ui.segment .menu .item')
  .tab({
    context: '.ui.segment'
  })
;

function modifier_modal(id){
  $('.ui.modal.m' + id)
    .modal('show');
}
 $('button').click(function() {

console.log("it works");


let button_id = $(this).data('button_id'); // njib id
console.log(button_id);

  modifier_modal(button_id);

// }
 });

 $("#search").keyup(function() {
        var searchText = $(this).val().toLowerCase();
        // Show only matching TR, hide rest of them
        $.each($("#tabAll tbody tr, #tabstatique tbody tr, #tabdynamique tbody tr"), function() {
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
