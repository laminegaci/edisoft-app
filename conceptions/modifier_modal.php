
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


            <div class="ui padded grid">
            <h1>Modifier conception N° <?php echo $id; ?></h1>

                <div class="ui fifteen wide column row centered grid" id="modifier_grid<?php echo $id; ?>">
                    <h2 class="ui left aligned header"><i class=" icons">
                            <i class="users icon"></i>
                            <i class="corner add icon"></i>
                        </i>&nbsp;modifier le client</h2>
                    <form method="POST" class="ui form" id="modifier_form<?php echo $id; ?>" action="update_client.php?id=<?php echo $id; ?>">
                        <div class="two fields">
                            <div class="field">
                                <label>commentaire</label>
                                <div class="ui left icon input">
                                    <i class="hand holding usd icon"></i>
                                    <!-- <input type="text" name="comment" autocomplete="off"> -->
                                    <textarea name="comment" cols="30" rows="3"></textarea>

                                </div>
                            </div>
                            <div class="field">
                            <br>
                            <label>Versement</label>
                            <div class="ui left icon input">
                                <i class="hand holding usd icon"></i>
                                <input type="text" name="versement" autocomplete="off">

                            </div>  
                            </div>

                        </div>
                        <div class="three fields">
                            <div class="field">
                              
                            </div>
                            <div class="field">
                                <div class="ui slider" id="slider-1"></div>
                                    <div class="ui input">
                                    <input type="text" id="slider-input-1" >
                                    </div>
                                </div>
                            <div class="field">
                               
                            </div>

                        </div>
                        
                        
                        <div class="one  fields">
                            <div class="field">
                                
                            </div>
                        </div>
                        <div class=" one  fields">
                           
                        </div>
                        <div class="one  fields">
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

    <div id="modifier_success<?php echo $id; ?>" hidden>


<div class="ui centered grid">
    <div class="ten wide column row">
        <div class="row">
            <div class="ui big success message">
                <div class="sixteen wide column">
                <i class="check big icon"></i><h2> modification réussite</h2> 
                </div>
                <br>
                        
                <div class="sixteen wide column">
                <button class="ui green button" id="modif_refresh_button<?php echo $id; ?>"><i class="sync alternate icon"></i>Actualiser</button>
                </div>
       

            </div>
        </div>
        
    </div>

    <div class="row"></div>

</div>
</div>


    <script>

$('.ui.slider')
  .slider()
;
    $('.menu .item')
        .tab();

    $('.ui.radio.checkbox')
        .checkbox();



    $('#modifier_form<?php echo $id; ?>')
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

        /*

$('#modifier_form<?php echo $id; ?>')

  .form('set values', {
    nom_cl     : '<?php echo h($client->nom_cl); ?>',
    prenom_cl  : '<?php echo h($client->prenom_cl); ?>',
    adresse    : '<?php echo h($client->adresse_cl); ?>',
    email      : '<?php echo h($client->email_cl); ?>',
    telephon   : '<?php echo h($client->num_tel_cl); ?>',
    check      : '<?php echo h($client->type_cl);?>',
    entreprise : '<?php echo h($client->nom_societe_cl) ?? '';?>',
    terms      : true
  })
;
*/
    </script>


    