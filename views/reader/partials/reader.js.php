<script>
  function getSize() {
  size = $( "#lectura" ).css( "font-size" );
  size = parseInt(size, 10);
}

getSize();

$( "#up" ).on( "click", function() {
  if (size + 5) {
    $( "#lectura" ).css( "font-size", "+=5" );
}
});
$( "#down" ).on( "click", function() {
  if ((size - 5)) {
    $( "#lectura" ).css( "font-size", "-=5" );
}
});
</script>

<script>
  $(document).ready(function() {
  $( "#bgwhite" ).on("click", function() {
    $('body').addClass('bgwhite').removeClass('bggrey bgblack');
  });
  $( "#bggrey" ).on("click", function() {
    $('body').addClass('bggrey').removeClass('bgwhite bgblack');
  });
  $( "#bgblack" ).on("click", function() {
    $('body').addClass('bgblack').removeClass('bggrey bgwhite');
  });
});
</script>