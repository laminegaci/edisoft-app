<?php require_once('includes/initialize.php') ;
include('includes/app_head.php');
?>
<?php include('includes/menu_head.php'); ?>

<div class="page">

    <div class="ui fluid container">

<?php

$row_cl = Client::rows_tot();
$row_cl_part = Client::rows_part();
$row_cl_pro = Client::rows_pro();


?>

        <!-- begin row stats-->
        <div class="ui row equal width padded grid" id="example1">
            <div class="column">


                <div class="ui card">
                    <div class="ui statistics content">
                        <div class=" ">
                            <div class="ui grid ">
                                <div class="row">
                                    <h4 class="column">Total clients</h4>
                                </div>





                                <div class="value">
                                    <i class="users huge icon"></i>
                                </div>



                                <div class="label">
                                    <span class="ui center aligned header"><?php echo $row_cl;?></span> <br>
                                    <!-- <span class="ui green center aligned header">+4%&nbsp;</span>cette semaine -->
                                </div>


                                <div class="centered row">
                                    <div class="canvas">
                                        <canvas id="myChart1"></canvas>

                                        <span><b>Partiulier:</b> <?php echo '('.$row_cl_part.')'; $percent_part=$row_cl_part*100/$row_cl;echo round($percent_part,0);?>%</span>
                                        <span><b>Profitionnel:</b><?php echo '('.$row_cl_pro.')'; $percent_pro=$row_cl_pro*100/$row_cl;echo round($percent_pro,0);?> %</span>

                                    </div>

                                </div>


                            </div>

                        </div>

                    </div>
                </div>

            </div>

            <div class="column">


                <div class="ui card">
                    <div class="ui statistics content">
                        <div class=" ">
                            <div class="ui grid ">
                                <div class="row">
                                    <h4 class="column">Total Revenue </h4>
                                </div>





                                <div class="value">
                                    <i class="huge money bill alternate outline icon"></i>
                                </div>



                                <div class="label">
                                    <span class="ui center aligned header">1000000 DZD</span> <br>

                                    <!-- <span class="ui green center aligned header">+4%&nbsp;</span>cette semaine -->
                                </div>


                                <div class="centered row">
                                    <div class="canvas">
                                        <canvas id="myChart2"></canvas>

                                        <span><b>Cache:</b> 10%</span>
                                        <span><b>Chèque:</b> 20%</span>
                                        <span><b>CCP:</b> 70%</span>
                                    </div>

                                </div>


                            </div>

                        </div>

                    </div>
                </div>

            </div>

            <div class="column">


                <div class="ui card">
                    <div class="ui statistics content">
                        <div class=" ">
                            <div class="ui grid ">
                                <div class="row">
<?php 
$row_hyb = Hebergement::rows_tot();
$row_hyb_dns = Hebergement::rows_dns();
$row_hyb_else = Hebergement::rows_else();
?>
                                    <h4 class="column">Total Hébérgement</h4>
                                </div>





                                <div class="value">
                                    <i class="database huge icon"></i>
                                </div>



                                <div class="label">
                                    <span class="ui center aligned header"><?php echo $row_hyb; ?></span> <br>
                                    <!-- <span class="ui green center aligned header">+4%&nbsp;</span>cette semaine -->
                                </div>


                                <div class="centered row">
                                    <div class="canvas">
                                        <canvas id="myChart3"></canvas>

                                        <span><b>domaine:</b> <?php echo '('.$row_hyb_dns.')';$percent_dns=$row_hyb_dns*100/$row_hyb;echo round($percent_dns,0);?>%</span>
                                        <span><b>domaine+pack: </b><?php echo '('.$row_hyb_else.')';$percent_else=$row_hyb_else*100/$row_hyb;echo round($percent_else,0);?>%</span>

                                    </div>

                                </div>


                            </div>

                        </div>

                    </div>
                </div>

            </div>

            <div class="column">


                <div class="ui card">
                    <div class="ui statistics content">
                        <div class=" ">
                            <div class="ui grid ">
                                <div class="row">
<?php
$row_con = Conception::rows_tot();
$row_con_stat = Conception::rows_statique();
$row_con_dyn = Conception::rows_dynamique();
?>
                                    <h4 class="column">Total Conception</h4>
                                </div>




                                <div class="value">
                                    <i class="file code huge icon"></i>

                                </div>



                                <div class="label">
                                    <span class="ui center aligned header"><?php echo $row_con;?></span> <br>
                                    <!-- <span class="ui green center aligned header">+4%&nbsp;</span>cette semaine -->
                                </div>
                                <div class="centered row">

                                    <div class="canvas">
                                        <canvas id="myChart4"></canvas>

                                        <span><b>Statique:</b><?php echo '('.$row_con_stat.')'; $percent_stat=$row_con_stat*100/$row_con;echo round($percent_stat,0);?>%</span>
                                        <span><b>Dynamique:</b><?php echo '('.$row_con_dyn.')'; $percent_dyn=$row_con_dyn*100/$row_con;echo round($percent_dyn,0);?> %</span>
                                    </div>

                                </div>


                            </div>

                        </div>

                    </div>
                </div>

            </div>







        </div>

        <!-- end row stats-->

        <!-- begin row tables-->

        <div class="ui row equal width  padded  grid">

            <div class="row">

                <div class="column ">
                    <!-- début des avertissements-->

                    <div class="ui fluid card">
                        <div class="ui content grid">
                            <div class="row">
                                <h2 class="thirteen wide column">Hébérgements en urgence</h2>

                                <div class="two wide column">

                                    <div class="ui  search  column">
                                        <div class="ui icon input">
                                            <input class="prompt" type="text" placeholder="Common passwords..."
                                                id="search">
                                            <i class="search icon"></i>
                                        </div>
                                        <div class="results"></div>
                                    </div>
                                    
                                </div>
                                <h4 class="thirteen wide column">Expirés:&nbsp; <span class="ui red text">24</span></h4>
                                <h4 class="thirteen wide column">En voie d'expiration:&nbsp <span class="ui orange text">24</span></h4>

                            </div>
                           

                            <div class="row">
                                <div id="left" class="column">
                                    <table class="ui striped large selectable  red table" id="table">
                                        <thead>
                                            <tr>
                                                <th>Nom et Prénom</th>
                                                <th>Hébérgement</th>
                                                <th>URL</th>
                                                <th>date expiration</th>
                                                <th colspan="3">jours restants</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="red">
                                                <td><i class="skull crossbones icon"></i>BENOUNNAS Oussama</td>
                                                <td>Pack Sunshine</td>
                                                <td>benounnas.com</td>
                                                <td>10/2/2019</td>
                                                <td><b>-3 jours</b></td>

                                                <td class="selectable ">
                                                    <a href=""><i class="minus circle icon"></i>&nbsp;Supprimer</a>

                                                </td>

                                                <td class="selectable ">

                                                    <a href=""><i class="sync icon"></i>&nbsp;renouvler</a>

                                                </td>
                                            </tr>
                                            <tr class="orange">
                                                <td><i class="exclamation triangle icon"></i>Gaci Mohammed lamine</td>
                                                <td>Pack Thunder</td>
                                                <td>mohammed.org</td>
                                                <td>3/2/2019</td>
                                                <td><b>10 jours</b></td>

                                                <td class="selectable ">
                                                    <a href=""><i class="minus circle icon"></i>&nbsp;Supprimer</a>

                                                </td>

                                                <td class="selectable ">

                                                    <a href=""><i class="sync icon"></i>&nbsp;renouvler</a>

                                                </td>
                                            </tr>

                                            <tr class="orange">
                                                <td><i class="exclamation triangle icon"></i>Ryan Reynolds</td>
                                                <td>Pack wind</td>
                                                <td>mohammed.org</td>
                                                <td>28/2/2019</td>
                                                <td><b>7 jours</b></td>

                                                <td class="selectable ">
                                                    <a href=""><i class="minus circle icon"></i>&nbsp;Supprimer</a>

                                                </td>

                                                <td class="selectable ">

                                                    <a href=""><i class="sync icon"></i>&nbsp;renouvler</a>

                                                </td>
                                            </tr>
                                            <tr class="orange">
                                                <td><i class="exclamation triangle icon"></i>Brad pitt</td>
                                                <td>Pack storm</td>
                                                <td>mohammed.org</td>
                                                <td>14/2/2019</td>
                                                <td><b>29 jours</b></td>

                                                <td class="selectable ">
                                                    <a href=""><i class="minus circle icon"></i>&nbsp;Supprimer</a>

                                                </td>

                                                <td class="selectable ">

                                                    <a href=""><i class="sync icon"></i>&nbsp;renouvler</a>

                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- fin des avertissements-->

                </div><!-- fin de colonne-->

            </div>

            <div class="row">
                <div class="column ">
                    <!-- début des avertissements-->

                    <div class="ui fluid card">
                        <div class="content">
                            <h2>Conception non terminée</h2>
                            <div id="middle">
                                <table class="ui celled orange table">
                                    <thead>
                                        <tr>
                                            <th>Client</th>
                                            <th>Nom du site</th>
                                            <th>délai restant</th>
                                            <th>état d'avancement</th>
                                            <th colspan="2">Commentaire</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Ooredoo</td>
                                            <td>Oooredoo.dz</td>
                                            <td>15 jours</td>
                                            <td>
                                                <div class="ui red progress" data-percent="20">
                                                    <div class="bar"></div>
                                                    <div class="label">20%</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="ui bulleted list">
                                                    <div class="item">conception de la base de données</div>

                                                    <div class="item">Harmonie des couleurs</div>
                                                </div>
                                            </td>
                                            <td class="selectable">
                                                <a href=""><i class="large info circle icon"></i>&nbsp;infos</a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Ooredoo</td>
                                            <td>Oooredoo.dz</td>
                                            <td>15 jours</td>
                                            <td>
                                                <div class="ui teal progress" data-percent="74">
                                                    <div class="bar"></div>
                                                    <div class="label">74%</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="ui bulleted list">
                                                    <div class="item">conception de la base de données</div>

                                                    <div class="item">Harmonie des couleurs</div>
                                                </div>
                                            </td>
                                            <td class="selectable">
                                                <a href=""><i class="large info circle icon"></i>&nbsp;infos</a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Ooredoo</td>
                                            <td>Oooredoo.dz</td>
                                            <td>15 jours</td>
                                            <td>
                                                <div class="ui orange progress" data-percent="50">
                                                    <div class="bar"></div>
                                                    <div class="label">50%</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="ui bulleted list">
                                                    <div class="item">conception de la base de données</div>

                                                    <div class="item">Harmonie des couleurs</div>
                                                </div>
                                            </td>
                                            <td class="selectable">
                                                <a href=""><i class="large info circle icon"></i>&nbsp;infos</a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- fin des avertissements-->

                </div><!-- fin de colonne-->

            </div>






        </div>
        <!--fin grid-->





        <!-- end row tables-->

    </div>


</div>

</div>





<script src="dist/Chart.bundle.js"></script>
<script src="dist/jquery.circliful.js"></script>

<script>
$(function() {


    // Write on keyup event of keyword input element
    $("#search").keyup(function() {
        $('.ui.search').toggleClass('blue loading double');
        var searchText = $(this).val().toLowerCase();
        // Show only matching TR, hide rest of them
        $.each($("#table tbody tr"), function() {
            if ($(this).text().toLowerCase().indexOf(searchText) === -1)
                $(this).hide();
            else
                $(this).show();
        });
    });






    $('.ui.progress').progress();

    // js toggle example "1"
    $("#leftbar-toggle").click(function() {
        event.preventDefault();
        $("body").toggleClass("opened");
    });

    // js toggle example "2"
    /*
     $(".leftbar").hover(function() {
       $("body").toggleClass("opened");
     });
     */
    // js toggle example "3"
    // $("#leftbar-toggle").click(function() {
    //   $("body").toggleClass("opened");
    // });

});

var ctx = document.getElementById("myChart1");
var myPieChart = new Chart(ctx, {
    type: 'doughnut',

    data: {
        labels: ["Particulier", "Profitionnel"],

        datasets: [{
            data: [<?php echo round($percent_part,0);?>, <?php echo round($percent_pro,0);?>],
            backgroundColor: [
                '#2b2e4a',
                '#e84545',

            ]

        }]
    },

    options: 0
});


var ctx = document.getElementById("myChart2");
var myPieChart = new Chart(ctx, {
    type: 'doughnut',

    data: {
        labels: ["Cache", "Chèque", "CCP"],

        datasets: [{
            data: [10, 20, 70],
            backgroundColor: [
                '#2b2e4a',
                '#e84545',
                '#903749'

            ]

        }]
    },

    options: 0
});

var ctx = document.getElementById("myChart3");
var myPieChart = new Chart(ctx, {
    type: 'doughnut',

    data: {
        labels: ["Domaine", "Domaine+pack"],

        datasets: [{
            data: [<?php echo round($percent_dns,0);?>, <?php echo round($percent_else,0);?>],
            backgroundColor: [
                '#2b2e4a',
                '#e84545',


            ]

        }]
    },

    options: 0
});

var ctx = document.getElementById("myChart4");
var myPieChart = new Chart(ctx, {
    type: 'doughnut',

    data: {
        labels: ["Statique", "Dynamique"],

        datasets: [{
            data: [<?php echo round($percent_stat,0);?>, <?php echo round($percent_dyn,0);?>],
            backgroundColor: [
                '#2b2e4a',
                '#e84545',

            ]

        }]
    },

    options: 0
});
</script>

</body>

</html>