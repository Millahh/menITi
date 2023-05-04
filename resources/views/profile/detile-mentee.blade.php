@extends('app')
@section('content')
<style>
    *{
        /* border: 1px solid white; */
        font-family: 'Roboto Condensed';
    }
    .container{
        margin:0 auto;
        padding:0% 0%;
    }
    .content{
        margin:0 auto;
        padding:2% 30%;
    }
    .fa-chevron-left{
        color:#00BBA5;
    }
    hr{
        margin-bottom:0;
        margin-top:.3vw;
    }
    p{
        color:white;
        margin-bottom:.8%;
    }
    p, .fa-chevron-left{
        font-size:1.1vw;
    }
    .review p, .review-rating a{
        font-size:1.2vw;
    }
    .review .komen, .form-select, .review .tanggal{
        font-size:1vw;
    }
    .foto-nama .nama, .komen, .tanggal, .modal p, .modal option, .form-select, .modal button{
        font-family:'Be Vietnam Pro';
    }
    .foto-nama img{
        width:15%;
    }
    .title{
        font-weight:900;
        color:#00BBA5;
        margin-bottom:0;
        margin-top:.3%;
    }
    .pekerjaan, .instansi, .telepon, .jadwal{
        border-bottom: 1px solid #444B49;
    }
    .foto-nama{
        border-bottom: 1px solid #878080;;
    }
    .review{
        border: 1px solid #00BBA5;
    }
    button{
        width:100%;
    }
    .cv img{
        width:70%;
    }
    .setuju{
        width:20%;
        float:right;
    }
    .modal-content{
        border-top:1px solid #B2AFAF;
        padding:0 5%;
    }
    .modal-content p, .form-select option, .form-select{
        color:#807A7A;
    }
    .form-select{
        background-color:#E4E4E4;
        border:1px solid #B2AFAF;
    }
    .cv a, .btn{
        font-size:1vw;
    }
    @media only screen and (max-width:950px) {
        .fa-star{
            font-size:0.8em;
        }
        .content{
            margin:0 auto;
            padding:2% 20%;
        }
        p, .fa-chevron-left, .btn{
            font-size:2.5vw;
        }
        .review p, .review-rating a{
            font-size:2.2vw;
        }
        .review .komen{
            font-size:1.7vw;
        }
        .cv a{
            font-size:2vw;
        }
        .cv img{
            width:100%;
        }
    }
    @media only screen and (max-width:600px) {
        .fa-star{
            font-size:0.8em;
        }
        p, .fa-chevron-left, .btn{
            font-size:2.8vw;
        }
        .review p, .review-rating a{
            font-size:2.5vw;
        }
        .review .komen{
            font-size:2vw;
        }
        .cv a{
            font-size:2.3vw;
        }
        .cv img{
            width:100%;
        }
    }
    @media only screen and (max-width:450px) {
        .fa-star{
            font-size:0.6em;
        }
    }
</style>
<body>
    <div class="judul">
        <i class="fa-lg fa-solid fa-chevron-left"></i>
        <p class="d-inline-block ml-3">Profil mentee</p>
    </div>
    <div class="content">
        <div class="foto-nama text-center">
            <img class="d-inline" src="{{URL::asset('/assets/pp1.png')}}">
            <p class="nama pt-2">Hendra Aji</p>
        </div>
        <hr>
        <div class="pekerjaan">
            <p class="title">Tempat Tinggal</p>
            <p>Sidoarjo, Jawa Timur</p>
        </div>
        <div class="instansi">
            <p class="title">Pekerjaan</p>
            <p>Mahasiswa</p>
        </div>
        <div class="telepon">
            <p class="title">Instansi</p>
            <p>Universitas Brawijaya</p>        
        </div>
        <div class="jadwal">
            <p class="title">Nomor Telepon</p>
            <p>0882600812</p>        
        </div>
        <div class="cv">
            <p class="title text-left">Preview CV</p>   
            <img class="d-inline mb-3" src="{{URL::asset('/assets/cv.png')}}"> 
            <div class="d-flex align-items-center"> 
                <img src="{{URL::asset('/assets/pdf.png')}}" style="width:1.2vw">  
                <a class="text-light underline ml-2" href="https://www.w3schools.com">Unduh CV</a> 
            </div>
        </div>
    </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script>
const myModal = document.getElementById('myModal')
const myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', () => {
  myInput.focus()
})
</script>
@endsection