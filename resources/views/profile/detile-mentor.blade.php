@extends('base')
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
        object-fit:cover;
    }
    .title{
        font-weight:900;
        color:#00BBA5;
        margin-bottom:0;
        margin-top:.3%;
    }
    .pekerjaan, .instansi, .telepon, .jadwal, .cv, .foto-nama, .review-rating{
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
        <p class="d-inline-block ml-3">Profil mentor</p>
    </div>
    <div class="content">
        <div class="foto-nama text-center">
            <img class="rounded-circle d-inline" src="{{asset('storage/'. $mentor->foto)}}" width="120" height="120">
            <p class="nama pt-2">{{$mentor->username}}</p>
        </div>
        <hr>
        <div class="pekerjaan">
            <p class="title">Pekerjaan</p>
            <p>
                @if($mentor->pekerjaan == 1)
                    Mobile Developer 
                @elseif($mentor->pekerjaan == 2)
                    Web Developer
                @elseif($mentor->pekerjaan == 3)
                    Cloud Computing Engineer
                @elseif($mentor->pekerjaan == 4)
                    UI/UX Designer
                @elseif($mentor->pekerjaan == 5)
                    IT Manager
                @elseif($mentor->pekerjaan == 6)
                    Quality Assurance
                @elseif($mentor->pekerjaan == 7)
                    Data Science
                @elseif($mentor->pekerjaan == 8)
                    IT Analyst
                @elseif($mentor->pekerjaan == 9)
                    UI/UX Research
                @else
                    Business Analyst
                @endif  
            </p>
        </div>
        <div class="instansi">
            <p class="title">Instansi</p>
            <p>{{$mentor->instansi}}</p>
        </div>
        <div class="telepon">
            <p class="title">Nomor Telepon</p>
            <p>{{$mentor->telepon}}</p>        
        </div>
        <div class="jadwal">
            <p class="title">Jadwal Tersedia</p>
            <p class="mb-0">
            @switch($mentor->jadwal[0])
                @case(1)
                    Senin,
                    @break
                @case(2)
                    Selasa,
                    @break
                @case(3)
                    Rabu,
                    @break
                @case(4)
                    Kamis,
                    @break 
                @case(5)
                    Jumat,
                    @break
                @case(6)
                    Sabtu,
                    @break 
                @default
                    Minggu,
            @endswitch
            Pukul {{$mentor->jadwal[1]}} WIB
            </p>
        </div>
        <div class="cv">
            <p class="title text-left">Preview CV</p>   
            <img class="d-inline mb-3" src="{{asset('storage/'.$mentor->portofolio)}}"> 
            <div class="d-flex align-items-center mb-3"> 
                <img src="{{URL::asset('/assets/pdf.png')}}" style="width:1.2vw">  
                <a class="text-light underline ml-2" href="{{ asset('storage/'. $mentor->portofolio) }}" download>Unduh CV</a> 
            </div>
        </div>
        <div class="review-rating mb-4">
            <p class="title">Review & Rating</p>
            <div class="rating">
                <p class="d-inline-block mb-0">4.5/5</p>
                <i class="yellow fa-solid fa-star"></i>
                <i class="yellow fa-solid fa-star"></i>
                <i class="yellow fa-solid fa-star"></i>
                <i class="yellow fa-solid fa-star"></i>
                <i class="yellow fa-solid fa-star"></i>
            </div>
            <div class="review px-3 py-2 my-2">
                <p class="mb-0">Nur Aini</p>
                <div clas="star">
                    <i class="yellow fa-solid fa-star"></i>
                    <i class="yellow fa-solid fa-star"></i>
                    <i class="yellow fa-solid fa-star"></i>
                    <i class="yellow fa-solid fa-star"></i>
                    <i class="yellow fa-solid fa-star"></i>
                </div>
                <p class="mb-0 komen">Berwawasan luas, sabar dalam menyampaikan</p>
                <strong><p class="mb-0 tanggal small" style="color:#9D9D9D">01/11/22</p></strong>
            </div>    
            <div class="review px-3 py-2 my-2">
                <p class="mb-0">Nur Aini</p>
                <div clas="star">
                    <i class="yellow fa-solid fa-star"></i>
                    <i class="yellow fa-solid fa-star"></i>
                    <i class="yellow fa-solid fa-star"></i>
                    <i class="yellow fa-solid fa-star"></i>
                    <i class="yellow fa-solid fa-star"></i>
                </div>
                <p class="mb-0 komen">Berwawasan luas, sabar dalam menyampaikan</p>
                <strong><p class="mb-0 tanggal small" style="color:#9D9D9D">01/11/22</p></strong>
            </div>  
            <a class="text-light underline" href="https://www.w3schools.com">Tampilkan semuanya</a> 
            <p class="small m-0" style="color:#011612">space</p>
        </div>
        <a href="{{url('send-req/'.$mentor->id.'/'.$id_user);}}"><button type="button" class="btn rounded tosca-bg mb-4" data-bs-toggle="modal" data-bs-target="#exampleModal">Kirim permintaan mentoring</button></a>
        <!-- Modal -->
        <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header d-flex justify-content-center">
                        <p class="m-0">Pilih Jadwal</p>
                    </div>
                    <select class="form-select mt-4" aria-label=".form-select-lg example">
                        <option value="1">Opsi 1: Selasa, Pukul 12.00 WIB</option>
                        <option value="2">Opsi 2: Jumat, Pukul 19.00 WIB</option>
                    </select>
                <div class="modal-body black text-left px-0">
                    <button class="btn rounded tosca-bg text-light setuju">OK</button>
                </div>
            </div>
        </div> -->
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