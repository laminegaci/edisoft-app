<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
#search {
    background: inherit !important;
    margin-bottom: 10px;
    border: 0;
}

.prompt {
    border-radius: 5px !important;
}

label {
    float: left;
}
</style>


<body>


    <?php 
require_once("../includes/initialize.php");
include("../includes/app_head.php");
?>


    <div class="page">

        <div class="ui fluid container">

            <?php include('../includes/menu_head.php'); ?>

            <div class="ui padded grid">

                <div class="ui fifteen wide column row centered grid segment">
                    <h2 class="ui left aligned header"><i class=" icons">
                            <i class="users icon"></i>
                            <i class="corner add icon"></i>
                        </i>&nbsp;Ajouter un client</h2>
                    <form method="POST" class="ui form">
                        <div class="two fields">
                            <div class="field">
                                <label>Nom</label>
                                <input type="text" name="nom_cl" placeholder="Nom de client">
                            </div>
                            <div class="field">
                                <label>Prenom</label>
                                <input type="text" name="prenom_cl" placeholder="Prenom de client">
                            </div>

                        </div>
                        <div class="three fields">
                            <div class="field">
                                <label style="">Adress</label>
                                <input type="text" name="adresse" placeholder="Adresse">
                            </div>
                            <div class="field">
                                <label>E-mail</label>
                                <input type="Email" name="email" placeholder="exemple@gmail.com">
                            </div>
                            <div class="field">
                                <label>Telephon</label>
                                <input type="text" name="telephon" placeholder="">
                            </div>

                        </div>
                        <label>Vous ètes:</label><br><br>
                        <div class="one  fields">
                            <div class="field">
                                <div class="ui radio checkbox">
                                    <input type="radio" id="particulier" name="check" value="particulier" class="hidden"
                                        checked>
                                    <label>Particulier</label>
                                </div>
                            </div>

                        </div>
                        <div class="one  fields">
                            <div class="field">
                                <div class="ui radio checkbox">
                                    <input type="radio" id="professionnel" name="check" value="professionnel"
                                        class="hidden">
                                    <label>Professionnel</label>
                                </div>
                            </div>
                        </div>
                        <div class="one  fields">
                            <div class="field" id="myfield" hidden>
                                <label>Nom de l'entreprise</label>
                                <input type="text" name="entreprise" placeholder="Entreprise" id="myCheck" disabled>
                            </div>
                        </div>
                        <div class="one  fields">
                            <div class="field">

                                <input type="submit" class="ui button" value="Ajouter">
                            </div>
                        </div>

                        <div class="ui error message"></div>
                    </form><!-- end form -->

                </div><!-- end segment-->





            </div><!-- end grid-->


        </div><!-- end container-->



    </div>
    <!--fin page-->


    <script>
    $('.menu .item')
        .tab();

    $('.ui.radio.checkbox')
        .checkbox();

    $('#particulier').change(function() {
        $("#myfield").hide(500, function() {

        });
        document.getElementById("myCheck").disabled = true;

    });
    $('#professionnel').change(function() {
        $("#myfield").show(500, function() {

        });
        document.getElementById("myCheck").disabled = false;

    });


    $('.ui.form')
        .form({
            on: 'blur',
            fields: {

                nom_cl: {
                    identifier: 'nom_cl',
                    rules: [{
                            type: 'empty',
                            prompt: 'manque un nom'
                        },

                    ]
                },
                prenom_cl: {
                    identifier: 'prenom_cl',
                    rules: [{
                            type: 'empty',
                            prompt: 'manque un prenom'
                        },

                    ]
                },
                adresse_cl: {
                    identifier: 'adresse',
                    rules: [{
                            type: 'empty',
                            prompt: 'manque une adresse'
                        },

                    ]
                },
                email_cl: {
                    identifier: 'email',
                    rules: [{
                            type: 'empty',
                            prompt: 'manque un email'
                        },

                    ]
                },
                telephon_cl: {
                    identifier: 'telephon',
                    rules: [{
                            type: 'empty',
                            prompt: 'manque un numero telephon'
                        },

                    ]
                },
                entreprise: {
                    identifier: 'entreprise',
                    rules: [{
                            type: 'empty',
                            prompt: 'manque un nom d\'entreprise'
                        },

                    ]
                },

            }
        });
    </script>


    <?php 
require_once("../includes/app_foot.php");
?>

</body>

</html>