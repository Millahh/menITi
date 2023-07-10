@extends('app')
@section('content')
<style>
    body{
        margin:0 auto;
        padding:5%;
    }
    .rounded-circle{
        object-fit:cover;
    }
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
    <p class="tosca pt-5 condensed">Favorit</p>
    <!-- CARD -->
    <div class="card-container">
            <div class="row row-cols-xxl-5 row-cols-xl-4 row-cols-md-3 row-cols-sm-2 row-cols-1">
                @forelse((array)$bookmark_mentee as $bm)
                <?php $bm=(integer)$bm;
                $bm-=1;?>
                <div class="mrg mb-3">
                    <div class="card">
                        <a onclick="changeIcon(this)">
                            <i class="fa-solid fa-bookmark fa-lg pl-3 pt-4" style="color: #00bba5;" onclick="window.location='{{ url('bookmark/'.$cards[$bm]->id); }}'"></i>
                            <script>
                                function changeIcon(anchor) {
                                    var icon = anchor.querySelector("i");
                                    icon.classList.toggle('fa-regular');
                                    icon.classList.toggle('fa-solid');
                                }
                            </script>
                        </a>
                        <div class="padding-card p-3 text-center">
                            <p class="nama mb-0 font-weight-bold">{{$cards[$bm]->username}}</p>
                            <div clas="star">
                                <i class="yellow fa-solid fa-star"></i>
                                <i class="yellow fa-solid fa-star"></i>
                                <i class="yellow fa-solid fa-star"></i>
                                <i class="yellow fa-solid fa-star"></i>
                                <i class="yellow fa-solid fa-star"></i>
                            </div>
                            <p class="small deskripsi mb-0">{{$cards[$bm]->tentang}}</p>
                            <img class="rounded-circle mx-auto my-2" src="storage/{{$cards[$bm]->foto}}" alt="profile Pic" height="100" width="100" style="cursor: pointer;" onclick="window.location='{{ url('profile_mentor/'.$cards[$bm]->id.'/'.$id_user); }}'">
                            <div clas="loc">
                                <i class="tosca fa-solid fa-location-dot d-inline"></i>
                                <p class="font-weight-bold text-secondary d-inline">{{$cards[$bm]->tempat_tinggal}}</p>
                            </div>
                            <p class="small font-weight-bold mb-1">{{$cards[$bm]->bidang}}</p>
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
<body>