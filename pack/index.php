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
.limits{
   /* height: 60%; */
}
.ui.fifteen.wide.column.row.centered.grid.segment{
    height: 85vh;
    overflow: scroll;
}
 </style>

 <div class="page">

     <div class="ui fluid container">

         <?php include('../includes/menu_head.php'); ?>  

         <div class="ui padded grid">


             <?php 




$rows = pack::rows_tot();
/*
$rows1 = pack::rows_pro();
$rows2 = pack::rows_part();
*/
?>
             <div class="ui fifteen wide column row centered grid segment">

                 <div class="ui pointing secondary big menu">


                     <h1 class="ui center aligned header item"><i class="boxes icon"></i>Packs</h1>


                     <a class="item active" data-tab="first"><i class="large list icon"></i>Tout(<?php echo $rows; ?>)</a>
                   

                     <div class="right item">
                         <a href="ajouter_pack.php" class="">
                             <i class="large plus circle icon"></i>

                         </a>
                         <div class="ui loading search  ">
                                        <div class="ui icon input">
                                            <input class="prompt" type="text" placeholder="Rechercher..."
                                                id="search">
                                            <i class="search icon"></i>
                                        </div>
                                        <div class="results"></div>
                                    </div>
                     </div>
                 </div>
                 <div class="ui bottom attached tab  active limits" data-tab="first">


                     <?php 
/////////////////////////////////////////////////////////////////////:::

$packs = Pack::find_all();

?>
               
                    <table class="ui striped large table" id="tabAll">
                         <thead>
                             <tr>
                                 <th>#</th>
                                 <th>Nom Pack</th>
                                 <th>Espace </th>
                                 <th  colspan="3">Prix (DA)</th>
                                 
                                 

                             </tr>
                         </thead>
                         <tbody>

                             <?php foreach($packs as $pack){
                                ?>
                             <tr>
                                 <td><?php echo h($pack->id_pack);?></td>
                                 <td><?php echo h($pack->nom_pack) ;?></td>
                                 <td><?php echo h($pack->espace_pack);?></td>
                                 <td><?php echo h($pack->prix_pack);?></td>

                               
                               

                               

                                 <td class="collapsing">
                                     <button class="ui tiny yellow  button"
                                         data-button_id="<?php echo h($pack->id_pack) ?>" data-type="modifier"><i
                                             class="edit outline icon"></i><span>Modifier</span></button>
                                     <div class="ui modal modifier m<?php echo h($pack->id_pack, '') ?>">
                                         <div class="content">
                                             <?php modifier_modal($pack->id_pack, '') ?>
                                         </div>
                                     </div>
                                 </td>

                                 <td class="collapsing">
                                     <button class="ui tiny red button" data-button_id="<?php echo h($pack->id_pack) ?>"
                                         data-type="supprimer"><i
                                             class="edit outline icon"></i><span>Supprimer</span></button>

                                     <div class="ui modal supprimer s<?php echo h($pack->id_pack) ?>">
                                         <?php supprimer_modal($pack->id_pack, ''); ?>
                                     </div>
                                 </td>
                             </tr>




                             <?php
                            } ?>
                         </tbody>
                     </table>

               



                 </div>
               
    


             <!-- end row head-->



         </div>









     </div>
     <!--fin page-->


     <script>
     $(document).ready(() => {
         // Write on keyup event of keyword input element
        
  // Write on keyup event of keyword input element
  $("#search").keyup(function() {
        var searchText = $(this).val().toLowerCase();
        // Show only matching TR, hide rest of them
        $.each($("#tabAll tbody tr, #tabPro tbody tr, #tabParti tbody tr"), function() {
            if ($(this).text().toLowerCase().indexOf(searchText) === -1)
                $(this).hide();
            else
                $(this).show();
        });
    });


      



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