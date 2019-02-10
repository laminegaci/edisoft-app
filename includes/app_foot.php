
    <script>


$(function() {

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