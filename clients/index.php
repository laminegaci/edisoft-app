<?php 
require_once("../includes/initialize.php");
include("../includes/app_head.php");
include('function_modal.php');
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

.ui.button i {
    display: inline;
}
</style>

<div class="page">

    <div class="ui fluid container">

        <?php include('../includes/menu_head.php'); ?>

        <div class="ui padded grid">



            <div class="ui fifteen wide column row centered grid segment">

                <div class="ui pointing secondary big menu">


                    <h1 class="ui center aligned header item"><i class="users icon"></i>Clients</h1>


                    <a class="item active" data-tab="first"><i class="large list icon"></i>Tout(200)</a>
                    <a class="item " data-tab="second"><i class="large user secret icon"></i>Professionel(100)</a>
                    <a class="item" data-tab="third"><i class="large user icon"></i>Particulier(100)</a>


                    <div class="right item">
                        <a href="ajouter_client.php" class="">
                            <i class="large plus circle icon"></i>

                        </a>
                        <div class="ui action input">
                            <input type="text" placeholder="Rechercher">
                            <div class="ui button">Go</div>
                        </div>
                    </div>
                </div>
                <div class="ui bottom attached tab  active" data-tab="first">
                    <table class="ui striped  table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom et Prénom</th>
                                <th>Adresse</th>
                                <th>nom de l'entreprise</th>
                                <th>numéro de téléphone</th>
                                <th>email</th>
                                <th colspan="4">catégorie</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>BENOUNNAS Oussama</td>
                                <td>Ouled Fayet</td>
                                <td>/</td>
                                <td>05 58 90 57 64</td>
                                <td>oussama@benounnas.com</td>
                                <td>Particulier</td>
                                <td>


                                    <button class="ui tiny blue  button" data-button_id="1" data-type="afficher"><i
                                            class="folder open outline icon"></i><span>Afficher</span></button>

                                    <div class="ui large modal afficher a1">

                                        <div class="content">


                                            <?php afficher_modal('1') ?>
                                        </div>



                                    </div>


                                    <!-- <a href="" ><i class="folder opendata-type="supprimer" outline icon"></i>afficher</a> -->


                                </td>
                                <td>
                                    <button class="ui tiny yellow  button" data-button_id="1" data-type="modifier"><i
                                            class="edit outline icon"></i><span>Modifier</span></button>
                                    <div class="ui modal modifier m1">

                                        <div class="content">
                                            <?php modifier_modal('1') ?>

                                        </div>

                                    </div>


                                    <!-- <a href=""><i class="edit outline icon"></i>modifier</a> -->
                                </td>
                                <td>
                                    <!-- <a href="" id="n2"><i class="ban icon"></i>supprimer</a> -->
                                    <button class="ui tiny red button" data-button_id="1" data-type="supprimer"><i
                                            class="edit outline icon"></i><span>Supprimer</span></button>

                                    <div class="ui modal supprimer s1">
                                        <?php supprimer_modal('1'); ?>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Gaci Mohamed Lamine</td>
                                <td>Souidania</td>
                                <td>Gaci incorporation</td>
                                <td>05 58 90 57 64</td>
                                <td>lamine@gaci.com</td>
                                <td>Pro</td>
                                <td>


<button class="ui tiny blue  button" data-button_id="2" data-type="afficher"><i
        class="folder open outline icon"></i><span>Afficher</span></button>

<div class="ui large modal afficher a2">

    <div class="content">


        <?php afficher_modal('2') ?>
    </div>



</div>


<!-- <a href="" ><i class="folder opendata-type="supprimer" outline icon"></i>afficher</a> -->


</td>
<td>
<button class="ui tiny yellow  button" data-button_id="2" data-type="modifier"><i
        class="edit outline icon"></i><span>Modifier</span></button>
<div class="ui modal modifier m2">

    <div class="content">
        <?php modifier_modal('2') ?>

    </div>

</div>


<!-- <a href=""><i class="edit outline icon"></i>modifier</a> -->
</td>
<td>
<!-- <a href="" id="n2"><i class="ban icon"></i>supprimer</a> -->
<button class="ui tiny red button" data-button_id="2" data-type="supprimer"><i
        class="edit outline icon"></i><span>Supprimer</span></button>

<div class="ui modal supprimer s2">
    <?php supprimer_modal('2'); ?>
</div>

</td>
                            </tr>



                        </tbody>
                    </table>
                </div>
                <div class="ui bottom attached tab segment" data-tab="second">
                    <table class="ui striped large   table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom et Prénom</th>
                                <th>Adresse</th>
                                <th>nom de l'entreprise</th>
                                <th>numéro de téléphone</th>
                                <th>email</th>
                                <th colspan="4">catégorie</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>BENOUNNAS Oussama</td>
                                <td>Ouled Fayet</td>
                                <td>/</td>
                                <td>05 58 90 57 64</td>
                                <td>oussama@benounnas.com</td>
                                <td>Particulier</td>
                                <td>
                                    <a href="" onclick=modal_afficher()><i
                                            class="folder open outline icon"></i>afficher</a>
                                </td>
                                <td>
                                    <a href=""><i class="edit outline icon"></i>modifier</a>
                                </td>
                                <td>
                                    <a href=""><i class="ban icon"></i>supprimer</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Gaci Mohamed Lamine</td>
                                <td>Souidania</td>
                                <td>Gaci incorporation</td>
                                <td>05 58 90 57 64</td>
                                <td>lamine@gaci.com</td>
                                <td>Pro</td>
                                <td>
                                    <a href=""><i class="folder open outline icon"></i>afficher</a>
                                </td>
                                <td>
                                    <a href=""><i class="edit outline icon"></i>modifier</a>
                                </td>
                                <td>
                                    <a href=""><i class="ban icon"></i>supprimer</a>

                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="ui bottom attached tab segment" data-tab="third">
                    <table class="ui striped large   table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom et Prénom</th>
                                <th>Adresse</th>
                                <th>nom de l'entreprise</th>
                                <th>numéro de téléphone</th>
                                <th>email</th>
                                <th colspan="4">catégorie</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>BENOUNNAS Oussama</td>
                                <td>Ouled Fayet</td>
                                <td>/</td>
                                <td>05 58 90 57 64</td>
                                <td>oussama@benounnas.com</td>
                                <td>Particulier</td>
                                <td>
                                    <a href=""><i class="folder open outline icon"></i>afficher</a>
                                </td>
                                <td>
                                    <a href=""><i class="edit outline icon"></i>modifier</a>
                                </td>
                                <td>
                                    <a href=""><i class="ban icon"></i>supprimer</a>
                                </td>


                        </tbody>
                    </table>

                </div>




            </div>


            <!-- end row head-->



        </div>









    </div>
    <!--fin page-->


    <script>
    $(document).ready(() => {



        function modal_supprimer(id) {



            $('.ui.modal.supprimer.s' + id)
                .modal('show');
        }

        function modal_afficher(id) {


            $('.ui.modal.afficher.a' + id)
                .modal('show');
        }

        function modal_modifier(id) {


          
$('.ui.modal.modifier.m' + id)
             .modal('show');
        }

        $('button').click(function() {


            let button_type = $(this).data('type'); //nrecupérer type

            let button_id = $(this).data('button_id'); // njib id
            //modal_supprimer(button_id);

               switch (button_type) {
                   case 'supprimer':
                       modal_supprimer(button_id);
                       break;
                       case 'modifier':
                       modal_modifier(button_id);
                       break;
                       case 'afficher':
                       modal_afficher(button_id);
                       break;
               
                  
               }
        });




        $('.menu .item')
            .tab();






    }) //fin ready
    </script>


    <?php 
require_once("../includes/app_foot.php");
?>