
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


<div class="container">
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
<script>
$(window).load(function()
{
    $('#myModal').modal('show');
});
</script>
<script>
$('.btnNext').click(function() {
  const nextTabLinkEl = $('.nav_tabs .active').closest('li').next('li').find('a')[0];
  const nextTab = new bootstrap.Tab(nextTabLinkEl);
  nextTab.show();
});

$('.btnPrevious').click(function() {
  const prevTabLinkEl = $('.nav_tabs .active').closest('li').prev('li').find('a')[0];
  const prevTab = new bootstrap.Tab(prevTabLinkEl);
  prevTab.show();
});
</script>
<script>
  var selectElement = document.getElementById("mySelect");
  var modal = document.getElementById("myModal");
  var closeModal = document.getElementsByClassName("setuju")[0];

  selectElement.addEventListener("change", function() {
      if (selectElement.value !== "") {
      modal.style.display = "block";
      }
  });

  closeModal.addEventListener("click", function() {
      modal.style.display = "none";
  });

  window.addEventListener("click", function(event) {
      if (event.target === modal) {
      modal.style.display = "none";
      }
  });
  var imgBox = document.getElementById("imgBox");
  var loadFile = function(event){
    imgBox.src = "{{URL::asset('storage/foto/pp-mentor.png')}}";

  }
  var labelBox = document.getElementById("labelBox");
  var changeLabel = function(event){
    document.getElementById("labelBox").innerHTML = "Berhasil diunggah!";

}
</script>