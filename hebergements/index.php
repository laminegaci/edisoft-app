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


                    <div class="right item">
                        <a href="ajouter_hebergement.php" class="">
                            <i class="large plus circle icon"></i>

                        </a>
                        <div class="ui action input">
                            <input type="text" placeholder="Rechercher">
                            <div class="ui button">Go</div>
                        </div>
                    </div>
                </div>

                <div class="ui tab  active" data-tab="first">
                        <div class="ui top attached tabular  menu">
                            <a class="active item" data-tab="first/a"><i class="at icon"></i>Nom de domaine</a>
                            <a class="item" data-tab="first/b"><i class="wind icon"></i>Wind</a>
                            <a class="item" data-tab="first/c"><i class="bolt icon"></i>Thunder</a>
                            <a class="item" data-tab="first/d"><i class="water icon"></i>Wave</a>

                            <a class="item" data-tab="first/e"><i class="recycle icon"></i>Tornado</a>
                            <a class="item" data-tab="first/f"><i class="poo storm icon"></i>Storm</a>
                            <a class="item" data-tab="first/g"><i class="sun icon"></i>Sunshine</a>


                            <a class="item" data-tab="first/h"><i class="moon icon"></i>Moon</a>
                            <a class="item" data-tab="first/i"><i class="globe africa icon"></i>Earth</a>
                            <a class="item" data-tab="first/j"><i class="sun outline icon"></i>Sun</a>

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
                        <div class="ui bottom attached tab segment" data-tab="first/d">1d</div>
                        <div class="ui bottom attached tab segment" data-tab="first/e">1e</div>
                        <div class="ui bottom attached tab segment" data-tab="first/f">1f</div>
                        <div class="ui bottom attached tab segment" data-tab="first/g">1g</div>
                        <div class="ui bottom attached tab segment" data-tab="first/h">1h</div>
                        <div class="ui bottom attached tab segment" data-tab="first/i">1i</div>






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