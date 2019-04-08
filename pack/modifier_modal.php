<?php
require_once('../includes/initialize.php');

require_login();
?>
<style>


label {
    float: left;
}
</style>


<?php
$pack = Pack::find_by_id($id);





?>




    <div class="page">

        <div class="ui fluid container">


            <div class="ui padded grid">
            <h1>Modifier pack N° <?php echo $id ?></h1>

                <div class="ui fifteen wide column row centered grid" id="modifier_grid<?php echo $id ?>">
                    <h2 class="ui left aligned header"><i class=" icons">
                            <i class="users icon"></i>
                            <i class="corner add icon"></i>
                        </i>&nbsp;modifier le pack</h2>
                    <form method="POST" class="ui form" id="modifier_form<?php echo $id ?>" action="update_pack.php?id=<?php echo $id ?>">
                        <div class="three fields">
                            <div class="field">
                                <label>Nom Pack</label>
                                <input type="text" name="nom_pack" placeholder="Nom de pack">
                            </div>
                            <div class="field">
                                <label>Espace</label>
                                <input type="text" name="espace_pack" placeholder="30..">
                            </div>
                            <div class="field">
                                <label>Prix</label>
                                <input type="text" name="prix_pack" placeholder="2500..">
                            </div>
                        </div>
                        <div class="one  fields">
                            <div class="field">

                                <input type="submit" class="ui teal button" value="modifier" name="modifier">
                            </div>
                        </div>

                        <div class="ui error message"></div>
                    </form><!-- end form -->

                </div><!-- end segment-->





            </div><!-- end grid-->


        </div><!-- end container-->



    </div>
    <!--fin page-->



    <script>

$(function() {
      
});



    $('.menu .item')
        .tab();

   
    
         

    $('#modifier_form<?php echo $id ?>')
        .form({
            on: 'blur',
            fields: {

                nom_pack: {
                    identifier: 'nom_pack',
                    rules: [{
                            type: 'empty',
                            prompt: 'manque un nom'
                        },

                    ]
                },
                espace_pack: {
                    identifier: 'espace_pack',
                    rules: [{
                            type: 'empty',
                            prompt: 'manque un espace!'
                        },

                    ]
                },
                prix_pack: {
                    identifier: 'prix_pack',
                    rules: [{
                            type: 'empty',
                            prompt: 'manque un prix!'
                        },

                    ]
                }

            }
        });


$('#modifier_form<?php echo $id ?>')

  .form('set values', {
    nom_pack     : '<?php echo h($pack->nom_pack) ; ?>',
    espace_pack  : '<?php echo h($pack->espace_pack); ?>',
    prix_pack    : '<?php echo h($pack->prix_pack); ?>',
 
    terms      : true
  })
;

    </script>


    