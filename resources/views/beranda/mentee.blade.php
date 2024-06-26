@extends('app')
@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
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
    .nav:focus, .nav a:focus, .nav a:hover, .nav-item .active{
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
        cursor: pointer;
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
    .rounded-circle{
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
  <li class="nav-item active col-6" role="presentation">
    <a
      class="nav-link active pdg"
      data-bs-toggle="tab"
      href="#ex1-tabs-1"
      >Rekomendasi</a>
  </li>
  <li class="nav-item col-6" role="presentation">
    <a
      class="nav-link pdg"
      data-bs-toggle="tab"
      href="#ex1-tabs-2"
      >Mentor Saya</a>
  </li>
</ul>
<!-- KONTEN TAB -->
<div class="tab-content mb-5">
  <!-- TAB 1 -->
    <div class="ctnt1 justify-content-center tab-pane active" id="ex1-tabs-1">
        <form action="{{route('search-beranda')}}" method="get">
            <input class="src rounded p-2" name="search" id="myInput" type="text" placeholder="&#xF002; Search.." style="font-family:Arial, FontAwesome"/>
            <button type="submit" class="invisible" id="myBtn" onclick="window.location='{{ url('search-beranda'); }}'"></button>
        </form>

        <!-- CARD -->
        <div class="card-container">
            <div class="row row-cols-xxl-5 row-cols-xl-4 row-cols-md-3 row-cols-sm-2 row-cols-1">
                @forelse($cards as $card)
                <div class="mrg">
                    <div class="card">
                        <a onclick="changeIcon(this)">
                            <?php 
                                $bool = false;
                                $loop = count((array)$bookmark_mentee);
                                for ($i = 0; $i <$loop; $i++) {
                                    if($card->id == (integer)$bookmark_mentee[$i]){
                                        $bool = true;
                                    }
                                }
                                //dd(gettype($card->id));
                            ?>
                            @if($bool)
                                <i class="fa-solid fa-bookmark fa-lg pl-3 pt-4" style="color: #00bba5;" onclick="window.location='{{ url('bookmark/'.$card->id); }}'"></i>
                            @else
                                <i class="fa-regular fa-bookmark fa-lg pl-3 pt-4" style="color: #00bba5;" onclick="window.location='{{ url('bookmark/'.$card->id); }}'"></i>
                            @endif
                            <script>
                                function changeIcon(anchor) {
                                    var icon = anchor.querySelector("i");
                                    icon.classList.toggle('fa-regular');
                                    icon.classList.toggle('fa-solid');
                                }
                            </script>
                        </a>
                        <div class="padding-card p-3 text-center">
                            <p class="nama mb-0 font-weight-bold">{{$card->username}}</p>
                            <div clas="star">
                                <i class="yellow fa-solid fa-star"></i>
                                <i class="yellow fa-solid fa-star"></i>
                                <i class="yellow fa-solid fa-star"></i>
                                <i class="yellow fa-solid fa-star"></i>
                                <i class="yellow fa-solid fa-star"></i>
                            </div>
                            <p class="small deskripsi mb-0">{{$card->tentang}}</p>
                            <img class="rounded-circle mx-auto my-2" src="{{asset('storage/').'/'.$card->foto}}" alt="profile Pic" height="100" width="100" style="cursor: pointer;" onclick="window.location='{{ url('profile_mentor/'.$card->id.'/'.$id_user); }}'">
                            <div clas="loc">
                                <i class="tosca fa-solid fa-location-dot d-inline"></i>
                                <p class="font-weight-bold text-secondary d-inline">{{$card->tempat_tinggal}}</p>
                            </div>
                            <p class="small font-weight-bold mb-1">{{$card->bidang}}</p>
                        </div>
                        <div class="pesan input-group">
                            <input type="text" class="form-control soft-tosca-bg" style="font-size:12px;" placeholder="Kirim pesan.." aria-label="pesan" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn tosca-bg" type="button" onclick="window.location='{{ url('chatify/'.$card->user_id); }}'"><i class="fa-solid fa-paper-plane" onclick="window.location='{{ url('chatify'); }}'"></i></button>
                            </div>
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
    <div class="tab-pane fade" id="ex1-tabs-2">
        <div class="row row-cols-xxl-5 row-cols-xl-4 row-cols-md-3 row-cols-sm-2 row-cols-1">
            @forelse((array)$selected_mentor as $sm)
            <?php $sm=(integer)$sm;
            $sm-=1;?>
            <div class="mrg" style="cursor: pointer;">
                <div class="card">
                    <a onclick="changeIcon(this)">
                        <i class="fa-regular fa-bookmark fa-lg pl-3 pt-4" style="color: #00bba5; display:none;"></i>
                    </a>
                    <div class="padding-card p-3 text-center">
                        <p class="nama mb-0 font-weight-bold">{{$cards2[$sm]->username}}</p>
                        <div clas="star">
                            <i class="yellow fa-solid fa-star"></i>
                            <i class="yellow fa-solid fa-star"></i>
                            <i class="yellow fa-solid fa-star"></i>
                            <i class="yellow fa-solid fa-star"></i>
                            <i class="yellow fa-solid fa-star"></i>
                        </div>
                        <p class="small deskripsi mb-0">{{$cards2[$sm]->tentang}}</p>
                        <img class="rounded-circle mx-auto my-2" src="storage/{{$cards2[$sm]->foto}}" alt="profile Pic" height="100" width="100" onclick="window.location='{{ url('profile_mentor/'.$cards2[$sm]->id.'/'.$id_user); }}'">
                        <div clas="loc">
                            <i class="tosca fa-solid fa-location-dot d-inline"></i>
                            <p class="font-weight-bold text-secondary d-inline">{{$cards2[$sm]->tempat_tinggal}}</p>
                        </div>
                        <p class="small font-weight-bold mb-1">{{$cards2[$sm]->bidang}}</p>   
                        <button class="btn rounded tosca-bg text-light mt-2 px-5" onclick="window.location='{{ url('/review-rating/'.$cards2[$sm]->id.'/'.$id_user[0]); }}'">Beri Penilaian</button>
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
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
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
    var input = document.getElementById("myInput");
    input.addEventListener("keypress", function(event) {
    if (event.key === "Enter") {
        event.preventDefault();
        document.getElementById("myBtn").click();
    }
    });
</script>
@endsection