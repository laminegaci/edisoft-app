<?php

require_once("../includes/initialize.php");




if (is_post_request() && isset($_POST['imprimer'])) {
    include("../includes/app_head.php");

    //var_dump($_POST);
    
    $type_pai_fact =   $_POST["type_pai_fact"];

    $client = $_POST['id_cl'];

    $position_tire= strpos($_POST['id_cl'], '-');
    $_POST['id_cl'] = substr($_POST['id_cl'], 0, $position_tire);
   
    $achats = Hebergement::find_where_client($_POST['id_cl']);
    //var_dump($achats);
   
    $totale = 0;
} else {
    redirect_to('index.php');
}






?>


<?php include('../includes/menu_head.php');

 ?>

<script src="<?php echo url_for('dist/jspdf.debug.js'); ?>"></script>
<script src="<?php echo url_for('dist/jspdf.plugin.autotable.js'); ?>"></script>

<style>
.ui.fifteen.wide.column.row.centered.grid.segment {
    height: 85vh;
    overflow: scroll;
}

html {
    box-sizing: border-box;
}

*,
*:before,
*:after {
    box-sizing: inherit;
}
</style>
<div class="page">

    <div class="ui fluid container">

        <?php
?>






        <div class="ui padded grid">

            <div class="ui fifteen wide column row centered grid segment">

            
                <h1>Validation de facture Client: <span class="ui red text"><?php echo $client ?? ''; ?></span></h1>

    <?php $infosClient = Client::find_by_id($client) ;
    $heb_array = [];
  
    ?>

                <table id="table" class="ui table">
                    <thead>
                        <tr>
                         
                        <th>#</th>
                         <th>pack</th>
                         <th>nom de domaine</th>
                            <th>Date début</th>
                            <th>date d'expiration</th>
                            
                            <th>Prix</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($achats) {
        foreach ($achats as $achat) {
            ?>
                        <tr>
                        <td><?php echo h($achat->id_heb)?></td>
                           
                            <td><?php echo h($achat->nom_pack).'<sub>('.$achat->espace_heb.' Go)</sub>'?></td>
                            <td><?php echo h($achat->url_heb)?></td>
                            <td><?php echo h($achat->date_deb_heb)?></td>
                            <td><?php echo h($achat->date_fin_heb)?></td>
                            
                            <td><?php echo h($achat->prix);
            $totale += $achat->prix;
            $heb_array[] = $achat->id_heb; ?></td>
                            
                            
                        </tr>
                        <?php
        }
    }?>

<tr></tr>
<tr></tr>
<tr>
    <td></td>
    <td></td>

    <td></td>

    <td></td>

    <td></td>
    <td>Totale : <b><?php echo $totale. " DA"; ?> </b></td>

</tr>


                    </tbody>
                </table>
                <h2 class="ui yellow header"><?php if (empty($heb_array)) {
        echo '<i class="exclamation triangle icon"></i>ce client a payé tout les hébérgements demandés';
    } ?></h2>










                <form action="add_facture.php" method="post" enctype="multipart/form-data" <?php if (empty($heb_array)) {
        echo 'hidden';
    } ?> >
                    <input type="text" name="totale_fact" value="<?php echo $totale; ?>" hidden>
                    <input type="text" name="type_pai_fact" value="<?php echo $type_pai_fact ?? ''; ?>" hidden>
                    <input type="file" required name="image" id="image_ccp"  <?php if ($type_pai_fact !== 'ccp') {
        echo 'hidden';
    }?> >
                    <input type="text" name="id_cl" value="<?php echo $_POST['id_cl']  ?? ''; ?>" hidden>
                    <input type="text" name="heb_array" value="<?php echo h(serialize($heb_array))  ?? ''; ?>" hidden>

              <input type="submit" class="ui yellow button" name="valider" id="valider" value="Valider et imprimer"> 
              </form>
            </div>
        </div>

    </div>

    <!-- end row head-->



</div>





</div>abcdefg1
<!--fin page-->


<script>
function generate() {

    var imgData =
        'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKYAAAA3CAYAAACGsjGRAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MUI5OTYxN0U5Q0QyMTFFNThGQjc5OTBCMEQ1MDU2OTAiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MUI5OTYxN0Y5Q0QyMTFFNThGQjc5OTBCMEQ1MDU2OTAiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDoxQjk5NjE3QzlDRDIxMUU1OEZCNzk5MEIwRDUwNTY5MCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDoxQjk5NjE3RDlDRDIxMUU1OEZCNzk5MEIwRDUwNTY5MCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pvrek/YAAA/USURBVHja7F0JlBTl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'
    var doc = new jsPDF();
    doc.setFont("helvetica");

    doc.addImage(imgData, 'JPEG', 15, 10, 30, 10);
    doc.setFontSize(26);



    doc.setDrawColor(0);
    doc.setFillColor(204, 255, 255);
    doc.rect(140, 1, 40, 14, 'F');
    doc.text("Facture", 144, 10, null, null);

    doc.setFontSize(14);
    doc.text('B1-80 Centre commercial elQods', 16, 30);
    doc.text('Chéraga-Alger', 16, 36);
    doc.text('Tel: 021 34 14 01 / Fax: 021 34 14 01', 16, 42);
    doc.text('www.edisoft.dz', 16, 48);
    doc.setFontSize(18);
    doc.setFontStyle("bold");
    doc.text('<?php echo h($infosClient->nom_cl . " ". $infosClient->prenom_cl); ?>', 96, 62);
    doc.text('<?php echo h($infosClient->nom_societe_cl) ?>', 96, 68);
    doc.text('Tel: <?php echo h($infosClient->num_tel_cl)?>', 96, 74);
    doc.text('<?php echo h($infosClient->email_cl) ?>', 96, 80);

    doc.setFontStyle("normal");
    doc.setFontSize(13);
    doc.text('Hébérgements:', 16, 125);
    doc.setFontStyle("bold");



    var head = [
        ["#", "pack", "nom de domaine", "date début", "date d'expiration", "prix"]
    ];
    var body = [
        
        <?php
        if ($achats) {
            $nbr= count($achats);
            foreach ($achats as $achat) {
                echo '["",';
                echo '"' . h($achat->nom_pack).'('. h($achat->espace_heb).' Go)",'; 
                echo '"'. h($achat->url_heb).'",';
                echo '"'. h($achat->date_deb_heb).'",';
                echo '"'. h($achat->date_fin_heb).'",';
                //echo '"'. h($achat->espace_heb).' GO",';
                echo '"'. h($achat->prix).' DA"';
                
                echo '],';
            }
        };
        ?>





        ["", "", "", "", "", "", ""],

        ["", "<?php echo $nbr . " ";?> packs", "", "", "", "", "<?php echo $totale . " " ;?> DA"],



    ];


    doc.autoTable({
        head: head,
        body: body,
        startY: 136
    });


    doc.setFontStyle("normal");
    doc.text('En votre aimable réglement,', 106, 254);
    doc.text('Cordialement', 106, 260);






   doc.output("dataurlnewwindow");
}
//
   

$('#valider').click(function(){
  
    
    if (!document.querySelector('#image_ccp').hasAttribute('hidden')) {
        if (!$('#image_ccp').get(0).files.length === 0) {
            generate();
        }
   }

        
   
})
</script>


<?php
require_once("../includes/app_foot.php");
?>