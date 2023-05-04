@extends('app')
@section('content')
<style>
    body{
        padding: 2%;
        overflow-y: scroll;
    }
</style>
<body>
    <div class="container">
        <!-- NOTIF DAN PROFILE -->
        <div class="d-flex fixed-top px-5 pt-4">
        <div class="mr-auto p-1"><img src="{{URL::asset('/assets/notif.png')}}" style="height:25px"></div>
        <div class="p-1"><img src="{{URL::asset('/assets/pp1.png')}}" style="height:50px"></div>
        </div> 
        @yield('content')
        <!-- BOTTOM NAVBAR -->
        <nav class="tosca-bg fixed-bottom py-1">
            <div class="text-center row">
            <a class="col nav-item nav-link active logo" href="#"><img src="{{URL::asset('/assets/nav-logo.png')}}" style="height:22px"><span class="sr-only">(current)</span></a>
            <a class="col nav-item nav-link" href="#"><img src="{{URL::asset('/assets/nav-chat.png')}}" style="height:22px"></a>
            <a class="col nav-item nav-link" href="#"><img src="{{URL::asset('/assets/nav-calendar.png')}}" style="height:22px"></a>
            <a class="col nav-item nav-link" href="#"><img src="{{URL::asset('/assets/nav-bookmark.png')}}" style="height:22px"></a>
            </div>
        </nav>
    </div>
<body>
@endsection