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
                        <div class="ui action input">
                            <input type="text" placeholder="Rechercher">
                            <div class="ui button">Go</div>
                        </div>
                    </div>
                </div>

                <div class="ui tab  active" data-tab="first">
                        <div class="ui top attached tabular  menu">
                            <a class="active item" data-tab="first/a"><i class="at icon"></i>Nom de domaine</a>
                            <a class="item" data-tab="first/b"><i class="wind icon"></i>Wind</a>
                            <a class="item" data-tab="first/c"><i class="bolt icon"></i>Thunder</a>
                            <a class="item" data-tab="first/d"><i class="water icon"></i>Wave</a>

                            <a class="item" data-tab="first/e"><i class="recycle icon"></i>Tornado</a>
                            <a class="item" data-tab="first/f"><i class="poo storm icon"></i>Storm</a>
                            <a class="item" data-tab="first/g"><i class="sun icon"></i>Sunshine</a>


                            <a class="item" data-tab="first/h"><i class="moon icon"></i>Moon</a>
                            <a class="item" data-tab="first/i"><i class="globe africa icon"></i>Earth</a>
                            <a class="item" data-tab="first/j"><i class="sun outline icon"></i>Sun</a>

                        </div>
                        <div class="ui bottom attached active tab " data-tab="first/a">
<?php 
   $hebergements= $hebergement->find_where('DNS');
   //var_dump($hebergements);
   
?>

                            <table class="ui striped table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>client</th>
                                        <th>nom pack</th>
                                        <th>nom de domaine</th>
                                        <th>date début</th>
                                        <th>date d'expiration</th>
                                        <th>espace pack</th>
                                        <th>prix pack</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                
                                if ($hebergements) {
                                   
                                   foreach ($hebergements as $hebergement) {
                                       # code...
                                 
                                 ?>

                                    <tr>
                                        <td><?php echo h($hebergement->id_heb); ?></td>
                                        <td><?php echo h($hebergement->prenom_cl . $hebergement->nom_cl); ?></td>
                                        <td><?php echo h($hebergement->nom_pack) ;?></td>
                                        <td><?php echo h($hebergement->url_heb) ;?></td>
                                        <td><?php echo h($hebergement->date_deb_heb); ?></td>
                                        <td><?php echo h($hebergement->date_fin_heb) ;?></td>
                                        <td><?php echo h($hebergement->espace_heb) . " <b>GO</b>";?></td>
                                        <td><?php echo h($hebergement->prix). " <b>Da</b>" ;?></td>
                                       
                                    </tr>
                                   
                                    <?php
                                   }
                                }
                                ?>
                                </tbody>
                            </table>




                        </div>

                        <div class="ui bottom attached tab" data-tab="first/b">
                    
                    
<?php 
   $hebergements= $hebergement->find_where('wind');
   //var_dump($hebergements);
   
?>

                            <table class="ui striped table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>client</th>
                                        <th>nom pack</th>
                                        <th>nom de domaine</th>
                                        <th>date début</th>
                                        <th>date d'expiration</th>
                                        <th>espace pack</th>
                                        <th>prix pack</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                
                                if ($hebergements) {
                                   
                                   foreach ($hebergements as $hebergement) {
                                       # code...
                                 
                                 ?>

                                    <tr>
                                        <td><?php echo h($hebergement->id_heb); ?></td>
                                        <td><?php echo h($hebergement->prenom_cl . $hebergement->nom_cl); ?></td>
                                        <td><?php echo h($hebergement->nom_pack) ;?></td>
                                        <td><?php echo h($hebergement->url_heb) ;?></td>
                                        <td><?php echo h($hebergement->date_deb_heb); ?></td>
                                        <td><?php echo h($hebergement->date_fin_heb) ;?></td>
                                        <td><?php echo h($hebergement->espace_heb) . " <b>GO</b>";?></td>
                                        <td><?php echo h($hebergement->prix). " <b>Da</b>" ;?></td>
                                       
                                    </tr>
                                   
                                    <?php
                                   }
                                }
                                ?>
                                </tbody>
                            </table>
                    
                    
                    </div> <!-- fin Wind -->
                        <div class="ui bottom attached tab" data-tab="first/c">
                    
<?php 
   $hebergements= $hebergement->find_where('thunder');
   //var_dump($hebergements);
   
?>

                            <table class="ui striped table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>client</th>
                                        <th>nom pack</th>
                                        <th>nom de domaine</th>
                                        <th>date début</th>
                                        <th>date d'expiration</th>
                                        <th>espace pack</th>
                                        <th>prix pack</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                
                                if ($hebergements) {
                                   
                                   foreach ($hebergements as $hebergement) {
                                       # code...
                                 
                                 ?>

                                    <tr>
                                        <td><?php echo h($hebergement->id_heb); ?></td>
                                        <td><?php echo h($hebergement->prenom_cl . $hebergement->nom_cl); ?></td>
                                        <td><?php echo h($hebergement->nom_pack) ;?></td>
                                        <td><?php echo h($hebergement->url_heb) ;?></td>
                                        <td><?php echo h($hebergement->date_deb_heb); ?></td>
                                        <td><?php echo h($hebergement->date_fin_heb) ;?></td>
                                        <td><?php echo h($hebergement->espace_heb) . " <b>GO</b>";?></td>
                                        <td><?php echo h($hebergement->prix). " <b>Da</b>" ;?></td>
                                       
                                    </tr>
                                   
                                    <?php
                                   }
                                }
                                ?>
                                </tbody>
                            </table>
                    
                    </div>  
                    <!-- fin Thunder -->



                        <div class="ui bottom attached tab" data-tab="first/d">
                    
<?php 
   $hebergements= $hebergement->find_where('wave');
   //var_dump($hebergements);
   
?>

                            <table class="ui striped table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>client</th>
                                        <th>nom pack</th>
                                        <th>nom de domaine</th>
                                        <th>date début</th>
                                        <th>date d'expiration</th>
                                        <th>espace pack</th>
                                        <th>prix pack</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                
                                if ($hebergements) {
                                   
                                   foreach ($hebergements as $hebergement) {
                                       # code...
                                 
                                 ?>

                                    <tr>
                                        <td><?php echo h($hebergement->id_heb); ?></td>
                                        <td><?php echo h($hebergement->prenom_cl . $hebergement->nom_cl); ?></td>
                                        <td><?php echo h($hebergement->nom_pack) ;?></td>
                                        <td><?php echo h($hebergement->url_heb) ;?></td>
                                        <td><?php echo h($hebergement->date_deb_heb); ?></td>
                                        <td><?php echo h($hebergement->date_fin_heb) ;?></td>
                                        <td><?php echo h($hebergement->espace_heb) . " <b>GO</b>";?></td>
                                        <td><?php echo h($hebergement->prix). " <b>Da</b>" ;?></td>
                                       
                                    </tr>
                                   
                                    <?php
                                   }
                                }
                                ?>
                                </tbody>
                            </table>
                    </div>
                    <!-- fin wave -->


                        <div class="ui bottom attached tab" data-tab="first/e">
                    
<?php 
   $hebergements= $hebergement->find_where('tornado');
   //var_dump($hebergements);
   
?>

                            <table class="ui striped table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>client</th>
                                        <th>nom pack</th>
                                        <th>nom de domaine</th>
                                        <th>date début</th>
                                        <th>date d'expiration</th>
                                        <th>espace pack</th>
                                        <th>prix pack</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                
                                if ($hebergements) {
                                   
                                   foreach ($hebergements as $hebergement) {
                                       # code...
                                 
                                 ?>

                                    <tr>
                                        <td><?php echo h($hebergement->id_heb); ?></td>
                                        <td><?php echo h($hebergement->prenom_cl . $hebergement->nom_cl); ?></td>
                                        <td><?php echo h($hebergement->nom_pack) ;?></td>
                                        <td><?php echo h($hebergement->url_heb) ;?></td>
                                        <td><?php echo h($hebergement->date_deb_heb); ?></td>
                                        <td><?php echo h($hebergement->date_fin_heb) ;?></td>
                                        <td><?php echo h($hebergement->espace_heb) . " <b>GO</b>";?></td>
                                        <td><?php echo h($hebergement->prix). " <b>Da</b>" ;?></td>
                                       
                                    </tr>
                                   
                                    <?php
                                   }
                                }
                                ?>
                                </tbody>
                            </table>
                    </div>
                                <!-- fin tornado -->

                        <div class="ui bottom attached tab" data-tab="first/f">
                    
<?php 
   $hebergements= $hebergement->find_where('storm');
   //var_dump($hebergements);
   
?>

                            <table class="ui striped table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>client</th>
                                        <th>nom pack</th>
                                        <th>nom de domaine</th>
                                        <th>date début</th>
                                        <th>date d'expiration</th>
                                        <th>espace pack</th>
                                        <th>prix pack</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                
                                if ($hebergements) {
                                   
                                   foreach ($hebergements as $hebergement) {
                                       # code...
                                 
                                 ?>

                                    <tr>
                                        <td><?php echo h($hebergement->id_heb); ?></td>
                                        <td><?php echo h($hebergement->prenom_cl . $hebergement->nom_cl); ?></td>
                                        <td><?php echo h($hebergement->nom_pack) ;?></td>
                                        <td><?php echo h($hebergement->url_heb) ;?></td>
                                        <td><?php echo h($hebergement->date_deb_heb); ?></td>
                                        <td><?php echo h($hebergement->date_fin_heb) ;?></td>
                                        <td><?php echo h($hebergement->espace_heb) . " <b>GO</b>";?></td>
                                        <td><?php echo h($hebergement->prix). " <b>Da</b>" ;?></td>
                                       
                                    </tr>
                                   
                                    <?php
                                   }
                                }
                                ?>
                                </tbody>
                            </table>
                    </div>

                    <!-- fin storm -->
                        <div class="ui bottom attached tab" data-tab="first/g">
                    
<?php 
   $hebergements= $hebergement->find_where('sunshine');
   //var_dump($hebergements);
   
?>

                            <table class="ui striped table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>client</th>
                                        <th>nom pack</th>
                                        <th>nom de domaine</th>
                                        <th>date début</th>
                                        <th>date d'expiration</th>
                                        <th>espace pack</th>
                                        <th>prix pack</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                
                                if ($hebergements) {
                                   
                                   foreach ($hebergements as $hebergement) {
                                       # code...
                                 
                                 ?>

                                    <tr>
                                        <td><?php echo h($hebergement->id_heb); ?></td>
                                        <td><?php echo h($hebergement->prenom_cl . $hebergement->nom_cl); ?></td>
                                        <td><?php echo h($hebergement->nom_pack) ;?></td>
                                        <td><?php echo h($hebergement->url_heb) ;?></td>
                                        <td><?php echo h($hebergement->date_deb_heb); ?></td>
                                        <td><?php echo h($hebergement->date_fin_heb) ;?></td>
                                        <td><?php echo h($hebergement->espace_heb) . " <b>GO</b>";?></td>
                                        <td><?php echo h($hebergement->prix). " <b>Da</b>" ;?></td>
                                       
                                    </tr>
                                   
                                    <?php
                                   }
                                }
                                ?>
                                </tbody>
                            </table>
                    </div>

                        <!-- fin sunshine -->
                        <div class="ui bottom attached tab" data-tab="first/h">
                    
<?php 
   $hebergements= $hebergement->find_where('moon');
   //var_dump($hebergements);
   
?>

                            <table class="ui striped table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>client</th>
                                        <th>nom pack</th>
                                        <th>nom de domaine</th>
                                        <th>date début</th>
                                        <th>date d'expiration</th>
                                        <th>espace pack</th>
                                        <th>prix pack</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                
                                if ($hebergements) {
                                   
                                   foreach ($hebergements as $hebergement) {
                                       # code...
                                 
                                 ?>

                                    <tr>
                                        <td><?php echo h($hebergement->id_heb); ?></td>
                                        <td><?php echo h($hebergement->prenom_cl . $hebergement->nom_cl); ?></td>
                                        <td><?php echo h($hebergement->nom_pack) ;?></td>
                                        <td><?php echo h($hebergement->url_heb) ;?></td>
                                        <td><?php echo h($hebergement->date_deb_heb); ?></td>
                                        <td><?php echo h($hebergement->date_fin_heb) ;?></td>
                                        <td><?php echo h($hebergement->espace_heb) . " <b>GO</b>";?></td>
                                        <td><?php echo h($hebergement->prix). " <b>Da</b>" ;?></td>
                                       
                                    </tr>
                                   
                                    <?php
                                   }
                                }
                                ?>
                                </tbody>
                            </table>
                    </div>


                        <div class="ui bottom attached tab" data-tab="first/i">
                    
<?php 
   $hebergements= $hebergement->find_where('earth');
   //var_dump($hebergements);
   
?>

                            <table class="ui striped table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>client</th>
                                        <th>nom pack</th>
                                        <th>nom de domaine</th>
                                        <th>date début</th>
                                        <th>date d'expiration</th>
                                        <th>espace pack</th>
                                        <th>prix pack</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                
                                if ($hebergements) {
                                   
                                   foreach ($hebergements as $hebergement) {
                                       # code...
                                 
                                 ?>

                                    <tr>
                                        <td><?php echo h($hebergement->id_heb); ?></td>
                                        <td><?php echo h($hebergement->prenom_cl . $hebergement->nom_cl); ?></td>
                                        <td><?php echo h($hebergement->nom_pack) ;?></td>
                                        <td><?php echo h($hebergement->url_heb) ;?></td>
                                        <td><?php echo h($hebergement->date_deb_heb); ?></td>
                                        <td><?php echo h($hebergement->date_fin_heb) ;?></td>
                                        <td><?php echo h($hebergement->espace_heb) . " <b>GO</b>";?></td>
                                        <td><?php echo h($hebergement->prix). " <b>Da</b>" ;?></td>
                                       
                                    </tr>
                                   
                                    <?php
                                   }
                                }
                                ?>
                                </tbody>
                            </table>
                    </div>
                        <div class="ui bottom attached tab" data-tab="first/j">
                    
<?php 
   $hebergements= $hebergement->find_where('sun');
   //var_dump($hebergements);
   
?>

                            <table class="ui striped table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>client</th>
                                        <th>nom pack</th>
                                        <th>nom de domaine</th>
                                        <th>date début</th>
                                        <th>date d'expiration</th>
                                        <th>espace pack</th>
                                        <th>prix pack</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                
                                if ($hebergements) {
                                   
                                   foreach ($hebergements as $hebergement) {
                                       # code...
                                 
                                 ?>

                                    <tr>
                                        <td><?php echo h($hebergement->id_heb); ?></td>
                                        <td><?php echo h($hebergement->prenom_cl . $hebergement->nom_cl); ?></td>
                                        <td><?php echo h($hebergement->nom_pack) ;?></td>
                                        <td><?php echo h($hebergement->url_heb) ;?></td>
                                        <td><?php echo h($hebergement->date_deb_heb); ?></td>
                                        <td><?php echo h($hebergement->date_fin_heb) ;?></td>
                                        <td><?php echo h($hebergement->espace_heb) . " <b>GO</b>";?></td>
                                        <td><?php echo h($hebergement->prix). " <b>Da</b>" ;?></td>
                                       
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