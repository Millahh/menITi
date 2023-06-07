@extends('base')
@section('content')
<style>
    *{
        /* border: 1px solid white; */
        font-family: 'Roboto Condensed';
    }
    .container{
        margin:0;
        padding:8%;
    }
    .fa-chevron-left{
        color:#00BBA5;
        margin-top:15%;
    }
    p{
        color:white;
        font-size: 20px;
    }
    .foto-nama .nama, .komen, .tanggal, .modal p, .modal option, .form-select, .modal button{
        font-family:'Be Vietnam Pro';
    }
    .title{
        font-weight:900;
        color:#00BBA5;
        margin-bottom:0;
        margin-top:2%;
    }
    .review{
        border: 1px solid #00BBA5;
    }
</style>
<body>
    <div class="judul">
        <i class="fa-lg fa-solid fa-chevron-left"></i>
    </div>
    <div class="foto-nama text-center">
        <img class="d-inline-block" src="storage/{{$mentor->foto}}">
        <p class="nama">{{$mentor->username}}</p>
    </div>
    <div class="review-rating mb-4">
        <p class="title mt-3">Review & Rating</p>
        <div class="rating">
            <p class="d-inline-block mb-0">4.5/5</p>
            <i class="yellow fa-solid fa-star"></i>
            <i class="yellow fa-solid fa-star"></i>
            <i class="yellow fa-solid fa-star"></i>
            <i class="yellow fa-solid fa-star"></i>
            <i class="yellow fa-solid fa-star"></i>
        </div>
        <div class="review p-3 my-2">
            <p class="mb-0" style="font-size:18px">Nur Aini</p>
            <div clas="star">
                <i class="yellow fa-solid fa-star"></i>
                <i class="yellow fa-solid fa-star"></i>
                <i class="yellow fa-solid fa-star"></i>
                <i class="yellow fa-solid fa-star"></i>
                <i class="yellow fa-solid fa-star"></i>
            </div>
            <p class="mb-0 komen small">Berwawasan luas, sabar dalam menyampaikan</p>
            <strong><p class="mb-0 tanggal small" style="color:#9D9D9D">01/11/22</p></strong>
        </div>    
        <div class="review p-3 my-2">
            <p class="mb-0" style="font-size:18px">Nur Aini</p>
            <div clas="star">
                <i class="yellow fa-solid fa-star"></i>
                <i class="yellow fa-solid fa-star"></i>
                <i class="yellow fa-solid fa-star"></i>
                <i class="yellow fa-solid fa-star"></i>
                <i class="yellow fa-solid fa-star"></i>
            </div>
            <p class="mb-0 komen small">Berwawasan luas, sabar dalam menyampaikan</p>
            <strong><p class="mb-0 tanggal small" style="color:#9D9D9D">01/11/22</p></strong>
        </div>  
    </div>
</div>
</body>
@endsection