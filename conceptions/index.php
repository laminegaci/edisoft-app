<?php
require_once("../includes/initialize.php");
include("../includes/app_head.php");
include('function_modal.php');


?>


<?php include('../includes/menu_head.php'); ?>

 
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


                              <a class="item active" data-tab="first"><i class="large list icon"></i>Tout(200)</a>
                              <a class="item " data-tab="second"><i class="large html5 icon"></i>Statique(100)</a>
                              <a class="item" data-tab="third"><i class="large node js icon"></i>Dynamique(100)</a>
                            

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

                              <table class="ui celled yellow table">
                                    <thead>
                                        <tr>
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
                                        <tr>
                                            <td>Gaci lamine</td>
                                            <td>OEdisoft.dz</td>
                                            <td>statique</td>
                                            <td>arab / anglais</td>
                                            <td>45000DA</td>
                                            <td>1650Da (50%)</td>
                                            <td>17-14-2019</td>
                                            <td>15 jours</td>
                                            <td>
                                            <div class="ui red progress" data-percent="20">
                                                    <div class="bar"></div>
                                                    <div class="label">20%</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="ui bulleted list">
                                                    <div class="item">conception de la base de données</div>

                                                    <div class="item">Harmonie des couleurs</div>
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

                                        <tr>
                                            <td>Bennounas oussama</td>
                                            <td>OEdisoft.dz</td>
                                            <td>dynamique</td>
                                            <td>non</td>
                                            <td>12000DA</td>
                                            <td>2000DA (16%)</td>
                                            <td>20-02-2019</td>
                                            <td>15 jours</td>
                                            <td>
                                                <div class="ui teal progress" data-percent="74">
                                                    <div class="bar"></div>
                                                    <div class="label">74%</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="ui bulleted list">
                                                    <div class="item">conception de la base de données</div>

                                                    <div class="item">Harmonie des couleurs</div>
                                                </div>
                                            </td>
                                            <td >
                                            <button class="ui tiny yellow  button"
                                                data-button_id="2<?php //echo el ID ?>" ><i
                                                class="edit outline icon"></i><span>Modifier</span></button>

                                                <div class="ui modal 2">
                                                  <div class="content">
                                             <?php modifier_modal(2) ?>
                                                      
                                                  </div>
                                                </div>
                                            </td>
                                        </tr>

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
                              <div class="ui bottom attached tab segment" data-tab="first/c">1C</div>
                            </div>



                            <div class="ui tab  " data-tab="second">
                              <div class="ui top attached tabular menu">
                                <a class="item active" data-tab="second/a"><i class="spinner yellow icon"></i>en cours</a>
                                <a class="item " data-tab="second/b"><i class="check green circle icon"></i>terminées</a>
                              </div>
                              <div class="ui bottom attached tab segment active" data-tab="second/a">2A</div>
                              <div class="ui bottom attached tab segment " data-tab="second/b">2B</div>
                              <div class="ui bottom attached tab segment" data-tab="second/c">2C</div>
                            </div>




                            <div class="ui tab " data-tab="third">
                              <div class="ui top attached tabular menu">
                                <a class="item active" data-tab="third/a"><i class="spinner yellow icon"></i>en cours</a>
                                <a class="item" data-tab="third/b"><i class="check green circle icon"></i>terminées</a>
                              </div>
                              <div class="ui bottom attached tab segment active" data-tab="third/a">3A</div>
                              <div class="ui bottom attached tab segment" data-tab="third/b">3B</div>
                              <div class="ui bottom attached tab segment" data-tab="third/c">3C</div>
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


 $('button').click(function() {

console.log("it works");


let button_id = $(this).data('button_id'); // njib id
console.log(button_id);

$('.ui.modal.' + button_id).modal('show');

// }
 });


</script>


<?php
require_once("../includes/app_foot.php");
?>
