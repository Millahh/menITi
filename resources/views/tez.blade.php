<div id="myDiv">
  <!-- Your div content here -->
  <p>This is the content of the div.</p>
  <button id="hideButton">Hide Div</button>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
  $('#hideButton').click(function() {
    $('#myDiv').hide();
  });
});
</script>
