@extends('app')
@section('content')

<style>
    .container{
        text-align:center;
        display:flex;
        justify-content:center;
        margin-top:3%;
        width:23rem;
    }
    .form-control{
        justify-content: center;
    }
    .form{
        width:100%;
        border:solid 1px rgba(255, 255, 255, .3);
        border-radius:5%;
        padding:5% 7%;
        margin-top:10%;
    }
    .btn{
        width:100%;
        color:white;
    }
    ::placeholder{
        color:#808A88;
    }
    .form-check{
        width:100%;
    }
    input[type="username"], input[type="password"]
    {
        background:rgba(0, 0, 0, 0);
        border-color:rgba(0, 187, 165, .5);
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
    }
</style>

<span class="align-middle">
    <img src="{{URL::asset('/assets/logo.png')}}" alt="profile Pic" height="80">
    <span style="color: #011612">ab</span>
    <a class="navbar-brand"><h1 class="font-weight-bold text-light">men<span class="tosca">IT</span>i</h1></a>
<div class="row text-light align-middle">
    <div class="form align-middle">
        <h4 class="font-weight-medium text-start">Login</h4>
        <h6 class="font-weight-light text-start">Halo, selamat datang kembali</h6>
        @if(session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
        @endif
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <form action="{{ route('login.checkrole') }}" method="POST">
            @csrf
            <div class="mt-3">
                <input class="form-control rounded-pill p-4" placeholder="Email" type="email" name="email" value="{{ old('email') }}" />
            </div>
            <div class="mt-3 mb-1">
                <input class="form-control rounded-pill p-4" placeholder="Password" type="password" name="password" />
            </div>
            <h6 class="font-weight-light text-start underline">Forgot password?</h6>
            <div class="mt-3 mb-1">
                <button class="btn rounded-pill tosca-bg">Login</button>
                <!-- <a class="btn btn-danger" href="{{ route('home') }}">Back</a> -->
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                <label class="form-check-label" for="inlineCheckbox1">Remember me</label>
            </div>
        </form>
    </div>
    <h6 class="font-weight-light text-start text-center mt-3">Don’t have an account? <a href={{url('user.login')}}><span class="tosca">Sign Up</span></a> for free</h6>
</div>
@endsection