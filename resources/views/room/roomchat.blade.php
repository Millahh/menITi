@extends('app')
@section('content')
<style>
    *{
        box-sizing: border-box;
        font-family: 'Roboto Condensed';
    }
    body{
        margin:0;
        padding:0;
    }
    .pdg, .typing-text{
        padding:0 5%;
    }
    .container{
        margin:0;
        padding:0;
        max-width:100%;
    }
    .fa-chevron-left, .fa-video{
        color:#00BBA5;
    }
    .judul p, .fa-chevron-left, .fa-video{
        font-size: 1.8vw; 
    }
    p{
        color:white;
        font-size: 1.5vw;
        font-family:'Be Vietnam Pro';
    }
    .judul{
        margin-top:1%;
    }
    .fa-lg{
        line-height:0;
    }
    .receive{
        background-color:#EFFFFD;
        border-radius: 1.5vw 1.5vw 1.5vw 0px;
    }
    .send{
        border-radius: 1.5vw 1.5vw 0 1.5vw;
    }
    .send, .receive{
        width:60%;
    }
    .chat .pesan{
        padding:2%;
        font-size:1.2vw;
    }
    .chat .jam{
        padding:1% 2%;
        font-size:1.1vw;
    }
    .txt{
        background-color:#011612;
    }
    .txt::placeholder{
        color:#00BBA5;
        font-family:'Be Vietnam Pro';
    }
    .input-send{
        width:4vw;
    }
    .btn img{
        height:3vw;
    }
    .typing-text input{
        font-size:1.2vw;
    }
    @media only screen and (max-width:900px) {
        .typing-text input{
            font-size:1.5vw;
        }
        .input-send{
            width:4.3vw;
        }
        .btn img{
            height:3.3vw;
        }
        .chat .pesan{
            padding:3%;
            font-size:1.5vw;
        }
        .chat .jam{
            padding:1% 3%;
            font-size:1.3vw;
        }
    }
    @media only screen and (max-width:600px) {
        .judul p{
            padding-left:3vw;
        }
        .judul p, .fa-chevron-left, .fa-video{
            font-size: 2.3vw; 
        }
        .typing-text input{
            font-size:2vw;
        }
        .input-send{
            width:5vw;
        }
        .btn img{
            height:4vw;
        }
        .chat .pesan{
            padding:3%;
            font-size:1.8vw;
        }
        .chat .jam{
            padding:1% 3%;
            font-size:1.5vw;
        }
    }
    @media only screen and (max-width:500px) {
        .judul p, .fa-chevron-left, .fa-video{
            font-size: 2.7vw; 
        }
        .typing-text input{
            font-size:2.7vw;
        }
        .input-send{
            width:6vw;
        }
        .btn img{
            height:5vw;
        }
        .chat .pesan{
            padding:3%;
            font-size:2vw;
        }
        .chat .jam{
            padding:1% 3%;
            font-size:1.9vw;
        }
    }
</style>
<body>
    <div class="pdg overflow-auto">
        <div class="judul mb-5 mt-4 row">
            <i class="fa-solid fa-chevron-left col-1 my-auto"></i>
            <div class="col-1 my-auto"><img src="{{URL::asset('/assets/pp1.png')}}" style="height:4vw"></div>
            <p class="m-0 pl-2 col-8 my-auto">Aditya Rais</p>
            <i class="fa-solid fa-video col-2 text-right my-auto"></i>
        </div>
        <div class="chat">
            <div class="send tosca-bg ml-auto mb-4">
                <p class="text-light pb-0 mb-0 pesan">Selamat siang kak, Saya Tono dari TIF 19. Sebelumnya terimakasih telah menyetujui permohonan mentoring dari saya. Izin konfirmasi, untuk kegiatan mentoring pertamanya dilaksanakan hari XX pukul XX ya kak?</p>
                <p class="text-right jam" style="color:#C2EBE6">13.45</p>
            </div>
            <div class="receive">
                <p class="tosca pb-0 mb-0 pesan">Iya betul, jangan lupa hadir ya.</p>
                <p class="jam" style="color:#B2AAAA">17.00</p>
            </div>
        </div>
    </div>
    <form action="/action_page.php" class="typing-text tosca-bg row p-2 fixed-bottom">
        <div class="btn col-1">
            <input type="file" class="form-control d-none" id="customFile1"/>
            <label class="form-label d-inline my-auto" for="customFile1"><img src="{{URL::asset('/assets/attachment.png')}}" class="my-auto"></label>
        </div>
        <input type="text" id="typing" name="typing" placeholder=" Ketik disini.." class="col-10 rounded-pill txt tosca my-auto p-3">
        <div class="col-1 d-inline my-auto">
            <input type="image" src="{{URL::asset('/assets/send-btn.png')}}" alt="Submit" class="input-send">
        </div>
        
    </form>
</body>
<script>
</script>
@endsection