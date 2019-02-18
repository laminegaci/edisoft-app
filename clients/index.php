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
.ui.button i{
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
                    <table class="ui striped    table">
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
                             
                              
                                <button class="ui tiny blue  button" onclick=modal_afficher()><i class="folder open outline icon"></i><span>Afficher</span></button>
                                    <!-- <a href="" ><i class="folder open outline icon"></i>afficher</a> -->
                               
                               
                                </td>
                                <td>
                                <button class="ui tiny yellow  button" onclick=modal_modifier()><i class="edit outline icon"></i><span>Modifier</span></button>


                                    <!-- <a href=""><i class="edit outline icon"></i>modifier</a> -->
                                </td>
                                <td>
                                    <!-- <a href="" id="n2"><i class="ban icon"></i>supprimer</a> -->
                                    <button class="ui tiny red button" onclick=modal_supprimer()><i class="edit outline icon"></i><span>Supprimer</span></button>

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
                                    <a href="" onclick=modal_afficher()><i class="folder open outline icon"></i>afficher</a>
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





<div class="ui fullscreen modal afficher">
 
  <div class="content">
  <?php include('afficher.php'); ?>
  </div>


  
</div>

<div class="ui modal modifier">
  
  <div class="content">
  <?php include('modifier_modal.php'); ?>
  
  </div>
  
</div>

<div class="ui modal supprimer">
  <?php include('supprimer_modal.php'); ?>
</div>
    
    
    </div><!--fin page-->


<script>
 
function modal_afficher()
{
    

$('.ui.modal.afficher')
  .modal('show')
;
}
function modal_modifier()
{
    

$('.ui.modal.modifier')
  .modal('show')
;
}
function modal_supprimer()
{
    

$('.ui.modal.supprimer')
  .modal('show')
;
}
</script>


    <?php 
require_once("../includes/app_foot.php");
?>