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
  <li class="nav-item col-6" role="presentation">
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
    <div class="ctnt1 justify-content-center tab-pane show active" id="ex1-tabs-1">
        <form action="{{route('search')}}" method="get">
            <input class="src rounded p-2" name="search" id="myInput" type="text" placeholder="&#xF002; Search.." style="font-family:Arial, FontAwesome"/>
            <button type="submit" class="invisible" id="myBtn" onclick="window.location='{{ url('search'); }}'"></button>
        </form>

        <!-- CARD -->
        <div class="card-container">
            <div class="row row-cols-xxl-5 row-cols-xl-4 row-cols-md-3 row-cols-sm-2 row-cols-1">
                @forelse($cards as $card)
                <div class="mrg" style="cursor: pointer;" onclick="window.location='{{ url('profile_mentor/'.$card->id.'/'.$id_user); }}'">
                    <div class="card">
                        <i class="fa-regular fa-bookmark fa-lg pl-3 pt-4"></i>
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
                            <img class="rounded-circle mx-auto my-2" src="storage/{{$card->foto}}" alt="profile Pic" height="100" width="100">
                            <div clas="loc">
                                <i class="tosca fa-solid fa-location-dot d-inline"></i>
                                <p class="font-weight-bold text-secondary d-inline">{{$card->tempat_tinggal}}</p>
                            </div>
                            <p class="small bidang font-weight-bold mb-1">
                                @if($card->bidang == 1)
                                   Mobile Developer 
                                @elseif($card->bidang == 2)
                                    Web Developer
                                @elseif($card->bidang == 3)
                                    Cloud Computing Engineer
                                @elseif($card->bidang == 4)
                                    UI/UX Designer
                                @elseif($card->bidang == 5)
                                    IT Manager
                                @elseif($card->bidang == 6)
                                    Quality Assurance
                                @elseif($card->bidang == 7)
                                    Data Science
                                @elseif($card->bidang == 8)
                                    IT Analyst
                                @elseif($card->bidang == 9)
                                    UI/UX Research
                                @else
                                    Business Analyst
                                @endif    
                            </p>
                        </div>
                        <div class="pesan input-group">
                            <input type="text" class="form-control soft-tosca-bg" style="font-size:12px;" placeholder="Kirim pesan.." aria-label="pesan" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn tosca-bg" type="button"><i class="fa-solid fa-paper-plane"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <p>DATA BELUM TERSEDIA</p>
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
                    <i class="fa-regular fa-bookmark fa-lg pl-3 pt-4"></i>
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
                        <p class="small bidang font-weight-bold mb-1">
                            @if($cards2[$sm]->bidang == 1)
                                   Mobile Developer 
                                @elseif($cards2[$sm]->bidang == 2)
                                    Web Developer
                                @elseif($cards2[$sm]->bidang == 3)
                                    Cloud Computing Engineer
                                @elseif($cards2[$sm]->bidang == 4)
                                    UI/UX Designer
                                @elseif($cards2[$sm]->bidang == 5)
                                    IT Manager
                                @elseif($cards2[$sm]->bidang == 6)
                                    Quality Assurance
                                @elseif($cards2[$sm]->bidang == 7)
                                    Data Science
                                @elseif($cards2[$sm]->bidang == 8)
                                    IT Analyst
                                @elseif($cards2[$sm]->bidang == 9)
                                    UI/UX Research
                                @else
                                    Business Analyst
                                @endif 
                        </p>   
                        <button class="btn rounded tosca-bg text-light mt-2 px-5" onclick="window.location='{{ url('/review-rating/'.$cards2[$sm]->id.'/'.$id_user[0]); }}'">Beri Penilaian</button>
                    </div>
                </div>
            </div>
            @empty
            <p>DATA BELUM TERSEDIA</p>
            @endforelse
        </div>
    </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
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