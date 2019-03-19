
<style>
#search {
    background: inherit !important;
    margin-bottom: 10px;
    border: 0;
}

.prompt {
    border-radius: 5px !important;
}

label {
    float: left;
}
</style>

    <?php 
require_once("../includes/initialize.php");

/////////////////////////////////////////////////////////////////////////////

if(is_post_request() && isset($_POST['ajouter'])){
      
    /*
    foreach ($_POST as $key => $value) {            
      $_POST[$key] = test_input($value);
      }
    */

   
    //création et préparation de données pour les convertirs en objets 
      $args = [];
      $args['nom_pack'] = $_POST['nom_pack'] ?? NULL;
      $args['espace_pack'] = $_POST['espace_pack'] ?? NULL;
      $args['prix_pack'] = $_POST['prix_pack'] ?? NULL;
      $args['id_ad'] = /*$_POST[''] ?? NULL*/ 1;


     // var_dump($args) . "<br>";
      
      $pack = new Pack($args);
      $result = $pack->create();

      if($result == true){
        redirect_to('index.php');
      }else{
        //  echo "error";
      }
    
}


///////////////////////////////////////////////////////////////////////////////////
include("../includes/app_head.php");
?>


    <div class="page">

        <div class="ui fluid container">

            <?php include('../includes/menu_head.php'); ?>

            <div class="ui padded centered  grid">
            <h1>Ajouter pack  </h1>

                <div class="ui fifteen wide column " id="modifier_grid">
                    
                    <form method="POST" class="ui form centered grid" id="modifier_form">
                      
                     <div class="ten wide column">
                     <div class=" field">
                           
                           <label>Nom Pack</label>
                           <input type="text" name="nom_pack" placeholder="Nom de pack">
                       
                      
                   </div>
                   <div class=" field">
                           <label>Espace</label>
                           <input type="text" name="espace_pack" placeholder="30..">
                       </div>
                       <div class=" field">
                           <label>Prix</label>
                           <input type="text" name="prix_pack" placeholder="2500..">
                       </div>
                   
                       <div class="  field">

                           <input type="submit" class="ui teal button" value="ajouter" name="ajouter">
                       </div>
                  

                   <div class="ui error message"></div>
                     
                     </div>
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

   
    
         

    $('#modifier_form')
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


    </script>

   


    <?php 
require_once("../includes/app_foot.php");
?>
