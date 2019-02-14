<?php 
require_once("../includes/initialize.php");
include("../includes/app_head.php");
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
</style>

<div class="page">

    <div class="ui fluid container">

        <?php include('../includes/menu_head.php'); ?>

        <div class="ui padded grid">

            

            <div class="ui fifteen wide column row centered grid segment">

                <div class="ui pointing secondary big menu">


                    <h1 class="ui center aligned header item"><i class="server icon"></i>Hébérgements</h1>


                    <a class="item active" data-tab="first"><i class="large box icon"></i>Packs(200)</a>
                    <a class="item " data-tab="second"><i class="large at icon"></i>Nom de doamine(100)</a>


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

                <div class="ui tab  active" data-tab="first">
                        <div class="ui top attached tabular big menu">
                            <a class="active item" data-tab="first/a"><i class="project diagram icon"></i>Mutualisé</a>
                            <a class="item" data-tab="first/b"><i class="glasses icon"></i>Professionnel</a>
                            <a class="item" data-tab="first/c"><i class="recycle icon"></i>Reseller</a>
                        </div>
                        <div class="ui bottom attached active tab segment" data-tab="first/a">


                            <table class="ui striped table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>client</th>
                                        <th>nom pack</th>
                                        <th>nom de domaine</th>
                                        <th>date début</th>
                                        <th>date d'expiration</th>
                                        <th>espace pack</th>
                                        <th>prix pack</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>BENOUNNAS Oussama</td>
                                        <td>Thunder</td>
                                        <td>.com</td>
                                        <td>février 16, 2019</td>
                                        <td>février 16, 2019</td>
                                        <td>3Go</td>
                                        <td>6200 Da</td>
                                    </tr>
                                   
                                </tbody>
                            </table>




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
                        <div class="ui bottom attached tab segment active" data-tab="second/a">
                        <table class="ui striped table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>client</th>
                                        <th>date début</th>
                                        <th>date d'expiration</th>
                                        <th>prix </th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>BENOUNNAS Oussama</td>
                                        <td>février 16, 2019</td>
                                        <td>février 16, 2019</td>
                                        <td>6200 Da</td>
                                    </tr>
                                   
                                </tbody>
                            </table>
                        
                        </div>
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


        <!-- end row head-->



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
?>