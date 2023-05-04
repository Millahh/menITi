@extends('app')
@section('content')
<style>
    .container, body{
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
        background-color:#2C3D3A;
        border-top:1px solid #626766;
    }
    .judul{
        font-size:1.6vw;
    }
    .ket{
        font-size:1.2vw;
    }
    .tanggal{
        font-size:1.1vw;
    }
</style>
<body>
    <div class="judul mt-3 mx-2">
        <i class="fa-lg fa-solid fa-chevron-left"></i>
        <p class="d-inline-block ml-3 tosca">Pemberitahuan</p>
    </div>
    <div class="isi py-3 px-4">
        <p class="judul mb-0">Permohonan mentoringmu diterima!</p>
        <p class="ket tosca mb-1">Aditya Rais bersedia menjadi mentormu.</p>
        <p class="tanggal text-right">Date: 16-11-2022 Time: 09:00</p>
    </div>
</body>
<script>
</script>
@endsection