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
    .ctnt1 button:active, .ctnt1 button:focus, .ctnt1 button:hover{
        background-color:#011612;
        color:#C5C9C8;
    } 
    .card .jadwal{
        color:#807A7A;
        background-color:#E4E4E4;
    }
    .card-container{
        font-family:'Be Vietnam Pro';
        font-size:13px;
    }
    .tolak{
        color:#FF002E;
        border:2px solid #FF002E;
        background-color:white;
    }
    .terima{
        color:#00BBA5;
        border:2px solid #00BBA5;
        background-color:white;
    }
    .calon-mentee .garis{
        border-top:1px solid #CCCCCC;
    }
    .pp button, .pp button:hover{
        background: rgba(76, 175, 80, 0.0);
        color:white;
        position: absolute;
        top: 80%;
        left: 63%;
        border: none;
        cursor: pointer;
        text-align: center;
    }
    .pp{
        position: relative;;
    }
    .card{
        margin-top:10%;
    }
    .rounded{
        object-fit:cover;
    }
    @media only screen and (max-width:575px) {
        .row-cols-1 .card{
            margin-right:20%;
            margin-left:20%;
        }
    }
</style>
<body>
<!-- TAB PANE -->
<ul class="nav justify-content-center mb-3 mt-5 text-center">
  <li class="nav-item col-6" role="presentation">
    <a
      class="nav-link active pdg"
      data-bs-toggle="tab"
      href="#ex1-tabs-1"
      >Calon Mentee</a>
  </li>
  <li class="nav-item col-6" role="presentation">
    <a
      class="nav-link pdg"
      data-bs-toggle="tab"
      href="#ex1-tabs-2"
      >Mentee Saya</a>
  </li>
</ul>
<!-- KONTEN TAB -->
<div class="tab-content mb-5" id="ex1-content">
  <!-- TAB 1 -->
    <div class="ctnt1 justify-content-center tab-pane active" id="ex1-tabs-1">
        <!-- CARD -->
        <div class="card-container">
            <div class="row row-cols-xxl-5 row-cols-xl-4 row-cols-md-3 row-cols-sm-2 row-cols-1">
                @forelse($calon_mentee as $calon_mentee)
                <?php $calon_mentee=(integer)$calon_mentee;?>
                <div class="mrg hideDiv">
                    <div class="card p-3 text-center">
                        <div class="bevietnam d-flex justify-content-between pt-2">
                            <button class="tolak rounded p-2 px-3 bevietnam hide-button" onclick="window.location='{{ url('reject/'.$calon_mentee); }}'">X Tolak</button>
                            <button class="terima rounded p-2 px-3 bevietnam hide-button" onclick="window.location='{{ url('acc/'.$calon_mentee); }}'">✔ Setujui</button>
                        </div>
                        <p class="text-center font-weight-bold text-lg mt-2 mb-0">{{$cards[$calon_mentee-1]->username}}</p>
                        <p class="text-secondary small text-center">{{$cards[$calon_mentee-1]->tentang}}</p>
                        <div class="pp" style="cursor: pointer;" onclick="window.location='{{ url('profile_mentee/'.$cards[$calon_mentee-1]->id.'/'.$id_user); }}'">
                            <img class="rounded" src="{{asset('storage/').'/'.$cards[$calon_mentee-1]->foto}}" height="150" width="60%" class="mx-auto mb-3">
                            <button><img src="{{URL::asset('/assets/arrow.png')}}" style="width:50%"/></button>
                        </div>
                        <div clas="loc">
                            <i class="tosca fa-solid fa-location-dot d-inline"></i>
                            <p class="font-weight-bold text-secondary d-inline">{{$cards[$calon_mentee-1]->tempat_tinggal}}</p>
                        </div>
                    </div>
                </div>
                @empty
                <div class="d-flex align-items-center justify-content-center" style="width:100%">
                    <p class="text-light mt-5">DATA BELUM TERSEDIA</p>
                </div>
                @endforelse
            </div>
        </div>
    </div>
  <!-- TAB 2 -->
    <div class="ctnt1 justify-content-center tab-pane fade" id="ex1-tabs-2">
        <div class="card-container">
            <div class="row row-cols-xxl-5 row-cols-xl-4 row-cols-md-3 row-cols-sm-2 row-cols-1">
                @forelse($mentee_saya as $mentee_saya)
                <?php $mentee_saya=(integer)$mentee_saya;?>
                <div class="mrg">
                    <div class="card p-3 text-center">
                        <p class="text-center font-weight-bold text-lg mt-2 mb-0">{{$cards[$mentee_saya-1]->username}}</p>
                        <p class="text-secondary small text-center">{{$cards[$mentee_saya-1]->tentang}}</p>
                        <div class="pp" style="cursor: pointer;" onclick="window.location='{{ url('profile_mentee/'.$cards[$mentee_saya-1]->id.'/'.$id_user); }}'">
                            <img class="rounded" src="storage/{{$cards[$mentee_saya-1]->foto}}" height="150" width="60%" class="mx-auto mb-3">
                            <button><img src="{{URL::asset('/assets/arrow.png')}}" style="width:50%"/></button>
                        </div>
                        <div clas="loc">
                            <i class="tosca fa-solid fa-location-dot d-inline"></i>
                            <p class="font-weight-bold text-secondary d-inline">{{$cards[$mentee_saya-1]->tempat_tinggal}}</p>
                        </div>
                        <button class="font-weight-bold tosca-bg text-light rounded-pill px-2 py-1 mt-2 mx-auto" style="width:50%">Kirim Pesan</button>
                    </div>
                </div>
                @empty
                <div class="d-flex align-items-center justify-content-center" style="width:100%">
                    <p class="text-light mt-5">DATA BELUM TERSEDIA</p>
                </div>
                @endforelse
            </div>
        </div>
    </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.hide-button').click(function() {
                $(this).closest('.hideDiv').hide();
            });
        });
    </script>

</script>
@endsection