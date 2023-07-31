@extends('base')
@section('content')
<style>
    body, .container{
        padding:0;
    }
    .fa-chevron-left{
        color:#00BBA5;
        margin-top:5%;
        font-size: 2vw;
    }
    p{
        color:white;
        font-family: 'Roboto Condensed';
        font-size: 2vw;
    }
    hr{
        color:#878080;
    }
    .isi p{
        font-family:'Be Vietnam Pro';
    }
    .tanggal{
        color:#D9D9D9;
    }
    .isi{
        margin:0% 10%;
        background-color:#2C3D3A;
        border-top:1px solid #626766;
    }
    .judul{
        font-size:1.4vw;
    }
    .ket{
        font-size:1.2vw;
    }
    .tanggal{
        font-size:1.1vw;
    }
    @media only screen and (max-width:600px) {
        .fa-chevron-left{
            padding-left:5%;
        }
        .judul{
            font-size:4vw;
            margin-top:3%;
        }
        .ket{
            font-size:3vw;
        }
        .tanggal{
            font-size:2.5vw;
        }
        .judul p, .judul i{
            font-size:4vw;
        }
    }
</style>
<body>
    @if(auth()->user()->role == 1)
    <div class="judul mb-2" style="cursor:pointer;" onclick="window.location='{{ url('/beranda-mentee'); }}'">
        <i class="fa-lg fa-solid fa-chevron-left"></i>
        <p class="d-inline-block ml-3 tosca">Pemberitahuan</p>
    </div>
    @else
    <div class="judul mb-2" style="cursor:pointer;" onclick="window.location='{{ url('/beranda-mentor'); }}'">
        <i class="fa-lg fa-solid fa-chevron-left"></i>
        <p class="d-inline-block ml-3 tosca">Pemberitahuan</p>
    </div>
    @endif
    <?php 
        $i=null;
        $i = (array)$i;
     ?>
    @forelse((array)$pemberitahuan as $p)
    <?php
        $temp = explode('|', $p);
        //dd($p);
        $p_new = $temp[0]."|".$temp[1]."|".$temp[2];
        array_push($i, $p_new);
        if($role == 1)
        {
            DB::table('biodata_mentee')->where('id', $id_user[0])->update(['pemberitahuan'=>$i]);
        }else{
            DB::table('biodata_mentor')->where('id', $id_user[0])->update(['pemberitahuan'=>$i]);
        }
    ?>
    <div class="isi py-3 px-4 my-auto">
        <p class="judul mb-0">{{$temp[0]}}</p>
        <p class="ket tosca mb-1">{{$temp[1]}}</p>
        <p class="tanggal text-right mb-1 mt-3">{{$temp[2]}}</p>
    </div>
    @empty
    <div class="d-flex align-items-center justify-content-center" style="width:100%">
        <p class="text-light mt-5">BELUM ADA PEMBERITAHUAN</p>
    </div>
    @endforelse

</body>
<script>
</script>
@endsection