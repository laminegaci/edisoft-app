<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
#search{
  background: inherit !important;
  margin-bottom: 10px;
  border: 0;
}
.prompt{
border-radius: 5px !important;
}
label{
  float:left;
}
</style>


<body>


<?php 
require_once("../includes/initialize.php");
include("../includes/app_head.php");
?>


<div class="page">

      <div class="ui fluid container">

          <?php include('../includes/menu_head.php'); ?>

          <div class="ui padded grid">

                  <div class="ui fifteen wide column row centered grid segment">
                  <h2>ajouter client</h2>
                  <form method="POST" class="ui form">
                                <div class="two fields">
                                  <div class="field">
                                    <label style="">Nom</label>
                                    <input type="text" placeholder="Nom de client">
                                  </div>
                                  <div class="field">
                                    <label>Prenom</label>
                                    <input type="text" placeholder="Prenom de client">
                                  </div>
                                  
                                </div>  
                                <div class="three fields">
                                  <div class="field">
                                    <label style="">Adress</label>
                                    <input type="text" placeholder="Adresse">
                                  </div>
                                  <div class="field">
                                    <label>E-mail</label>
                                    <input type="Email" placeholder="exemple@gmail.com">
                                  </div>
                                  <div class="field">
                                    <label>Telephon</label>
                                    <input type="text" placeholder="">
                                  </div>
                                  
                                </div>
                                <label for="">Vous ètes:</label><br><br>
                                <div class="one  fields">
                                  <div class="field">
                                    <div class="ui radio checkbox">
                                      <input type="radio" name="fruit" tabindex="0" class="hidden" checked>
                                      <label>Particulier</label>
                                    </div>
                                  </div>
                                  
                                </div>
                                <div class="one  fields">
                                  <div class="field">
                                        <div class="ui radio checkbox">
                                          <input type="radio" id="disable" name="fruit" tabindex="0" class="hidden">
                                          <label>Professionnel</label>
                                        </div>
                                  </div>
                                </div>
                                <div class="one  fields">
                                  <div class="field">
                                    <label>Nom de l'entreprise</label>
                                    <input type="text" placeholder="Entreprise" id="enable" disabled>
                                  </div>
                                </div>
                                <div class="one  fields">
                                  <div class="field">
                                    
                                    <input type="submit" class="ui button" value="Ajouter">
                                  </div>
                                </div>
                          
                            
                      </form><!-- end form -->    
                  
                  </div><!-- end segment-->         

      

      

          </div><!-- end grid-->
     

      </div><!-- end container-->



</div><!--fin page-->


<script>
$('.menu .item')
  .tab()
;

$('.ui.radio.checkbox')
  .checkbox()
;

$('.ui.checkbox')
  .checkbox()
;

$('#disable').change(function(){
  $('#enable').attr('disabled',!this.checked);
 
});
</script>


<?php 
require_once("../includes/app_foot.php");
?>
    
</body>
</html>