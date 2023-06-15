@extends('base')
@section('content')
<style>
    .container{
        padding-top: 2%;
    }
    .nav a{
      border-bottom:1px solid #444B49;
      color:#00BBA5;
      font-family: 'Dosis';
      font-size:20px;
    }
    .nav:focus, .nav a:focus, .nav a:hover{
      border-bottom:2px solid #D9D9D9;
      color:#00BBA5;
    }
    .jadwal p{
        font-family:'Be Vietnam Pro';
        font-weight:bold;
    }
    .jadwal{
        border-radius:20px;
    }
    .clock{
        color:#D9D9D9;
    }
    hr{
        color:#444B49;
        border-top:0px;
        margin:0;
        opacity:100%;
    }
    /* .parent{ 
        display: flex;
    }
    .parent p{
        margin:auto;
    } */
</style>
<body>
<!-- TAB PANE -->
<ul class="nav justify-content-center mb-3 mt-5 text-center" id="ex1" role="tablist">
  <li class="nav-item col-6" role="presentation">
    <a
      class="nav-link active pdg"
      id="ex1-tab-1"
      data-mdb-toggle="tab"
      href="#ex1-tabs-1"
      role="tab"
      aria-controls="ex1-tabs-1"
      aria-selected="true"
      >Pengingat</a>
  </li>
  <li class="nav-item col-6" role="presentation">
    <a
      class="nav-link pdg"
      id="ex1-tab-2"
      data-mdb-toggle="tab"
      href="#ex1-tabs-2"
      role="tab"
      aria-controls="ex1-tabs-2"
      aria-selected="false"
      >Riwayat</a>
  </li>
</ul>
<!-- KONTEN TAB -->
<div class="tab-content mb-5" id="ex1-content">
  <!-- TAB 1 -->
    <div class="justify-content-center tab-pane fade show active" id="ex1-tabs-1" role="tabpanel" aria-labelledby="ex1-tab-1">
        <!-- JADWAL -->
        @for($i=0; $i<8; $i++)
            <div class="jadwal tosca-bg p-3 m-3">
                <p class="text-light mb-0">Mentoring 1 Aditya Rais</p>
                <p class="text-lg mb-0">31, Des 2022</p>
                <div class="clock">
                    <i class="fa-solid fa-clock d-inline-block align-middle"></i>
                    <p class="d-inline-block small mb-0">09.00 WIB</p>
                </div>
            </div>
        @endfor
        <hr>
    </div>
  <!-- TAB 2 -->
  <div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
        <!-- RIWAYAT -->
        <!-- JIKA BLM ADA RIWAYAT -->
        <div class="parent d-flex align-items-center" style="min-height:300px">
            <p class="text-light mx-auto">Kamu belum melakukan mentoring</p>
        </div>
</div>
</body>
<script>
    function myFunction() {
        // Get the checkbox
        var checkBox = document.getElementById("myCheck");
        // Get the output text
        var text = document.getElementById("text");

        // If the checkbox is checked, display the output text
        if (checkBox.checked == true){
            text.style.display = "block";
        } else {
            text.style.display = "none";
        }
    }
    function myFunctionButton() {
        var x = document.getElementById("myDIV");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>
@endsection