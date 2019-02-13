<?php 
require_once("../includes/initialize.php");
include("../includes/app_head.php");
?>


<?php include('../includes/menu_head.php'); ?>

<div class="page">

    <div class="ui fluid container">



        <div class="ui padded centered grid">
            <div class="row">
                <h1>Hébégements</h1>
            </div>
            <div class="ui fifteen wide column row segment">
               



                    <div class="four wide column">
                        <div class="ui  secondary vertical pointing big menu">
                            <a class="item active" data-tab="first"><i class="server  icon"></i>Packs</a>
                            <a class="item" data-tab="second"><i class="at  icon"></i>Nom de domaine</a>
                        </div>
                    </div>

                    <div class="twelve wide column">

                        <div class="ui tab  active" data-tab="first">
                            <div class="ui top attached tabular big menu">
                                <a class="active item" data-tab="first/a"><i class="project diagram icon"></i>Mutualisé</a>
                                <a class="item" data-tab="first/b"><i class="glasses icon"></i>Professionnel</a>
                                <a class="item" data-tab="first/c"><i class="recycle icon"></i>Reseller</a>
                            </div>
                            <div class="ui bottom attached active tab segment" data-tab="first/a">
                            
                            
                            
                            
                            
                            
                            
                            </div>
                            <div class="ui bottom attached tab segment" data-tab="first/b">1B</div>
                            <div class="ui bottom attached tab segment" data-tab="first/c">1C</div>
                        </div>


                        <div class="ui tab " data-tab="second">
                            <div class="ui top attached tabular big menu">
                                <a class="item active" data-tab="second/a">.com</a>
                                <a class="item" data-tab="second/b">.co</a>
                                <a class="item" data-tab="second/c">.net</a>
                                <a class="item" data-tab="second/d">.org</a>
                                <a class="item" data-tab="second/e">.biz</a>
                                <a class="item" data-tab="second/f">.us</a>
                                <a class="item" data-tab="second/g">.us.com</a>
                                <a class="item" data-tab="second/h">.mobi</a>
                                <a class="item" data-tab="second/i">.info</a>





                            </div>
                            <div class="ui bottom attached tab segment active" data-tab="second/a">2A</div>
                            <div class="ui bottom attached tab segment" data-tab="second/b">2B</div>
                            <div class="ui bottom attached tab segment" data-tab="second/c">2C</div>
                            <div class="ui bottom attached tab segment" data-tab="second/d">2C</div>

                            <div class="ui bottom attached tab segment" data-tab="second/e">2C</div>

                            <div class="ui bottom attached tab segment" data-tab="second/f">2C</div>

                            <div class="ui bottom attached tab segment" data-tab="second/g">2C</div>

                            <div class="ui bottom attached tab segment" data-tab="second/h">2C</div>

                            <div class="ui bottom attached tab segment" data-tab="second/i">2C</div>



                        </div>


                    </div>


                


            </div>




        </div>






    </div>
    <!--fin page-->


    <script>
    $('.menu .item')
        .tab();
    </script>


    <?php 
require_once("../includes/app_foot.php");
?>