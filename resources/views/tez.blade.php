<!DOCTYPE html>
<html>
<head>
  <title>Show Modal on Option Select</title>
  <style>
    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-content {
      background-color: #fefefe;
      margin: 15% auto;
      padding: 20px;
      border: 1px solid #888;
      width: 80%;
    }
  </style>
</head>
<body>
  <h1>Show Modal on Option Select</h1>

  <select id="mySelect">
    <option value="">Select an option</option>
    <option value="o">Option 1</option>
    <option value="op">Option 2</option>
    <option value="option3">Option 3</option>
  </select>

  <div id="myModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <p>This is the modal content.</p>
    </div>
  </div>

<script>
     var selectElement = document.getElementById("mySelect");
     var modal = document.getElementById("myModal");
     var closeModal = document.getElementsByClassName("close")[0];

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
     </script>
</body>
</html>
