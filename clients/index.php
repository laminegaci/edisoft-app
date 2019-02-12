<?php 
require_once("../includes/initialize.php");
include("../includes/app_head.php");
?>

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
      <?php include('../includes/menu_head.php'); ?>

<div class="page">

      <div class="ui fluid container">


               <div class="ui padded grid">

                                <div class="ui container centered grid "> 
                                <div class="row"></div>
                                <h1 class="ui left aligned header">Clients</h1>

                                    <div class="ui row grid">

                                     <div class="ui top attached tabular menu">
                                          <a class="item active" data-tab="first">Tout (197)</a>
                                          <a class="item" data-tab="second">Pro(97)</a>
                                          <a class="item" data-tab="third">Particulier(100)</a>

                                          <div class="ui search right menu" id="search">
                                              <input class="prompt" type="text" placeholder="Rechercher">
                                               <div class="results"></div>
                                          </div>
                                        </div>
                                        <div class="ui bottom attached tab segment active" data-tab="first">
                                                 <table class="ui striped large   table">
                                                                  <thead>
                                                                    <tr>
                                                                    <th>#</th>
                                                                    <th>Nom et Prénom</th>
                                                                    <th>Adresse</th>
                                                                    <th>nom de l'entreprise</th>
                                                                    <th>numéro de téléphone</th>
                                                                    <th>email</th>
                                                                    <th colspan="3">catégorie</th>
                                                                    <th>
                                                                    <a href="">
                                                                    <i class="plus circle blue big icon"></i>
                                                                    </a>
                                                                    </th>
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
                                                                     <a href="afficher.php"><i class="folder open outline icon"></i>afficher</a>
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
                                                                    <tr>
                                                                    <td>1</td>
                                                                     <td>BENOUNNAS Oussama</td>
                                                                     <td>Ouled Fayet</td>
                                                                     <td>/</td>
                                                                     <td>05 58 90 57 64</td>
                                                                     <td>oussama@benounnas.com</td>
                                                                     <td>Particulier</td>
                                                                     <td>
                                                                     <a href="afficher.php"><i class="folder open outline icon"></i>afficher</a>
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
                                                                     <a href=""><i class="folder open outline icon"></i>afficher</a>
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