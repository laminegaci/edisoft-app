<?php
require_once("../includes/initialize.php");
include("../includes/app_head.php");
?>


<style>

.ui.left.aligned.header{

margin-top: 1% !important;
}
.twelve.wide.column h2{
  margin-top: 1%;
  margin-bottom: 1%;
}
#rating{
  margin-top: 3%;
}
.err{
  background-color: #FE1100 !important;
  color: white;
}
.err a{
  text-decoration: none;
  color: white;
}
.war{
  background-color: #E4FE19;
  color: black;
}
</style>

<div class="page">

<div class="ui fluid container">

    <div class="ui padded grid">
      <!-- begin row head-->
                    <div class="streched row" id="head">
                            <div class="thirteen wide column">
                                    <img  src="<?php echo url_for('images/logo.png'); ?>" alt=""  class="ui tiny image" style="margin-left: 2%; margin-top: 1%">
                                </div>

                          

                            
                                      <div class="three wide column" style="margin-top: 1%">
                                              
                                        <i class="big user circle icon"></i>
                                                    
                                        <span>Mohamed Lamine</span>
                                      
                                        <i onclick="power_off()" class="large power off icon" id="offbutton"></i>
                                      </div> 
                              
                                        
                                      

                          

                    </div> 

                    <div class="centered row">

                      <div class="ui segment eight wide centered column">

                            <div class="ui  centered grid">
                                
                              

                                <div class="ui centered grid row">
                                          
                                          <div class="middle aligned four wide column">
                                          <img src="<?php echo url_for('images/important.svg'); ?>" alt="" class="ui small  circular centered image">
                                          </div>

                                          <div class="twelve wide column">
                                          
                                          <h1>BENOUNNAS Oussama</h1>
                                          <h2>0558 90 57 64</h2>
                                          <h2>oussama@benounnas.com</h2>
                                          <h2>Ouled Fayet - Alger</h2>
                                          <div class="ui massive star rating" data-rating="3" id="rating"></div>
                                          
                                          </div>

                                        
                                </div>
                                <div class="ui divider"></div>
                                    
                                    <div class="ui centered grid row">
                                    
                                    <div class="five wide column">
                                    <button class="ui green fluid basic big button"><i class="envelope outline icon"></i>Email</button>
                                    </div>

                                    <div class="five wide column">
                                    <button class="ui red fluid basic big button"><i class="bell outline icon"></i>Notifier</button>

                                    </div>

                                    <div class="five wide column">
                                    <button class="ui blue fluid basic big button"><i class="info icon"></i>Informer</button>

                                    </div>

                                   

                                    </div>


                            </div>
                      </div>
                    
                    </div>
                                        <div class="row">
                                        </div>

                            <div class="centered row">
                            
                            <div class="twelve wide column">
                            
                                    <div class="ui top attached tabular menu">
                                        <a class="active item" data-tab="first">Hébérgements(3)</a>
                                        <a class="item" data-tab="second">Conceptions(2)</a>
                                      </div>
                                      <div class="ui bottom attached tab segment active" data-tab="first">
                                      <table class="ui celled  table">
                            <thead>
                              <tr>
                                <th>#</th>
                              <th>date début</th>

                              <th>date d'expiration</th>
                              <th>Pack choisi</th>
                              <th>nom de domaine</th>
                              <th>Espace disque hébérgé</th>
                              <th colspan="4">Prix</th>
                            </tr>
                          </thead>
                          <tbody>
                              <tr>
                                <td>1</td>
                                <td>8/02/2019</td>
                                <td class="war">8/02/2020</td>
                                <td>Sunshine</td>
                                <td>benounnas.com</td>
                                <td>20Go</td>
                                <td>15000 DA</td>
                                <td>
                                                                     <a href=""><i class="folder open outline icon"></i>afficher</a>
                                                                     </td>
                                                                     <td>
                                                                     <a href=""><i class="edit outline icon"></i>modifier</a>
                                                                     </td>
                                                                     <td>
                                                                     <a href=""><i class="ban icon"></i>supprimer</a>
                                                                     </td>
                              </tr>
                              <tr>
                                <td>1</td>
                                <td>8/02/2019</td>
                                <td >8/02/2020</td>
                                <td>Sunshine</td>
                                <td>benounnas.com</td>
                                <td>20Go</td>
                                <td>15000 DA</td>
                                <td>
                                                                     <a href=""><i class="folder open outline icon"></i>afficher</a>
                                                                     </td>
                                                                     <td>
                                                                     <a href=""><i class="edit outline icon"></i>modifier</a>
                                                                     </td>
                                                                     <td>
                                                                     <a href=""><i class="ban icon"></i>supprimer</a>
                                                                     </td>
                              </tr>

                              <tr class="err">
                                <td>1</td>
                                <td>8/02/2019</td>
                                <td class="">8/02/2020</td>
                                <td>Sunshine</td>
                                <td>benounnas.com</td>
                                <td>20Go</td>
                                <td>15000 DA</td>
                                <td>
                                                                     <a href=""><i class="folder open outline icon"></i>afficher</a>
                                                                     </td>
                                                                     <td>
                                                                     <a href=""><i class="edit outline icon"></i>modifier</a>
                                                                     </td>
                                                                     <td>
                                                                     <a href=""><i class="ban icon"></i>supprimer</a>
                                                                     </td>
                              </tr>
                             
                            </tbody>
                  </table>
                                      </div>
                                      <div class="ui bottom attached tab segment" data-tab="second">
                                      <table class="ui olive table">
                            <thead>
                              <tr>
                                <th>#</th>
                              <th>type du site</th>

                              <th>nom</th>
                              <th>Langue</th>
                              <th>début du conception</th>
                              <th>délai</th>
                              <th>état d'avancement</th>
                              <th>commentaire</th>
                              <th>Prix</th>
                              <th>versement</th>
                              
                            </tr>
                          </thead>
                          <tbody>
                              <tr>
                                <td>1</td>
                                <td>dynamique</td>
                                <td>edisoft.dz</td>
                                <td>Fr</td>
                                <td>8/02/2019</td>
                                <td>30 jours</td>
                                <td>90%</td>
                                <td>partie commande restante</td>
                                <td>15000 DA</td>
                                <td>5000 DA</td>
                              </tr>
                             
                            </tbody>
                  </table>
                                      </div>
                                      
                            </div>
                            
                            </div>
                    


            
           
</div>         

      <!-- end row head-->



        </div>
     





      </div><!--fin page-->

      <script>

$('.ui.rating')
  .rating()
;

$('.menu .item')
  .tab()
;
</script>



<?php
require_once("../includes/app_foot.php");
?>
?>