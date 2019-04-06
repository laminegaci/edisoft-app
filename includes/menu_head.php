<?php
require_once("initialize.php");


?>
<style>
a img{
    width:5em !important;
}
.ui.top.fixed{
padding-left: 80px;
}

</style>


  
            <!-- begin row head-->
    <div class="" >
                              
              <div class="ui top fixed  fluid menu">
                <div class="header item">
                 <a href="<?php echo url_for('dashboard.php'); ?>">   <img src="<?php echo url_for('images/logo.png');?>" alt=""></a>
                </div>
                
                
            
            
            
                <div class="right menu">
                <div class="item">
                    <i class="user icon"></i>
<?php $username = Admin::find_by_id($_SESSION['admin_id'])?>
                        <?php echo $username.''.$_SESSION['admin_id']; ?>
                    </div>
                    <div class="item">
                  
                    
                     
                    <a href="<?php echo url_for('logout.php');?>">  <i class="power off red link icon"></i></a>
                   
                       
                    </div>
                   
              </div>
          </div>
</div>


