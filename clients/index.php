 <?php 
require_once("../includes/initialize.php");
include("../includes/app_head.php");
include('function_modal.php');
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

.ui.button i {
    display: inline;
}
 </style>

 <div class="page">

     <div class="ui fluid container">

         <?php include('../includes/menu_head.php'); ?>

         <div class="ui padded grid">


         <?php 


if(isset($_POST['oui'])){
    echo "<h1>YAAAAAAAAAAAAAAAAAAAAAAAAAAAaw</h1>it works";
}
?>
             <div class="ui fifteen wide column row centered grid segment">

                 <div class="ui pointing secondary big menu">


                     <h1 class="ui center aligned header item"><i class="users icon"></i>Clients</h1>


                     <a class="item active" data-tab="first"><i class="large list icon"></i>Tout(200)</a>
                     <a class="item " data-tab="second"><i class="large user secret icon"></i>Professionel(100)</a>
                     <a class="item" data-tab="third"><i class="large user icon"></i>Particulier(100)</a>


                     <div class="right item">
                         <a href="ajouter_client.php" class="">
                             <i class="large plus circle icon"></i>

                         </a>
                         <div class="ui action input">
                             <input type="text" placeholder="Rechercher">
                             <div class="ui button">Go</div>
                         </div>
                     </div>
                 </div>
                 <div class="ui bottom attached tab  active" data-tab="first">


                     <?php 
/////////////////////////////////////////////////////////////////////:::

$clients = Client::find_all();

?>
                     <table class="ui striped  table">
                         <thead>
                             <tr>
                                 <th>#</th>
                                 <th>Nom et Prénom</th>
                                 <th>Adresse</th>
                                 <th>nom de l'entreprise</th>
                                 <th>numéro de téléphone</th>
                                 <th>email</th>
                                 <th colspan="4">catégorie</th>

                             </tr>
                         </thead>
                         <tbody>

                             <?php foreach($clients as $client){
                                ?>
                             <tr>
                                 <td><?php echo h($client->id_cl);?></td>
                                 <td><?php echo h($client->nom_cl) . ' ' .  h($client->prenom_cl);?></td>
                                 <td><?php echo h($client->adresse_cl);?></td>
                                 <td><?php echo h($client->nom_societe_cl);?></td>

                                 <td><?php echo h($client->num_tel_cl);?></td>
                                 <td><?php echo h($client->email_cl);?></td>
                                 <td><?php if($client->type_cl == 1){ 
                                    echo 'Particulier';}else{
                                        echo 'Pro';
                                    }
                                    
                                    
                                ?>

                                 </td>


                                 <td>

                                     <button class="ui tiny blue  button" data-button_id="<?php echo h($client->id_cl) ?>" data-type="afficher"><i
                                             class="folder open outline icon"></i><span>Afficher</span></button>

                                     <div class="ui large modal afficher a<?php echo h($client->id_cl) ?>">
                                         <div class="content">
                                             <?php afficher_modal($client->id_cl); ?>
                                         </div>
                                     </div>
                                 </td>

                                 <td>
                                     <button class="ui tiny yellow  button" data-button_id="<?php echo h($client->id_cl) ?>" data-type="modifier"><i
                                             class="edit outline icon"></i><span>Modifier</span></button>
                                     <div class="ui modal modifier m<?php echo h($client->id_cl) ?>">
                                         <div class="content">
                                             <?php modifier_modal($client->id_cl) ?>
                                         </div>
                                     </div>
                                 </td>

                                 <td>
                                     <button class="ui tiny red button" data-button_id="<?php echo h($client->id_cl) ?>" data-type="supprimer"><i
                                             class="edit outline icon"></i><span>Supprimer</span></button>

                                     <div class="ui modal supprimer s<?php echo h($client->id_cl) ?>">
                                         <?php supprimer_modal($client->id_cl); ?>
                                     </div>
                                 </td>
                             </tr>




                             <?php
                            } ?>
                         </tbody>
                     </table>




                 </div>
                 <div class="ui bottom attached tab segment" data-tab="second">
                     <table class="ui striped large   table">
                         <thead>
                             <tr>
                                 <th>#</th>
                                 <th>Nom et Prénom</th>
                                 <th>Adresse</th>
                                 <th>nom de l'entreprise</th>
                                 <th>numéro de téléphone</th>
                                 <th>email</th>
                                 <th colspan="4">catégorie</th>
                             </tr>
                         </thead>
                         <tbody>
                             <tr>
                                 <td>1</td>
                                 <td>BENOUNNAS Oussama</td>
                                 <td>Ouled Fayet</td>
                                 <td>/</td>
                                 <td>05 58 90 57 64</td>
                                 <td>oussama@benounnas.com</td>
                                 <td>Particulier</td>
                                 <td>
                                     <a href="" onclick=modal_afficher()><i
                                             class="folder open outline icon"></i>afficher</a>
                                 </td>
                                 <td>
                                     <a href=""><i class="edit outline icon"></i>modifier</a>
                                 </td>
                                 <td>
                                     <a href=""><i class="ban icon"></i>supprimer</a>
                                 </td>
                             </tr>
                             <tr>
                                 <td>2</td>
                                 <td>Gaci Mohamed Lamine</td>
                                 <td>Souidania</td>
                                 <td>Gaci incorporation</td>
                                 <td>05 58 90 57 64</td>
                                 <td>lamine@gaci.com</td>
                                 <td>Pro</td>
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
                 <div class="ui bottom attached tab segment" data-tab="third">
                     <table class="ui striped large   table">
                         <thead>
                             <tr>
                                 <th>#</th>
                                 <th>Nom et Prénom</th>
                                 <th>Adresse</th>
                                 <th>nom de l'entreprise</th>
                                 <th>numéro de téléphone</th>
                                 <th>email</th>
                                 <th colspan="4">catégorie</th>
                             </tr>
                         </thead>
                         <tbody>
                             <tr>
                                 <td>1</td>
                                 <td>BENOUNNAS Oussama</td>
                                 <td>Ouled Fayet</td>
                                 <td>/</td>
                                 <td>05 58 90 57 64</td>
                                 <td>oussama@benounnas.com</td>
                                 <td>Particulier</td>
                                 <td>
                                     <a href=""><i class="folder open outline icon"></i>afficher</a>
                                 </td>
                                 <td>
                                     <a href=""><i class="edit outline icon"></i>modifier</a>
                                 </td>
                                 <td>
                                     <a href=""><i class="ban icon"></i>supprimer</a>
                                 </td>


                         </tbody>
                     </table>

                 </div>




             </div>


             <!-- end row head-->



         </div>









     </div>
     <!--fin page-->


     <script>
     $(document).ready(() => {



         function modal_supprimer(id) {



             $('.ui.modal.supprimer.s' + id)
                 .modal('show');
         }

         function modal_afficher(id) {


             $('.ui.modal.afficher.a' + id)
                 .modal('show');
         }

         function modal_modifier(id) {



             $('.ui.modal.modifier.m' + id)
                 .modal('show');
         }

         $('button').click(function() {


             let button_type = $(this).data('type'); //nrecupérer type

             let button_id = $(this).data('button_id'); // njib id
             //modal_supprimer(button_id);

             switch (button_type) {
                 case 'supprimer':
                     modal_supprimer(button_id);
                     break;
                 case 'modifier':
                     modal_modifier(button_id);
                     break;
                 case 'afficher':
                     modal_afficher(button_id);
                     break;


             }
         });




         $('.menu .item')
             .tab();






     }) //fin ready
     </script>


     <?php 
require_once("../includes/app_foot.php");
?>