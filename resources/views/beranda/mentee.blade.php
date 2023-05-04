@extends('app')
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
    .src, .src input:focus, .src::placeholder{
        background-color:#6D7775;
        border: 0px;
        color: #C5C9C8;
        width:100%;
    }
    .sortir{
        background-color:#6D7775;
        color:#C5C9C8;
        border:1px solid #C5C9C8;
        font-family: 'Dosis';
        
    }
    .ctnt1 button:active, .ctnt1 button:focus, .ctnt1 button:hover{
        background-color:#011612;
        color:#C5C9C8;
    } 
    .sortir-active input{
        width:90%;
    }
    .fa-bookmark{
        color:#00BBA5;
    }
    .fa-paper-plane{
        color:white;
    }
    .card-container, .card button{
        font-family:'Be Vietnam Pro';
        font-size:13px;
    }
    .navbar-nav a{
        color:white;
        font-size:20px;
    }
    .card{
        margin-top:10%;
    }
    @media only screen and (max-width:575px) {
        .row-cols-1 .card{
            margin-right:20%;
            margin-left:20%;
        }
    }
</style>
<body>
<nav class="navbar navbar-expand-sm tosca-bg">
  <div class="container-fluid d-flex">
    <div class="p-2">
        <a class="navbar-brand" href="#"><img src="{{URL::asset('/assets/notif-white.png')}}" style="height:25px"></a>
    </div>
    <div class="ms-auto">
        <ul class="navbar-nav">
            <li class="nav-item py-0">
                <a class="nav-link active py-0" aria-current="page" href="#">Pesan</a>
            </li>
            <li class="nav-item py-0">
                <a class="nav-link py-0" href="#">Jadwal</a>
            </li>
            <li class="nav-item py-0">
                <a class="nav-link py-0" href="#">Favorit</a>
            </li>
            <li class="nav-item py-0">
                <a class="nav-link py-0" href="#"><img src="{{URL::asset('/assets/pp1.png')}}" style="height:35px"></a>
            </li>
        </ul>
    </div>
  </div>
</nav>
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
      >Rekomendasi</a>
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
      >Mentor Saya</a>
  </li>
</ul>
<!-- KONTEN TAB -->
<div class="tab-content mb-5" id="ex1-content">
  <!-- TAB 1 -->
    <div class="ctnt1 justify-content-center tab-pane fade show active" id="ex1-tabs-1" role="tabpanel" aria-labelledby="ex1-tab-1">
        <input class="src rounded p-2" type="text" placeholder="&#xF002; Search.." style="font-family:Arial, FontAwesome"/>
        <div style="padding-left:91%">
            <button onclick="myFunctionButton()" class="btn sortir rounded-pill mt-3"><img src="{{URL::asset('/assets/filter.png')}}" style="height:26px">  Sortir</button>
        </div>
        <div id="myDIV" style="display:none" class="sortirs">
            <div class="row m-0">
                <p class="col tosca m-0">Bidang</p>
                <span class="col"></span>
                <p class="col tosca m-0">Lokasi</p>
            </div>
            <div class="sortir-active row">
                <input class="col src rounded p-2" type="text" placeholder="&#xF002; Search.." style="font-family:Arial, FontAwesome"/>
                <span class="col"></span>
                <input class="col src rounded p-2" type="text" placeholder="&#xF002; Search.." style="font-family:Arial, FontAwesome"/>
            </div>
        </div>
        <!-- CARD -->
        <div class="card-container">
            <div class="row row-cols-xxl-5 row-cols-xl-4 row-cols-md-3 row-cols-sm-2 row-cols-1">
                <div class="mrg">
                    <div class="card">
                        <i class="fa-regular fa-bookmark fa-lg pl-3 pt-4"></i>
                        <div class="padding-card p-3 text-center">
                            <p class="nama mb-0 font-weight-bold">Aditya Rais</p>
                            <div clas="star">
                                <i class="yellow fa-solid fa-star"></i>
                                <i class="yellow fa-solid fa-star"></i>
                                <i class="yellow fa-solid fa-star"></i>
                                <i class="yellow fa-solid fa-star"></i>
                                <i class="yellow fa-solid fa-star"></i>
                            </div>
                            <p class="small deskripsi mb-0">Alumni UGM, pegawai part time di Mamikos.</p>
                            <img class="mx-auto my-2" src="{{URL::asset('/assets/pp1.png')}}" alt="profile Pic" width="100">
                            <div clas="loc">
                                <i class="tosca fa-solid fa-location-dot d-inline"></i>
                                <p class="font-weight-bold text-secondary d-inline">Malang, Jawa Timur</p>
                            </div>
                            <p class="small bidang font-weight-bold mb-1">Web Developer</p>
                        </div>
                        <div class="pesan input-group">
                            <input type="text" class="form-control soft-tosca-bg" style="font-size:12px;" placeholder="Kirim pesan.." aria-label="pesan" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn tosca-bg" type="button"><i class="fa-solid fa-paper-plane"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mrg">
                    <div class="card">
                        <i class="fa-regular fa-bookmark fa-lg pl-3 pt-4"></i>
                        <div class="padding-card p-3 text-center">
                            <p class="nama mb-0 font-weight-bold">Aditya Rais</p>
                            <div clas="star">
                                <i class="yellow fa-solid fa-star"></i>
                                <i class="yellow fa-solid fa-star"></i>
                                <i class="yellow fa-solid fa-star"></i>
                                <i class="yellow fa-solid fa-star"></i>
                                <i class="yellow fa-solid fa-star"></i>
                            </div>
                            <p class="small deskripsi mb-0">Alumni UGM, pegawai part time di Mamikos.</p>
                            <img class="mx-auto my-2" src="{{URL::asset('/assets/pp1.png')}}" alt="profile Pic" width="100">
                            <div clas="loc">
                                <i class="tosca fa-solid fa-location-dot d-inline"></i>
                                <p class="font-weight-bold text-secondary d-inline">Malang, Jawa Timur</p>
                            </div>
                            <p class="small bidang font-weight-bold mb-1">Web Developer</p>
                        </div>
                        <div class="pesan input-group">
                            <input type="text" class="form-control soft-tosca-bg" style="font-size:12px;" placeholder="Kirim pesan.." aria-label="pesan" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn tosca-bg" type="button"><i class="fa-solid fa-paper-plane"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mrg">
                    <div class="card">
                        <i class="fa-regular fa-bookmark fa-lg pl-3 pt-4"></i>
                        <div class="padding-card p-3 text-center">
                            <p class="nama mb-0 font-weight-bold">Aditya Rais</p>
                            <div clas="star">
                                <i class="yellow fa-solid fa-star"></i>
                                <i class="yellow fa-solid fa-star"></i>
                                <i class="yellow fa-solid fa-star"></i>
                                <i class="yellow fa-solid fa-star"></i>
                                <i class="yellow fa-solid fa-star"></i>
                            </div>
                            <p class="small deskripsi mb-0">Alumni UGM, pegawai part time di Mamikos.</p>
                            <img class="mx-auto my-2" src="{{URL::asset('/assets/pp1.png')}}" alt="profile Pic" width="100">
                            <div clas="loc">
                                <i class="tosca fa-solid fa-location-dot d-inline"></i>
                                <p class="font-weight-bold text-secondary d-inline">Malang, Jawa Timur</p>
                            </div>
                            <p class="small bidang font-weight-bold mb-1">Web Developer</p>
                        </div>
                        <div class="pesan input-group">
                            <input type="text" class="form-control soft-tosca-bg" style="font-size:12px;" placeholder="Kirim pesan.." aria-label="pesan" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn tosca-bg" type="button"><i class="fa-solid fa-paper-plane"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mrg">
                    <div class="card">
                        <i class="fa-regular fa-bookmark fa-lg pl-3 pt-4"></i>
                        <div class="padding-card p-3 text-center">
                            <p class="nama mb-0 font-weight-bold">Aditya Rais</p>
                            <div clas="star">
                                <i class="yellow fa-solid fa-star"></i>
                                <i class="yellow fa-solid fa-star"></i>
                                <i class="yellow fa-solid fa-star"></i>
                                <i class="yellow fa-solid fa-star"></i>
                                <i class="yellow fa-solid fa-star"></i>
                            </div>
                            <p class="small deskripsi mb-0">Alumni UGM, pegawai part time di Mamikos.</p>
                            <img class="mx-auto my-2" src="{{URL::asset('/assets/pp1.png')}}" alt="profile Pic" width="100">
                            <div clas="loc">
                                <i class="tosca fa-solid fa-location-dot d-inline"></i>
                                <p class="font-weight-bold text-secondary d-inline">Malang, Jawa Timur</p>
                            </div>
                            <p class="small bidang font-weight-bold mb-1">Web Developer</p>
                        </div>
                        <div class="pesan input-group">
                            <input type="text" class="form-control soft-tosca-bg" style="font-size:12px;" placeholder="Kirim pesan.." aria-label="pesan" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn tosca-bg" type="button"><i class="fa-solid fa-paper-plane"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mrg">
                    <div class="card">
                        <i class="fa-regular fa-bookmark fa-lg pl-3 pt-4"></i>
                        <div class="padding-card p-3 text-center">
                            <p class="nama mb-0 font-weight-bold">Aditya Rais</p>
                            <div clas="star">
                                <i class="yellow fa-solid fa-star"></i>
                                <i class="yellow fa-solid fa-star"></i>
                                <i class="yellow fa-solid fa-star"></i>
                                <i class="yellow fa-solid fa-star"></i>
                                <i class="yellow fa-solid fa-star"></i>
                            </div>
                            <p class="small deskripsi mb-0">Alumni UGM, pegawai part time di Mamikos.</p>
                            <img class="mx-auto my-2" src="{{URL::asset('/assets/pp1.png')}}" alt="profile Pic" width="100">
                            <div clas="loc">
                                <i class="tosca fa-solid fa-location-dot d-inline"></i>
                                <p class="font-weight-bold text-secondary d-inline">Malang, Jawa Timur</p>
                            </div>
                            <p class="small bidang font-weight-bold mb-1">Web Developer</p>
                        </div>
                        <div class="pesan input-group">
                            <input type="text" class="form-control soft-tosca-bg" style="font-size:12px;" placeholder="Kirim pesan.." aria-label="pesan" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn tosca-bg" type="button"><i class="fa-solid fa-paper-plane"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <!-- TAB 2 -->
  <div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
    <div class="row row-cols-xxl-5 row-cols-xl-4 row-cols-md-3 row-cols-sm-2 row-cols-1">
        <div class="mrg">
            <div class="card">
                <i class="fa-regular fa-bookmark fa-lg pl-3 pt-4"></i>
                <div class="padding-card p-3 text-center">
                    <p class="nama mb-0 font-weight-bold">Aditya Rais</p>
                    <div clas="star">
                        <i class="yellow fa-solid fa-star"></i>
                        <i class="yellow fa-solid fa-star"></i>
                        <i class="yellow fa-solid fa-star"></i>
                        <i class="yellow fa-solid fa-star"></i>
                        <i class="yellow fa-solid fa-star"></i>
                    </div>
                    <p class="small deskripsi mb-0">Alumni UGM, pegawai part time di Mamikos.</p>
                    <img class="mx-auto my-2" src="{{URL::asset('/assets/pp1.png')}}" alt="profile Pic" width="100">
                    <div clas="loc">
                        <i class="tosca fa-solid fa-location-dot d-inline"></i>
                        <p class="font-weight-bold text-secondary d-inline">Malang, Jawa Timur</p>
                    </div>
                    <p class="small bidang font-weight-bold mb-1">Web Developer</p>
                    <button class="btn rounded tosca-bg text-light mt-2 px-5">Beri Penilaian</button>
                </div>
            </div>
        </div>
        <div class="mrg">
            <div class="card">
                <i class="fa-regular fa-bookmark fa-lg pl-3 pt-4"></i>
                <div class="padding-card p-3 text-center">
                    <p class="nama mb-0 font-weight-bold">Aditya Rais</p>
                    <div clas="star">
                        <i class="yellow fa-solid fa-star"></i>
                        <i class="yellow fa-solid fa-star"></i>
                        <i class="yellow fa-solid fa-star"></i>
                        <i class="yellow fa-solid fa-star"></i>
                        <i class="yellow fa-solid fa-star"></i>
                    </div>
                    <p class="small deskripsi mb-0">Alumni UGM, pegawai part time di Mamikos.</p>
                    <img class="mx-auto my-2" src="{{URL::asset('/assets/pp1.png')}}" alt="profile Pic" width="100">
                    <div clas="loc">
                        <i class="tosca fa-solid fa-location-dot d-inline"></i>
                        <p class="font-weight-bold text-secondary d-inline">Malang, Jawa Timur</p>
                    </div>
                    <p class="small bidang font-weight-bold mb-1">Web Developer</p>
                    <button class="btn rounded tosca-bg text-light mt-2 px-5">Beri Penilaian</button>
                </div>
            </div>
        </div>
        <div class="mrg">
            <div class="card">
                <i class="fa-regular fa-bookmark fa-lg pl-3 pt-4"></i>
                <div class="padding-card p-3 text-center">
                    <p class="nama mb-0 font-weight-bold">Aditya Rais</p>
                    <div clas="star">
                        <i class="yellow fa-solid fa-star"></i>
                        <i class="yellow fa-solid fa-star"></i>
                        <i class="yellow fa-solid fa-star"></i>
                        <i class="yellow fa-solid fa-star"></i>
                        <i class="yellow fa-solid fa-star"></i>
                    </div>
                    <p class="small deskripsi mb-0">Alumni UGM, pegawai part time di Mamikos.</p>
                    <img class="mx-auto my-2" src="{{URL::asset('/assets/pp1.png')}}" alt="profile Pic" width="100">
                    <div clas="loc">
                        <i class="tosca fa-solid fa-location-dot d-inline"></i>
                        <p class="font-weight-bold text-secondary d-inline">Malang, Jawa Timur</p>
                    </div>
                    <p class="small bidang font-weight-bold mb-1">Web Developer</p>
                    <button class="btn rounded tosca-bg text-light mt-2 px-5">Beri Penilaian</button>
                </div>
            </div>
        </div>
        <div class="mrg">
            <div class="card">
                <i class="fa-regular fa-bookmark fa-lg pl-3 pt-4"></i>
                <div class="padding-card p-3 text-center">
                    <p class="nama mb-0 font-weight-bold">Aditya Rais</p>
                    <div clas="star">
                        <i class="yellow fa-solid fa-star"></i>
                        <i class="yellow fa-solid fa-star"></i>
                        <i class="yellow fa-solid fa-star"></i>
                        <i class="yellow fa-solid fa-star"></i>
                        <i class="yellow fa-solid fa-star"></i>
                    </div>
                    <p class="small deskripsi mb-0">Alumni UGM, pegawai part time di Mamikos.</p>
                    <img class="mx-auto my-2" src="{{URL::asset('/assets/pp1.png')}}" alt="profile Pic" width="100">
                    <div clas="loc">
                        <i class="tosca fa-solid fa-location-dot d-inline"></i>
                        <p class="font-weight-bold text-secondary d-inline">Malang, Jawa Timur</p>
                    </div>
                    <p class="small bidang font-weight-bold mb-1">Web Developer</p>
                    <button class="btn rounded tosca-bg text-light mt-2 px-5">Beri Penilaian</button>
                </div>
            </div>
        </div>
        <div class="mrg">
            <div class="card">
                <i class="fa-regular fa-bookmark fa-lg pl-3 pt-4"></i>
                <div class="padding-card p-3 text-center">
                    <p class="nama mb-0 font-weight-bold">Aditya Rais</p>
                    <div clas="star">
                        <i class="yellow fa-solid fa-star"></i>
                        <i class="yellow fa-solid fa-star"></i>
                        <i class="yellow fa-solid fa-star"></i>
                        <i class="yellow fa-solid fa-star"></i>
                        <i class="yellow fa-solid fa-star"></i>
                    </div>
                    <p class="small deskripsi mb-0">Alumni UGM, pegawai part time di Mamikos.</p>
                    <img class="mx-auto my-2" src="{{URL::asset('/assets/pp1.png')}}" alt="profile Pic" width="100">
                    <div clas="loc">
                        <i class="tosca fa-solid fa-location-dot d-inline"></i>
                        <p class="font-weight-bold text-secondary d-inline">Malang, Jawa Timur</p>
                    </div>
                    <p class="small bidang font-weight-bold mb-1">Web Developer</p>
                    <button class="btn rounded tosca-bg text-light mt-2 px-5">Beri Penilaian</button>
                </div>
            </div>
        </div>
    </div>
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