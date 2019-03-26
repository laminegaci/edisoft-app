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


                     <h1 class="ui center aligned header item"><i class="boxes icon"></i>Admin</h1>


                     <a class="item active" data-tab="first"><i class="large list icon"></i>Tout(<?php echo $rows; ?>)</a>
                   

                     <div class="right item">
                         <a href="add_admin.php" class="">
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



?>
               
                    <table class="ui striped large table" id="tabAll">
                         <thead>
                             <tr>
                                 <th>#</th>
                                 <th>username</th>
                                 
                                 
                                 

                             </tr>
                         </thead>
                         <tbody>

                            
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