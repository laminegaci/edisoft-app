<?php 
require_once("../includes/initialize.php");
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

.war{
  background-color: #E4FE19;
  color: black;
}
</style>

<div class="page">

<div class="ui fluid container">


<?php 
if(!$id){
  redirect_to('index.php');
}

$client = Client::find_by_id($id);



?>
                    
                    
                    
                    <div class="ui padded grid">
      <!-- begin row head-->
                        

                    <div class="centered row">

                      <div class="ui segment eight wide centered column">

                            <div class="ui centered grid">
                                
                              

                                <div class="ui centered grid row">
                                          
                                          <div class="middle aligned four wide column">
                                          <img src="<?php echo url_for('images/important.svg'); ?>" alt="" class="ui small  circular centered image">
                                          </div>

                                          <div class="twelve wide column">
                                          
                                          <h3>client N° <?php echo h($client->id_cl);?> &nbsp; <?php echo h($client->nom_cl) . ' ' .  h($client->prenom_cl);?></h3>
                                          <h4><strong>Teléphone :</strong><?php echo h($client->num_tel_cl);?></h4>
                                          <h4><strong>Email :</strong><?php echo h($client->email_cl);?></h4>
                                          <h4><strong>Adresse :</strong><?php echo h($client->adresse_cl);?></h4>
                                          
                                          </div>

                                        
                                </div>
                                
                                    
                                    <div class="ui centered grid row">
                                    
                                                      
                                   

                                    </div>


                            </div>
                      </div>
                    
                    </div>
                                        <div class="row">
                                        </div>

                            <div class="row">
                            
                            <div class="sixteen wide column">
                            
                                    <div class="ui top attached tabular menu">
                                        <a class="active item" data-tab="firstAfficher">Hébérgements(3)</a>
                                        <a class="item" data-tab="secondAfficher">Conceptions(2)</a>
                                      </div>
                                      <div class="ui bottom attached tab segment active" data-tab="firstAfficher">
                                      <table class="ui celled  table">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Nom et prenom</th>
                                <th>nom de domaine</th>
                                <th>Pack</th>
                                <th>date début</th>
                                <th>date d'expiration</th>

                              <th colspan="4">Prix</th>
                            </tr>
                          </thead>
<?php
$hybergement = Hebergement::find_hyber_by_id($client->id_cl);

?>
                          <tbody>
                          <?php
                           
                             if($hybergement){
                                foreach($hybergement as $hyber){
                                $id_p = $hyber->id_pack;
                                $nom_pack = Hebergement::find_pack($id_p);
                                   
                                  
                          ?>

                              <tr>
                              <td><?php echo h($hyber->id_heb);?></td>
                              <td><?php echo h($client->nom_cl) . ' ' .  h($client->prenom_cl);?></td>
                              <td><?php echo h($hyber->url_heb);?></td>
                              <td><?php if($hyber->espace_heb ==0) echo 'Domaine';else {echo $nom_pack.'(<small>' . $hyber->espace_heb . '</small>)';}?></td>
                              <td><?php echo h($hyber->date_deb_heb);?></td>
                              <td><?php echo h($hyber->date_fin_heb);?></td>
                              <td><?php echo h($hyber->prix);?></td>
                              </tr>
                              <?php
                                }
                            }
                        
                            ?>
                             
                             
                          </tbody>
                  </table>
                                      </div>
                                      <div class="ui bottom attached tab segment" data-tab="secondAfficher">
                                      <table class="ui olive table">
                            <thead>
                              <tr>
                                <th>#</th>
                              <th>type du site</th>

                              <th>nom</th>
                              <th>Langue</th>
                              <th>début du conception</th>
                              <th>délai</th>
                              <th>Prix</th>
                              
                            </tr>
                          </thead>
<?php
$conception = Conception::find_cons_by_id($client->id_cl);
?>
                          <tbody>
                          <?php
                              if($conception){
                                foreach($conception as $conc){

                                
                              
                              ?>
                              <tr>
                              <td><?php echo h($conc->id_con);?></td>
                              <td><?php echo h($conc->type_con);?></td>
                              <td><?php echo h($conc->nom_con);?></td>
                              <td><?php echo h($conc->multilan_con);?></td>
                              <td><?php echo h($conc->date_deb_con);?></td>
                              <td><?php echo h($conc->delai_con);?></td>
                              <td><?php echo h($conc->prix_con);?></td>

                              
                              </tr>
                             
                             <?php
                                  
                                }
                              }
                              ?>
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


