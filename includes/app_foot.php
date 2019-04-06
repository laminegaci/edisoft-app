



<script src="<?php echo url_for('dist/lightbox.js'); ?>"></script>
    <script>


$(function() {

    // Write on keyup event of keyword input element
    $("#search").keyup(function() {
        $('#load_search').toggleClass('loading');
        var searchText = $(this).val().toLowerCase();
        // Show only matching TR, hide rest of them
        $.each($("#table tbody tr"), function() {
            if ($(this).text().toLowerCase().indexOf(searchText) === -1)
                $(this).hide();
            else
                $(this).show();
        });
    });
  // js toggle example "1"
  $("#leftbar-toggle").click(function() {
    event.preventDefault();
  $("body").toggleClass("opened");
 });

  // js toggle example "2"
  /*
   $(".leftbar").hover(function() {
     $("body").toggleClass("opened");
   });
   */
  // js toggle example "3"
  // $("#leftbar-toggle").click(function() {
  //   $("body").toggleClass("opened");
  // });
  
});


</script>

</body>
</html>