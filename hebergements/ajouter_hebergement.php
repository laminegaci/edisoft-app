<?php 
require_once("../includes/initialize.php");
include("../includes/app_head.php");
?>
<style>
label {
    float: left;
}

.ui.checkbox {
    display: block;
}

select.ui.dropdown {
    height: 100%;
}
</style>



<div class="page">

    <div class="ui fluid container">

        <?php include('../includes/menu_head.php'); ?>

        <div class="ui padded grid">

            <div class="ui fifteen wide column row centered grid segment">
                <h2 class="ui left aligned header"><i class=" icons">
                        <i class="server icon"></i>
                        <i class="corner add icon"></i>
                    </i>&nbsp;Ajouter un hébérgement</h2>
                <br><br>



            <div class="thirteen wide column">
            <form class="ui large form" method="POST">

<div class="field" >
    <label for="">Hébérgement:</label>
    <select class="ui dropdown" id="menu_type" name="type_hebergement" required>
        <option value="">Type..</option>
        <option value="1">Nom de domaine</option>
        <option value="2">Packs</option>
    </select>
</div>










<div id="packform" hidden>


    <div class="field">
        <label for="">Plan d'hébérgement</label>
        <select class="ui dropdown" id="pack_menu" name="packChoisi">
            <option value="">...</option>
            <option value="1">mutualisé</option>
            <option value="2">professionnel</option>
            <option value="3">reseller</option>
        </select>
    </div>

    


    <div class="field" id="mutualise_menu" hidden>
        <label for="">Plan mutualisé</label>
        <select class="ui dropdown" name="mutualiseChoisi">
            <option value="1">Wind</option>
            <option value="2">Thunder</option>
            <option value="3">Wave</option>
        </select>
    </div>

    <div class="field" id="pro_menu" hidden>
        <label for="">Plan professionnel</label>
        <select class="ui dropdown"  name="proChoisi">
            <option value="1">Tornado</option>
            <option value="2">Storm</option>
            <option value="3">Sunshine</option>
        </select>
    </div>

    <div class="field" id="reseller_menu" hidden>
        <label for="">Plan reseller</label>
        <select class="ui dropdown" id="pack_menu" name="resellerChoisi">
            <option value="1">Moon</option>
            <option value="2">Earth</option>
            <option value="3">Sun</option>
        </select>
    </div>



    
    
    

</div>
<div class="field">
        <label>URL</label>
        <input type="text" placeholder="site.com" name="url_dns" autocomplete="off">
    </div>
    <div class="field">
        <label for="">TLD:</label>
        <select class="ui dropdown" id="dns_menu" name="dnsChoisi">
            <option value="">....</option>
            <option value="1">.com</option>
            <option value="2">.net</option>
            <option value="3">.org</option>
            <option value="4">.info</option>
            <option value="5">.biz</option>
            <option value="6">.co</option>
            <option value="7">.us</option>
            <option value="8">.mobi</option>
            <option value="9">.me</option>

        </select>
    </div>
    
<div class="field">
        <label for="">Date début</label>
        <div class="ui calendar standard_calendar" >
            <div class="ui input left icon">
                <i class="calendar icon"></i>
                <input type="text" placeholder="Date de début.." name="date_debut" autocomplete="off" value="">
            </div>
        </div>

    </div>

 <br>

<div class="field">
     

            <input type="submit" class="ui big green button" value="Ajouter">
        
    </div>

    <div class="ui error message"></div>

</form>

            </div>





            </div><!-- end segment-->





        </div><!-- end grid-->


    </div><!-- end container-->



</div>
<!--fin page-->


<script>
$(document).ready(function(){


$('.selection.dropdown')
    .dropdown();

$('#menu_type').change(function() {
    if (this.value == 1) {
        $('#packform').hide();

    } else if (this.value == 2) {
        $('#packform').show();
        $('#pack_menu').attr('required', true);

        
    } else {
        $('#packform').hide();
    }

});
$('#pack_menu').change(function(){
    if (this.value == 1) {

        $('#mutualise_menu').show();
        $('#pro_menu').hide();
        $('#reseller_menu').hide();


    } else if (this.value == 2) {
        $('#mutualise_menu').hide();
        $('#pro_menu').show();
        $('#reseller_menu').hide();

    }
    else if (this.value == 3) {
        $('#mutualise_menu').hide();
        $('#pro_menu').hide();
        $('#reseller_menu').show();

    }else {
        $('#mutualise_menu').hide();
        $('#pro_menu').hide();
        $('#reseller_menu').hide();

    }
})

$('.standard_calendar')
    .calendar({

        type: 'date',
        formatter: {
            date: function(date, settings) {
                if (!date) return '';
                var day = date.getDate();
                var month = date.getMonth() + 1;
                var year = date.getFullYear();
                return year + '-' + month + '-' + day;
            }
        },

        text: {
            days: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
            months: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre',
                'Octobre', 'Novembre', 'Decembre'
            ],
            monthsShort: ['Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Aou', 'Sep', 'Oct', 'Nov', 'Dec'],
            today: 'Aujourd\'hui',
            now: 'Maintenant'

        }
    });




$('.ui.form')
    .form({
        on: 'blur',
        fields: {

            url_dns: {
                identifier: 'url_dns',
                rules: [{
                        type: 'empty',
                        prompt: '<b>URL de site</b> ne doit pas être vide!'
                    }



                ]
            },
            date_debut: {
                identifier: 'date_debut',
                rules: [{
                        type: 'empty',
                        prompt: '<b>la date de début</b> ne doit pas être vide!'
                    }



                ]
            }





        }
    });
});
</script>


<?php 
require_once("../includes/app_foot.php");
?>