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
</style>


<body>


<?php 
require_once("../includes/initialize.php");
include("../includes/app_head.php");
?>


<div class="page">

      <div class="ui container">

      <?php include('../includes/menu_head.php'); ?>

               <div class="ui grid">

                                <div class="row"></div>
                                <div class="one column centered row">
                                     <h1 class="">ajouter Clients</h1>
                                </div>
                                <div class="row">
                                <div class="ui form">
  <div class="inline fields">
    <div class="eight wide field">
      <label>Name</label>
      <input type="text" placeholder="First Name">
    </div>
    <div class="three wide field">
      <input type="text" placeholder="Middle Name">
    </div>
    <div class="five wide field">
      <input type="text" placeholder="Last Name">
    </div>
  </div>
</div>

                                  </div>

                               

                
                </div>         


      <!-- end row head-->



      </div>
     





</div><!--fin page-->


<script>
$('.menu .item')
  .tab()
;
</script>


<?php 
require_once("../includes/app_foot.php");
?>
?>
    
</body>
</html>