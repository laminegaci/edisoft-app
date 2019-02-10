<?php 
require_once("../includes/initialize.php");
include("../includes/app_head.php");
?>



<div class="page">

<div class="ui fluid container">

    <div class="ui padded grid">
      <!-- begin row head-->
                    <div class="streched row" id="head">
                            <div class="thirteen wide column">
                                    <img  src="<?php echo url_for('images/logo.png'); ?>" alt=""  class="ui tiny image" style="margin-left: 2%; margin-top: 1%">
                                </div>

                          

                            
                                      <div class="three wide column" style="margin-top: 1%">
                                              
                                        <i class="big user circle icon"></i>
                                                    
                                        <span>Mohamed Lamine</span>
                                      
                                        <i onclick="power_off()" class="large power off icon" id="offbutton"></i>
                                      </div> 
                              
                                        
                                      

                          

                    </div> 
</div>         

      <!-- end row head-->



        </div>
     





      </div><!--fin page-->





<?php 
require_once("../includes/app_foot.php");
?>
?>