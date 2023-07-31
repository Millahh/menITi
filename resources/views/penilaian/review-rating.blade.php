<meta name="csrf-token" content="{{ csrf_token() }}">
@extends('base')
@section('content')
<style>
    body{
        padding-right:20%;
    }
    .nama-profile img{
        object-fit:cover;
        width:6vw;
        height:6vw;
    }
    .judul p, .fa-chevron-left{
        font-size:2vw;
    }
    .nama-profile p{
        font-size:1.8vw;
        font-weight:900;
    }
    .rounded-circle{
        object-fit:cover;
    }
    .textarea-container {
        position: relative;
    }
    .textarea-container textarea {
        width: 100%;
        height: 12.5vw;
        box-sizing: border-box;
        background-color:#D9D9D9;
    }
    .textarea-container button {
        position: absolute;
        top: 0;
        right: 0;
        margin-top:11vw;
        margin-right:1vw;
    }
    .textarea-container textarea{
        margin-top:1vw;
    }
    .textarea-container textarea::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
        font-family: 'Be Vietnam Pro';
        opacity: 1; /* Firefox */
    }

    .textarea-container textarea:-ms-input-placeholder { /* Internet Explorer 10-11 */
        font-family: 'Be Vietnam Pro';
    }

    .textarea-container textarea::-ms-input-placeholder { /* Microsoft Edge */
        font-family: 'Be Vietnam Pro';
    }
    .rate,
    .rate:not(:checked) > input, 
    .rate:not(:checked) > label, 
    .rate:not(:checked) > label:before,
    .rate > input:checked ~ label,
    .rate:not(:checked) > label:hover,
    .rate:not(:checked) > label:hover ~ label,
    .rate > input:checked + label:hover,
    .rate > input:checked + label:hover ~ label,
    .rate > input:checked ~ label:hover,
    .rate > input:checked ~ label:hover ~ label,
    .rate > label:hover ~ input:checked ~ label {
        margin:0;
        padding:0;
    }
    .rate{
        float: left;
        height: 46px;
        padding: 0 10px;
        margin-right:10px;
        margin-bottom:1vw;
    }
    .rate:not(:checked) > input {
        position:absolute;
        top:-9999px;
        margin-right:10px;
    }
    .rate:not(:checked) > label {
        float:right;
        width:1em;
        overflow:hidden;
        white-space:nowrap;
        cursor:pointer;
        font-size:35px;
        color:#E0E0E0;
        margin-right:10px;
    }
    .rate:not(:checked) > label:before {
        content: '★';
        margin-right:10px;
    }
    .rate > input:checked ~ label,
    .rate:not(:checked) > label:hover,
    .rate:not(:checked) > label:hover ~ label,
    .rate > input:checked + label:hover,
    .rate > input:checked + label:hover ~ label,
    .rate > input:checked ~ label:hover,
    .rate > input:checked ~ label:hover ~ label,
    .rate > label:hover ~ input:checked ~ label {
        color: #FFD233;
        margin-right:10px;
    }
    @media only screen and (max-width:1200px) {
        .textarea-container button {
            top:-.5vw;
        }
    }
    @media only screen and (max-width:900px) {
        .textarea-container textarea {
            height:15vw;
        }
        .textarea-container button {
            top:1.3vw;
        }
    }
    @media only screen and (max-width:850px) {
        .judul p, .fa-chevron-left{
            font-size:2.5vw;
        }
        .nama-profile p{
            font-size:2.3vw;
        }
        .textarea-container textarea {
            height:19vw;
        }
        .textarea-container button {
            top:4.7vw;
        }
    }
    @media only screen and (max-width:750px) {
        .judul p, .fa-chevron-left{
            font-size:3vw;
        }
        .nama-profile p{
            font-size:2.8vw;
        }
        .textarea-container button {
            top:3vw;
        }
        .textarea-container textarea {
            height:18vw;
        }
        .nama-profile img{
            width:10vw;
            height:10vw;
        }
    }
    @media only screen and (max-width:600px) {
        .textarea-container button {
            top:3.5vw;
        }
        .textarea-container textarea{
            margin-top:0;
            height:21vw;
        }
        .nama-profile img{
            width:10vw;
            height:10vw;
        }
        .judul p, .fa-chevron-left{
            font-size:4vw;
        }
        .nama-profile p{
            font-size:4vw;
            font-weight:900;
        }
    }
    @media only screen and (max-width:500px) {
        .textarea-container textarea{
            margin-top:-2vw;
        }
        .textarea-container button {
            top:-0.5vw;
        }
    }
    @media only screen and (max-width:450px) {
        .textarea-container textarea{
            margin-top:-3vw;
            height:35vw;
        }
        .textarea-container button {
            top:15vw;
            right:2.5vw;
        }
        .rate{
            margin-bottom:4vw;
        }
        .nama-profile img{
            width:12vw;
            height:12vw;
        }
    }
</style>
<body>
    <form action="{{route('send-review-rating')}}" method="GET" enctype="multipart/form-data">
        @csrf
        <div class="judul mt-1" style="cursor:pointer;" onclick="window.location='{{ url('/beranda-mentee'); }}'">
            <i class="fa-lg fa-solid fa-chevron-left tosca"></i>
            <p class="d-inline-block ml-3 text-light condensed">Penilaian Mentor</p>
        </div>
        <div class="nama-profile mt-3">
            <img class="rounded-circle ml-2 d-inline-block" src="{{URL::asset('/storage/'.$mentor->foto)}}">
            <p class="d-inline-block tosca bevietnam align-middle my-0 p-0 ml-3">{{$mentor->username}}</p>
        </div>
        <div class="rate" id="rating" name="rating">
            <input type="radio" id="star5" name="rate" value="5"/>
            <label for="star5" title="text"></label>
            <input type="radio" id="star4" name="rate" value="4"/>
            <label for="star4" title="text"></label>
            <input type="radio" id="star3" name="rate" value="3"/>
            <label for="star3" title="text"></label>
            <input type="radio" id="star2" name="rate" value="2"/>
            <label for="star2" title="text"></label>
            <input type="radio" id="star1" name="rate" value="1"/>
            <label for="star1" title="text"></label>
        </div>
        <div class="textarea-container mt-5 ml-2" id="review" name="review">
            <textarea name="review" placeholder="Tulis komentarmu di sini.." class="rounded p-3"></textarea>
            <button type="submit" class="text-light tosca-bg rounded px-3 py-1">Kirim</button>
        </div>
    </form>
</body>
@endsection