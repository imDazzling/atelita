<script>
  function getSize() {
  size = $( "#lectura" ).css( "font-size" );
  size = parseInt(size, 10);
}

getSize();

$( "#up" ).on( "click", function() {
  if (size + 2) {
    $( "#lectura" ).css( "font-size", "+=2" );
}
});
$( "#down" ).on( "click", function() {
  if ((size - 2) >= 12) {
    $( "#lectura" ).css( "font-size", "-=2" );
}
});
</script>

<script>
  $(document).ready(function() {
  $( "#bgwhite" ).on("click", function() {
    $('#lectura').addClass('bgwhite').removeClass('bggrey bgblack');
  });
  $( "#bggrey" ).on("click", function() {
    $('#lectura').addClass('bggrey').removeClass('bgwhite bgblack');
  });
  $( "#bgblack" ).on("click", function() {
    $('#lectura').addClass('bgblack').removeClass('bggrey bgwhite');
  });
});
</script>