



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

label {
    float: left;
}
</style>


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

                                <input type="text" name="nom_client" placeholder="Nom de client">
                            </div>
                            <div class="field">
                                <label>Prénom</label>
                                <input type="text" name="prenom_client" placeholder="Prénom de client">
                            </div>

                        </div>
                        <div class="three fields">
                            <div class="field">
                                <label style="">Adresse</label>
                            <div class="ui left icon input">
                            <input type="text" name="adresse" placeholder="Adresse">
                            <i class="map marker alternate icon"></i>                            
                            </div>
                                </div>
                            <div class="field">
                                <label>E-mail</label>
                            <div class="ui left icon input">

                                <input type="Email" name="email" placeholder="exemple@gmail.com">
                            <i class="at icon"></i>                            

                                </div>
                            </div>
                            <div class="field">
                                <label>Numéro de téléphone</label>
                                <div class="ui left icon input">
                                <i class="phone icon"></i>                            
                                <input type="text" name="num_tel" placeholder="+213...">

                                </div>
                            </div>

                        </div>
                       <br>
                        <div class="one  fields">
                            <div class="field">
                                <div class="ui radio checkbox">
                                    <input type="radio" id="particulier" name="type_client" value="particulier" class="hidden"
                                        checked>
                                    <label>Particulier</label>
                                </div>
                            </div>

                        </div>
                        <div class="one  fields">
                            <div class="field">
                                <div class="ui radio checkbox">
                                    <input type="radio" id="professionnel" name="type_client" value="professionnel"
                                        class="hidden">
                                    <label>Professionnel</label>
                                </div>
                            </div>
                        </div>
                        <div class="one  fields">
                            <div class="field" id="myfield" hidden>
                                <label>Nom de l'entreprise</label>
                                <input type="text" placeholder="Entreprise" id="myCheck" name="entreprise" disabled>
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
    $(document).ready(function(){

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

                nom_client: {
                    identifier: 'nom_client',
                    rules: [{
                            type: 'empty',
                            prompt: '<b>le nom</b> ne doit pas être vide!'
                        },

                        

                    ]
                },
                prenom_client: {
                    identifier: 'prenom_client',
                    rules: [{
                            type: 'empty',
                            prompt: '<b>le prénom</b>ne doit pas être vide!'
                        },

                    ]
                },
                adresse_cl: {
                    identifier: 'adresse',
                    rules: [{
                            type: 'empty',
                            prompt: "<b>l'adresse </b>ne doit pas être vide!"
                        },

                    ]
                },
                email: {
                    identifier: 'email',
                    rules: [{
                            type: 'empty',
                            prompt: "<b>l'email</b> ne doit pas être vide!"
                        },
                        {
                            type: 'email',
                            prompt: "veuillez taper un email valide (email@email.com)"
                        }


                    ]
                },
                num_tel: {
                    identifier: 'num_tel',
                    rules: [{
                            type: 'empty',
                            prompt: '<b>le numéro</b> de téléphone ne doit pas être vide!'
                        },

                    ]
                },
                entreprise:{
                    identifier: 'entreprise',
                    rules: [{
                            type: 'empty',
                            prompt: "svp tapez l'entreprise, elle est <b>indispensable</b>",
                        },

                    ]

                }

            }
        });
    });
    </script>


    <?php 
require_once("../includes/app_foot.php");
?>
