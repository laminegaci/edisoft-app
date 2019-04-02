<?php 
require_once('../includes/initialize.php'); 

if(require_login() && ! $session->check_one()){
    redirect_to(url_for('dashboard.php'));
    }else
    {
        
    }
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

label {
    float: left;
}
</style>

    <?php 
require_once("../includes/initialize.php");
include("../includes/app_head.php");


?>


    <div class="page">

        <div class="ui fluid container">
<?php include('../includes/menu_head.php');?>
            

            <div class="ui padded centered  grid">
            <h1>Ajouter admin  </h1>

                <div class="ui fifteen wide column " id="modifier_grid">
                    
                    <form method="POST" class="ui form centered grid" action="ajouter_admin.php">
                      
                     <div class="ten wide column">
                     <div class=" field">
                           
                           <label>admin</label>
                           <div class="ui left icon input">
                        <i class="user icon"></i>
                            
                            <input type="text" name="username_ad" placeholder="">
                        </div>
                       
                      
                   </div>
                   <div class=" field">
                   <label>Mot de pass</label>
                    <div class="ui left icon input">
                        <i class="lock icon"></i>
                            
                            <input type="password" name="password_ad" placeholder="">
                        </div>
                    </div>
                       <div class=" field">
                           <label>confirmé mot de pass</label>
                           <div class="ui left icon input">
                        <i class="lock icon"></i>
                            
                            <input type="password" name="confirm_password" placeholder="">
                        </div>
                       </div>
                   
                       <div class="  field">

                           <input type="submit" class="ui teal button" value="ajouter" name="inscrire">
                       </div>
                  

                   <div class="ui error message"></div>
                     
                     </div>
                    </form><!-- end form -->
                    
                    <div class="<?php if(isset($_SESSION['errors']) and !empty($_SESSION['errors'])){ echo 'ui error message'; ?>">
                        <i class="close icon"></i>
                        <div class="header">
                        
                        </div>
                        <ul class="list">
                                        
                        <?php
                            
                            foreach ($_SESSION['errors'] as $error) {
                            
                                echo '<li>'. $error . '</li>';
                            }
                        
                        }
                        ?>

                        </ul>

                </div>
                <!-- end segment -->





            </div><!-- end grid-->






        </div><!-- end container-->



    </div>
    <!--fin page-->
   
<script>   
    <?php 
    
//session_destroy();
$_SESSION['errors'] = [];
echo url_for('../dist/semantic.min.js'); ?>


$(function() {
      
});

$('.menu .item')
        .tab();

// $("#leftbar-toggle").click(function() {
//     event.preventDefault();
//   $("body").toggleClass("opened");
//  });


</script>

   


    <?php 
require_once("../includes/app_foot.php");
?>
