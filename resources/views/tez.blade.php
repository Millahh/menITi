<button id="button"></button>
<script>
  var count = 0;
  var button = document.getElementById('button');

  button.onclick = updateStatus;
  <?php dd($count);?>
</script>