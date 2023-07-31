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
<ul class="nav justify-content-center mb-3 mt-5 text-center">
  <li class="nav-item col-6" role="presentation">
    <a
      class="nav-link active pdg"
      data-bs-toggle="tab"
      href="#ex1-tabs-1"
      >Pengingat</a>
  </li>
  <li class="nav-item col-6" role="presentation">
    <a
      class="nav-link pdg"
      data-bs-toggle="tab"
      href="#ex1-tabs-2"
      >Riwayat</a>
  </li>
</ul>
<?php 
    $tgl = "06-08-2023";
    $loop = 8;
    $start = 0;
    $nama = null;
    if((auth()->user()->role==0)){
        $mentee=DB::table('biodata_mentor')->where('user_id', auth()->user()->id)->first()->mentee;
        if($mentee=!null){
            $nama=DB::table('biodata_mentor')->where('user_id', auth()->user()->id)->first()->mentee;
            $nama=DB::table('biodata_mentee')->where('id', $nama[2])->first()->username;
        }else{
            $nama = "Munirotul Millah";
        }
    }else{
        $mentor=DB::table('biodata_mentee')->where('user_id', auth()->user()->id)->first()->mentor;
        if($mentor=!null){
            $nama=DB::table('biodata_mentee')->where('user_id', auth()->user()->id)->first()->mentor;
            $nama=DB::table('biodata_mentor')->where('id', $nama[2])->first()->username;
        }else{
            $nama = "Munirotul Millah";
        }  
    }
    for($i=0; $i<8; $i++){
        if(strtotime("now") > strtotime($tgl) ){
            $start+=1;
        }
        $tgl = date('d-m-Y', strtotime('+7 days', strtotime($tgl)));
    }
    $tgl = "06-08-2023";
?>
<!-- KONTEN TAB -->
<div class="tab-content mb-5">
  <!-- TAB 1 -->
    <div class="ctnt1 justify-content-center tab-pane show active" id="ex1-tabs-1">
        <!-- JADWAL -->
        @for($i=$start; $i<$loop; $i++)
            <div class="jadwal tosca-bg p-3 m-3">
                <p class="text-light mb-0">Mentoring {{$i+1}} {{$nama}}</p>
                <p class="text-lg mb-0">{{$tgl}}</p>
                <?php $tgl = date('d-m-Y', strtotime('+7 days', strtotime($tgl)));?>
                <div class="clock">
                    <i class="fa-solid fa-clock d-inline-block align-middle"></i>
                    <p class="d-inline-block small mb-0">09.00 WIB</p>
                </div>
            </div>
        @endfor
        <hr>
    </div>
  <!-- TAB 2 -->
  <?php 
    $tgl = "08-07-2023";
    $loop = $start;
  ?>
    <div class="tab-pane fade" id="ex1-tabs-2">
        <!-- RIWAYAT -->
        @for($i=0; $i<$loop; $i++)
        <div class="jadwal tosca-bg p-3 m-3">
            <p class="text-light mb-0">Mentoring {{$i+1}} {{$nama}}</p>
            <p class="text-lg mb-0">{{$tgl}}</p>
            <?php $tgl = date('d-m-Y', strtotime('+7 days', strtotime($tgl)));?>
            <div class="clock">
                <i class="fa-solid fa-clock d-inline-block align-middle"></i>
                <p class="d-inline-block small mb-0">09.00 WIB</p>
            </div>
        </div>
        @endfor
        @if($loop==0)
        <div class="parent d-flex align-items-center" style="min-height:300px">
            <p class="text-light mx-auto">Kamu belum melakukan mentoring</p>
        </div>
        @endif
    </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@endsection