@extends('app')
@section('content')
<style>
    .fa-bookmark{
        color:#00BBA5;
    }
    .fa-paper-plane{
        color:white;
    }
    .card-container{
        font-family:'Be Vietnam Pro';
        font-size:13px;
    }
</style>
<body>
    <p class="tosca pt-5">Favorit</p>
    <!-- CARD -->
    <div class="card-container row">
        <div class="row1 col-sm-6 col-6">
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
        <div class="row1 col-sm-6 col-6">
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
<body>