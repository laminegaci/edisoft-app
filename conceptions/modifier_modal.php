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
$cons = Conception::find_by_id($id);





?>




<div class="page">

    <div class="ui fluid container">


        <div class="ui  grid">
            <h1>Modifier conception N° <?php echo $id . $type_modal  ?></h1>

            <div class="ui fifteen wide column row centered grid" id="modifier_grid<?php echo $id . $type_modal; ?>">
                <h2 class="ui left aligned header"><i class=" icons">
                        <i class="code icon"></i>
                        <i class=""></i>
                    </i>&nbsp;modifier Conception</h2>
                <form method="POST" class="ui large form" id="modifier_form<?php echo $id . $type_modal; ?>"
                    action="update_conception.php?id=<?php echo $id .$type_modal; ?>">
                    <div class="two fields">
                        <div class="field">
                            <label>commentaire</label>
                            <div class="ui left icon input">
                                <i class="hand holding usd icon"></i>
                                <!-- <input type="text" name="comment" autocomplete="off"> -->
                                <textarea name="comment" cols="30" rows="3"></textarea>

                            </div>
                        </div>
                        

                    </div>
                 



                    <div class="fields">


                        <div class="field">
                            <div class="ui checkbox">                                
                                <input type="checkbox" tabindex="0" class="hidden" name="etat_con" value="termine">
                                <label>Terminé</label>
                            </div>
                        </div>


                       
                    </div>
                        <div class="fields">
                        <div class="field">
                            <input type="submit" class="ui yellow button" value="Modifier" name="modifier">
                        </div>
                        </div>


                    <div class="ui error message"></div>
                </form><!-- end form -->

            </div><!-- end segment-->





        </div><!-- end grid-->


    </div><!-- end container-->



</div>
<!--fin page-->

<div id="modifier_success<?php echo $id .$type_modal; ?>" hidden>


    <div class="ui centered grid">
        <div class="ten wide column row">
            <div class="row">
                <div class="ui big success message">
                    <div class="sixteen wide column">
                        <i class="check big icon"></i>
                        <h2> modification réussite</h2>
                    </div>
                    <br>

                    <div class="sixteen wide column">
                        <button class="ui green button" id="modif_refresh_button<?php echo $id .$type_modal; ?>"><i
                                class="sync alternate icon"></i>Actualiser</button>
                    </div>


                </div>
            </div>

        </div>

        <div class="row"></div>

    </div>
</div>


<script>
$('#slider-<?php echo $id . $type_modal  ?>')
    .slider({
        min: 0,
        max: 100,
        start: 30,
        onChange: function(value) {


            $('#slider-input-<?php echo $id . $type_modal  ?>').val(value)
        }
    });

$('.menu .item')
    .tab();

$('.ui.radio.checkbox')
    .checkbox();



$('#modifier_form<?php echo $id .$type_modal; ?>')
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
                        type: 'number',
                        prompt: 'manque un numero telephon'
                    },

                ]
            }


        }
    });



$('#modifier_form<?php echo $id . $type_modal; ?>')

    .form('set values', {
        comment: '<?php echo h($cons->commentaire_con); ?>',
        versement: '<?php echo h($cons->versement_con); ?>',
        etat_con: '<?php echo h($cons->etat_con); ?>',
        terms: true
    });
</script>