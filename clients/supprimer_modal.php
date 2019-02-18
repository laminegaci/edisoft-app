<div class="content">







    <div class="ui centered grid" id="delete_grid">
        <div class="one column row">
            <div class="column">
                <i class="huge icons">
                    <i class="big red dont icon"></i>
                    <i class="user icon"></i>
                </i></div>
        </div>
        <div class="row">

            <div class="column">
                <form action="" class="ui form" method="post" id="supp_form">

                    <h2>Voulez vous supprimer ce client?</h2>
                    <input type="submit" value="OUI" class="ui huge right floated red button" name="oui" id="sub">
                </form>
            </div>


        </div>

    </div>



</div>


<div id="supp_success" hidden>


    <div class="ui centered grid">
        <div class="ten wide column row">
            <div class="row">
                <div class="ui big success message">
                    <div class="sixteen wide column">
                        <i class="check big icon"></i>
                        <h2> Suppression réussite</h2>
                    </div>
                    <br>

                    <div class="sixteen wide column">
                        <button class="ui green button" id="supp_refresh_button"><i class="sync alternate icon"></i>Actualiser</button>
                    </div>


                </div>
            </div>


        </div>

        <div class="row"></div>

    </div>
</div>


<script>
$(function() {
    $('#supp_form').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            url: 'supprimer_modal.php', //this is the submit URL
            type: 'POST', //or POST
            data: $('#supp_form').serialize(),
            success: function(data) {
                $('#delete_grid').transition({
                    animation: 'fade out',
                    interval: 500
                })
                $('#supp_success').transition({
                    animation: 'fade in',
                    interval: 700
                })

            }
        });


    });
});
$('#supp_refresh_button').click(() => {
    location.reload();
})
</script>