<div class="content">



<div class="ui centered grid" id="delete_grid<?php echo $id; ?>">
        <div class="one column row">
            <div class="column">
                <i class="huge icons">
                    <i class="big red dont icon"></i>
                    <i class="user icon"></i>
                </i></div>
        </div>
        <div class="row">

            <div class="column">
                <form action="supp_page.php" class="ui form" method="POST" id="supp_form<?php echo $id; ?>">

                    <h2>Voulez vous supprimer ce client N° <?php echo $id; ?>?</h2>
                    <input type="submit" value="OUI" class="ui huge right floated red button" name="oui" id="sub">
                </form>
            </div>


        </div>

    </div>



</div>


<div id="supp_success<?php echo $id; ?>" hidden>


   
    <div class="ui centered grid">
        <div class="ten wide column row">
            <div class="row">
                <div class="ui big success message">
                    <div class="sixteen wide column">
                        <i class="check big icon"></i>
                        <h2> Jazat el requete ta3 id = <?php echo $id; ?></h2>
                       
                    </div>
                    <br>

                    <div class="sixteen wide column">
                        <button class="ui green button" id="supp_refresh_button<?php echo $id; ?>"><i class="sync alternate icon"></i>Actualiser</button>
                    </div>


                </div>
            </div>


        </div>

        <div class="row"></div>

    </div>
</div>


<script>
$(function() {
    
    $('#supp_form<?php echo $id; ?>').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            url: "supp_page.php?id=<?php echo $id; ?>", //this is the submit URL
            type: 'POST', //or POST
            data: $(this).serialize(),
            success: function(data) {
                $('#delete_grid<?php echo $id; ?>').transition({
                    animation: 'fade out',
                    interval: 500
                })
                $('#supp_success<?php echo $id; ?>').transition({
                    animation: 'fade in',
                    interval: 700
                })

            }
        });


    });
});
$('#supp_refresh_button<?php echo $id; ?>').click(() => {
    location.reload();
})

</script>

