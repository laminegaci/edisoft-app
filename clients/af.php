<?php 
require_once("../includes/initialize.php");
include("../includes/app_head.php");
?>



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


            <div class="row">
            <div class="ui three column centered grid">
  <div class="stretched row">
    <div class="four wide column">
      <div class="ui  centered grid">
      <i class="massive user secret icon row"></i>
      <h1 class="row">PRO</h1>
      </div>
    </div>
    <div class="seven wide column">
      <div class="ui ">
                    <div class="ui  grid">
                            <div class="row">
                              <h1 class="column">BENOUNNAS Oussama</h1>

                            </div>

                    </div>
                    
                    <div class="ui row grid">
                      
                              <div class="two wide column">
                                <i class="big phone icon"></i>
                              </div>


                              <div class="twelve wide column">
                                <h2>0558 90 57 64</h2>
                              </div>

                    </div>

                    <div class="ui row grid">
                              <div class="two wide column">
                                <i class="big at icon"></i>
                              </div>


                              <div class="twelve wide column">
                                <h2>oussama@benounnas.com</h2>
                              </div>

                    </div>

                    <div class="ui row grid">
                              <div class="two wide column">
                                <i class="big location arrow icon"></i>
                              </div>


                              <div class="twelve wide column">
                                <h2>Ouled Fayet Alger</h2>
                              </div>

                    </div>



      </div>
     
    </div>
    <div class="four wide column">
      <div class="ui ">
          <div class="ui centered grid">
            <div class="row">
                      <div class="thirteen wide column grid">
                        <div class="row">
                             <button class="positive ui massive fluid button"><i class="paper plane icon"></i>Email</button>

                        </div>
                        
                      </div>
            </div>
            <div class="row">
                      <div class="thirteen wide column grid">
                        <div class="row">
                        
                             <button class="negative massive ui fluid button"><i class="bell outline icon"></i>Notifier</button>

                        </div>
                        
                      </div>
            </div>


            <div class="row">
                      <div class="thirteen wide column grid">
                        <div class="row">
                             <button class=" ui massive blue fluid button"><i class="info circle icon"></i>informer</button>

                        </div>
                        
                      </div>
            </div>
            

          </div>
      </div>
     
    </div>
  </div>
</div>



      
            </div>
            <div class="ui row centered grid">
              <div class="ui  ">
                  <h2>Hébérgements</h2>
                  <div class="row">
                    <div class="column">
                    <table class="ui olive table">
                            <thead>
                              <tr>
                                <th>#</th>
                              <th>date début</th>

                              <th>date d'expiration</th>
                              <th>Pack choisi</th>
                              <th>nom de domaine</th>
                              <th>Espace disque hébérgé</th>
                              <th>Prix</th>
                            </tr>
                          </thead>
                          <tbody>
                              <tr>
                                <td>1</td>
                                <td>8/02/2019</td>
                                <td>8/02/2020</td>
                                <td>Sunshine</td>
                                <td>benounnas.com</td>
                                <td>20Go</td>
                                <td>15000 DA</td>
                              </tr>
                              <tr>
                                <td>1</td>
                                <td>8/02/2019</td>
                                <td>8/02/2020</td>
                                <td>Sunshine</td>
                                <td>benounnas.com</td>
                                <td>20Go</td>
                                <td>15000 DA</td>
                              </tr>

                              <tr>
                                <td>1</td>
                                <td>8/02/2019</td>
                                <td>8/02/2020</td>
                                <td>Sunshine</td>
                                <td>benounnas.com</td>
                                <td>20Go</td>
                                <td>15000 DA</td>
                              </tr>
                             
                            </tbody>
                  </table>
                    </div>
                  </div>

                  <h2>Conceptions</h2>
                  <div class="row">
                    <div class="column">
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
</div>         

      <!-- end row head-->



        </div>
     





      </div><!--fin page-->





<?php 
require_once("../includes/app_foot.php");
?>
?>