
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





    <?php 
require_once("../includes/initialize.php");

?>


    <div class="page">

        <div class="ui fluid container">


            <div class="ui padded grid">

                <div class="ui fifteen wide column row centered grid" id="modifier_grid">
                    <h2 class="ui left aligned header"><i class=" icons">
                            <i class="users icon"></i>
                            <i class="corner add icon"></i>
                        </i>&nbsp;modifier le client</h2>
                    <form method="POST" class="ui form" id="modifier_form">
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

                                <input type="submit" class="ui yellow button" value="Modifier">
                            </div>
                        </div>

                        <div class="ui error message"></div>
                    </form><!-- end form -->

                </div><!-- end segment-->





            </div><!-- end grid-->


        </div><!-- end container-->



    </div>
    <!--fin page-->

    <div id="modifier_success" hidden>


<div class="ui centered grid">
    <div class="ten wide column row">
        <div class="row">
            <div class="ui big success message">
                <div class="sixteen wide column">
                <i class="check big icon"></i><h2> modification réussite</h2> 
                </div>
                <br>
                        
                <div class="sixteen wide column">
                <button class="ui green button" id="modif_refresh_button"><i class="sync alternate icon"></i>Actualiser</button>
                </div>
       

            </div>
        </div>
        
    </div>

    <div class="row"></div>

</div>
</div>


    <script>

$(function() {
    $('#modifier_form').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            url: 'modifier_modal.php', //this is the submit URL
            type: 'POST', //or POST
            data: $('#modifier_form').serialize(),
            success: function(data) {
                $('#modifier_grid').hide();
                $('#modifier_success').show();


            }
        });


    });
});
$('#modif_refresh_button').click(()=>{
    location.reload();
});



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


    