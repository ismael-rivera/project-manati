    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//localhost:35729/livereload.js"></script>
    <script>
function spitValidate(data){
alert(data);
// jquery
var phpFunc = "<?php site_url('signup/process_form')?>"; 
$.post(phpFunc, function(data) {
  $('.errors').html(data);
});
}
</script>
  </body>
</html>