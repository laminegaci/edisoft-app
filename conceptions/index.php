<?php
require_once("../includes/initialize.php");
include("../includes/app_head.php");
?>


<?php include('../includes/menu_head.php'); ?>
 
<div class="page">

<div class="ui fluid container">









             <div class="ui padded  centered grid">

                        <div class="ui  grid row">
                            <div class="ui fifteen wide column segment">
                   

                         

                            <!--

                                <div class="right item">
                                      <div class="ui action input">
                                        <input type="text" placeholder="Rechercher">
                                        <div class="ui button">Go</div>
                                      </div>
                                    </div>

                            -->
                            <div class="ui pointing secondary big menu">
  

                            <h1 class="ui center aligned header item"><i class="code icon"></i>Conceptions</h1>        


                              <a class="item active" data-tab="first"><i class="large list icon"></i>Tout(200)</a>
                              <a class="item " data-tab="second"><i class="large html5 icon"></i>Statique(100)</a>
                              <a class="item" data-tab="third"><i class="large node js icon"></i>Dynamique(100)</a>
                            

                              <div class="right item">
                              <a href="" class="">
                                     <i class="large plus circle icon"></i>
                                                                          
                               </a>
                                      <div class="ui action input">
                                        <input type="text" placeholder="Rechercher">
                                        <div class="ui button">Go</div>
                                      </div>
                                    </div>
                            </div>


                            <div class="ui tab segment active" data-tab="first">
                              <div class="ui top attached tabular menu">
                             
                                <a class="item active" data-tab="first/a"><i class="spinner yellow icon"></i>en cours</a>
                                <a class="item " data-tab="first/b"><i class="check green circle icon"></i>terminées</a>
                              </div>
                              <div class="ui bottom attached tab segment active" data-tab="first/a">1A</div>
                              <div class="ui bottom attached tab segment " data-tab="first/b">1B</div>
                              <div class="ui bottom attached tab segment" data-tab="first/c">1C</div>
                            </div>



                            <div class="ui tab segment " data-tab="second">
                              <div class="ui top attached tabular menu">
                                <a class="item active" data-tab="second/a"><i class="spinner yellow icon"></i>en cours</a>
                                <a class="item " data-tab="second/b"><i class="check green circle icon"></i>terminées</a>
                              </div>
                              <div class="ui bottom attached tab segment active" data-tab="second/a">2A</div>
                              <div class="ui bottom attached tab segment " data-tab="second/b">2B</div>
                              <div class="ui bottom attached tab segment" data-tab="second/c">2C</div>
                            </div>




                            <div class="ui tab segment" data-tab="third">
                              <div class="ui top attached tabular menu">
                                <a class="item active" data-tab="third/a"><i class="spinner yellow icon"></i>en cours</a>
                                <a class="item" data-tab="third/b"><i class="check green circle icon"></i>terminées</a>
                              </div>
                              <div class="ui bottom attached tab segment active" data-tab="third/a">3A</div>
                              <div class="ui bottom attached tab segment" data-tab="third/b">3B</div>
                              <div class="ui bottom attached tab segment" data-tab="third/c">3C</div>
                            </div>

                            
                                 
                          </div>











                        </div>
                        </div>
                    </div>
</div>         

      <!-- end row head-->



        </div>
     





      </div><!--fin page-->


<script>

$('.ui.segment .menu .item')
  .tab({
    context: '.ui.segment'
  })
;
</script>


<?php
require_once("../includes/app_foot.php");
?>
?>