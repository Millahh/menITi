@extends('base')
@section('content')
<style>
    .container{
        text-align:center;
        display:flex;
        justify-content:center;
        margin-top:2%;
    }
    .form-control{
        justify-content: center;
    }
    .form{
        width:100%;
        border:solid 1px rgba(255, 255, 255, .3);
        border-radius:5%;
        padding:5% 7%;
        margin-top:7%;
    }
    .btn{
        width:100%;
        color:white;
    }
    ::placeholder{
        color:#808A88;
    }
    input[type="username"], input[type="password"], input[type="email"], select option, .form-select
    {
        background:rgba(0, 0, 0, 0);
        border-color:rgba(0, 187, 165, .5);
        color:rgba(206, 212, 218, .6);
    }
    .par{
        margin-bottom:4%;
    }
    .modal-body p{
        margin-bottom:1px;
    }
    .setuju{
        width:20%;
        float:right;
    }
    form .btn:hover, form .btn:active, form .btn:focus, .modal .btn:hover, .modal .btn:active, .modal .btn:focus{
        background-color:#077F70;
        color:white;
    }
    @media only screen and (max-width: 576px) {
        .form {
            width:90%;
            margin:auto;
            margin-top:5%;
        }
        .form-select option{
            font-size:10px;
        }
        .setuju{
            width:30%;
            float:right;
        }
    }
    @media only screen and (min-width: 1000px) {
        .lebar {
            width:30%;
        }
    }
</style>

<span class="align-middle lebar">
    <img src="{{URL::asset('/assets/logo.png')}}" alt="profile Pic" height="80">
    <span style="color: #011612">ab</span>
    <a class="navbar-brand"><h1 class="font-weight-bold text-light">men<span class="tosca">IT</span>i</h1></a>
<div class="row text-light align-middle">
    <div class="form align-middle">
        <h4 class="font-weight-medium text-start">Sign Up</h4>
        <h6 class="font-weight-light text-start">Halo, mari memulai perjalanan di menITi</h6>
        @if(session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
        @endif
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <form action="{{ route('register.checkrole') }}" method="POST">
            @csrf
            <div class="mt-3">
                <select class="font-weight-light form-select rounded-pill p-3" aria-label="Default select example" id="role" name="role">
                    <option selected style="color:black">Bergabung Sebagai</option>
                    <option value="0" style="color:black">Mentor</option>
                    <option value="1" style="color:black">Mentee</option>
                </select>
            </div>
            <div class="mt-3">
                <input class="form-control rounded-pill p-4" placeholder="Email" id="email" name="email" />
            </div>
            <div class="mt-3">
                <input class="form-control rounded-pill p-4" placeholder="Password Baru" type="password" id="password" name="password" />
            </div>
            <div class="mt-3">
                <input class="form-control rounded-pill p-4" placeholder="Konfirmasi Password" type="password" id="password-confirm" name="password_confirmation" />
            </div>
            <div class="mt-3">
                <button type="button" class="btn rounded-pill tosca-bg" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Sign Up</button>
            </div>
            <h6 class="font-weight-light text-start text-center mt-3">Already have an account? <a href={{url('login')}}><span class="tosca">Sign In</span></a> here</h6>
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body black text-left mx-3">
                            <h4 class="font-weight-bold mb-3 mt-3">Pedoman & Komitmen</h4>
                            <p class="font-weight-bold">menITi<p>
                            <p class="par">Platform yang membantu mempertemukan mentor dengan mentee dalam rangka kegiatan pendampingan pada bidang tertentu dengan jangka waktu yang tidak  bergantung pada program tertentu.</p>
                            <p class="font-weight-bold">Mentee</p>
                            <p class="par">Pengguna yang berperan sebagai murid. <br>
                            1. Menghadiri jadwal meet/pertemuan terjadwal yang telah disepakati<br>
                            2. Memberi review dan rating dengan jujur<br>
                            3. Memberi donasi untuk mentor (opsional)</p>
                            <p class="font-weight-bold">Mentor</p>
                            <p class="mb-3">Pengguna yang berperan sebagai guru.<br>
                            1. Mengisi skill dan pengalaman dengan jujur<br>
                            2. Menghadiri jadwal meet/pertemuan terjadwal yang telah disepakati<br>
                            3. Memberikan tips/saran/wawasan yang relevan dengan bidang yang dikuasai</p>
                            <button type="submit" class="btn rounded tosca-bg text-light setuju">Setuju</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
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