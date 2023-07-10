<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @googlefonts
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@300;400&family=Dosis:wght@600&family=Oswald&family=Roboto+Condensed&display=swap" rel="stylesheet">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Laravel</title>
    <!-- Required meta tags -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/fontawesome.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #011612}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body{
                overflow-x: hidden;
                background-color: #011612;
            }
            .container{
                padding:4%;
            }
            .navbar h6{
                font-family:'Roboto Condensed';
            }
            .selector-for-some-widget {
                box-sizing: content-box;
            }
            .font{
                font-family: helvetica;
                letter-spacing: 0.5px;
                font-size: medium;
            }
            .tosca{
                color:#00BBA5;
            }
            .tosca-bg{
                background-color:#00BBA5;
            }
            .yellow{
                color:#FFD233;
            }
            .sm{
                font-size:0.6rem;
            }
            .card p{
                font-family:'Be Vietnam Pro';
            }
            .container{
                overflow-x: hidden;
            }
            .col{
                width:17%;
            }
            .benefit .card{
                margin-right:3rem;
                margin-left:3rem;
            }
            .benefit p{
                font-family:'Roboto Condensed';
                color:#006E81;
            }
            .container button:hover, .container button:active, .container button:focus{
                background-color:#CECECE;
                color:white;
            }
            .tosca a:hover, .tosca a:focus{
                color:black;
            }
            .navbar-brand:hover, .navbar-brand:focus{
                color:white;
                text-decoration: underline;
            }
            @media only screen and (max-width:992px) {
                .p-mentor .col {
                    width:25%;
                }
                .benefit .card{
                    margin-left:1rem;
                    margin-right:1rem;
                }
            }
            @media only screen and (max-width: 768px) {
                .p-mentor .col {
                    width:37%;
                }
                .benefit .card{
                    margin-left:0rem;
                    margin-right:0rem;
                }
                .benefit .card img{
                    width:7rem;
                    height:6rem;
                }
                .col-5{
                    margin:0;
                }
            }
            @media only screen and (max-width: 650px){
                .navbar{
                    margin:1% 0;
                }
                .benefit p{
                    font-size:13px;
                }
            }
            @media only screen and (max-width: 576px) {
                .p-mentor .col {
                    width:37%;
                }
                .fa-brands{
                    font-size:1.5em;
                }
                footer p{
                    font-size:12px;
                }
            }
            @media only screen and (max-width: 450px) {
                .sm{
                    font-size:0.5rem;
                }
                .fa-star, .fa-location-dot{
                    font-size:0.75em;
                }
                .card img{
                    width:70%;
                }
                .navbar h6{
                    font-size:0.8rem;
                }
                .fa-brands{
                    font-size:1em;
                }
                .benefit p{
                    font-size:10px;
                }
            }
        </style>
        <!-- PWA  -->
        <link rel="apple-touch-icon" href="{{ asset('logo.PNG') }}">
        <link rel="manifest" href="{{ asset('/manifest.json') }}">
    </head>
    <body>
    <nav class="font navbar text-white m-3">
        <span class="align-middle">
            <img src="{{URL::asset('/assets/logo.png')}}" alt="profile Pic" height="30">
            <a class="navbar-brand"><h6>MenITi</h6></a>
        </span>
        <span class="align-middle">
            <a class="navbar-brand" href={{url('register')}}><h6>Sign Up</h6></a>
            <a class="navbar-brand" href={{url('login')}}><h6>Log In</h6></a>
        </span>
    </nav>
    <div class="container text-center text-white mx-auto my-3">
        <img src="{{URL::asset('/assets/girl.png')}}" height="200">
        <h5 class="font-weight-bold mt-4">Bagaimana men<span class="tosca">IT</span>i membantumu?</h5>
        <h6 class="font-weight-light mt-2 pb-2">Dapatkan tips dan wawasan baru dari mentor berpengalaman sesuai bidang karir masa depanmu.</h6>
        <h6 class="tosca underline font-weight-bold mt-5 mb-4">CARI MENTOR</h6>
        <!-- card -->
        <div class="p-mentor row row-cols-2 justify-content-center row-cols-lg-4">
            <div class="col my-1">
                <div class="card pt-2 text-center mx-auto d-block">
                    <div clas="star mt-2">
                        <i class="yellow fa-solid fa-star"></i>
                        <i class="yellow fa-solid fa-star"></i>
                        <i class="yellow fa-solid fa-star"></i>
                        <i class="yellow fa-solid fa-star"></i>
                        <i class="yellow fa-solid fa-star"></i>
                    </div>
                    <img class="p-2" src="{{URL::asset('/assets/pp1.png')}}" alt="profile Pic" width="100">
                    <div clas="loc">
                        <i class="tosca fa-solid fa-location-dot d-inline"></i>
                        <p class="sm font-weight-bold text-secondary d-inline">Malang, Jawa Timur</p>
                    </div>
                    <p class="pt-1 sm font-weight-bold text-dark text-sm"> IT Analyst, UI/UX Research</p>
                </div>
            </div>
            <div class="col my-1">
                <div class="card pt-2 text-center mx-auto d-block">
                    <div clas="star mt-2">
                        <i class="yellow fa-solid fa-star"></i>
                        <i class="yellow fa-solid fa-star"></i>
                        <i class="yellow fa-solid fa-star"></i>
                        <i class="yellow fa-solid fa-star"></i>
                        <i class="yellow fa-solid fa-star"></i>
                    </div>
                    <img class="p-2" src="{{URL::asset('/assets/pp2.png')}}" alt="profile Pic" width="100">
                    <div clas="loc">
                        <i class="tosca fa-solid fa-location-dot d-inline"></i>
                        <p class="sm font-weight-bold text-secondary d-inline">Malang, Jawa Timur</p>
                    </div>
                    <p class="pt-1 sm font-weight-bold text-dark text-sm"> IT Analyst, UI/UX Research</p>
                </div>
            </div>
            <div class="col my-1">
                <div class="card pt-2 text-center mx-auto d-block">
                    <div clas="star mt-2">
                        <i class="yellow fa-solid fa-star"></i>
                        <i class="yellow fa-solid fa-star"></i>
                        <i class="yellow fa-solid fa-star"></i>
                        <i class="yellow fa-solid fa-star"></i>
                        <i class="yellow fa-solid fa-star"></i>
                    </div>
                    <img class="p-2" src="{{URL::asset('/assets/pp3.png')}}" alt="profile Pic" width="100">
                    <div clas="loc">
                        <i class="tosca fa-solid fa-location-dot d-inline"></i>
                        <p class="sm font-weight-bold text-secondary d-inline">Malang, Jawa Timur</p>
                    </div>
                    <p class="pt-1 sm font-weight-bold text-dark text-sm"> IT Analyst, UI/UX Research</p>
                </div>
            </div>
            <div class="col my-1">
                <div class="card pt-2 text-center mx-auto d-block">
                    <div clas="star mt-2">
                        <i class="yellow fa-solid fa-star"></i>
                        <i class="yellow fa-solid fa-star"></i>
                        <i class="yellow fa-solid fa-star"></i>
                        <i class="yellow fa-solid fa-star"></i>
                        <i class="yellow fa-solid fa-star"></i>
                    </div>
                    <img class="p-2" src="{{URL::asset('/assets/pp4.png')}}" alt="profile Pic" width="100">
                    <div clas="loc">
                        <i class="tosca fa-solid fa-location-dot d-inline"></i>
                        <p class="sm font-weight-bold text-secondary d-inline">Malang, Jawa Timur</p>
                    </div>
                    <p class="pt-1 sm font-weight-bold text-dark text-sm"> IT Analyst, UI/UX Research</p>
                </div>
            </div>
            
        </div>
        <p class="font-weight-light mt-2 pb-2">Temukan mentor yang sesuai dengan bidang keminatanmu dan kirimkan request message kepada mereka!</p>
        <a><h6 class="underline mt-1 mb-5">Lihat Selengkapnya</h6></a>
        <h6 class="tosca underline font-weight-bold">BERGABUNG MENJADI MENTOR</h6>
        <p class="font-weight-light">Apa benefit menjadi mentor?</p>
        <!-- card -->
        <div class="row benefit justify-content-center">
            <div class="col-6 col-sm-5 col-xxl-4 col-xl-4 col-lg-5">
                <div class="card p-3">
                    <img class="mb-2 mx-auto" src="{{URL::asset('/assets/sertif.png')}}" alt="profile Pic" height="150rem" width="180rem">
                    <p class="tosca mb-0">SERTIFIKAT</p>
                </div>
                <p class="text-light my-2">1. Mendapatkan sertifikat sebagai bahan portofolio</p>
            </div>
            <!-- <span class="col-2"></span> -->
            <div class="col-6 col-sm-5 col-xxl-4 col-xl-4 col-lg-5">
                <div class="card p-3">
                    <img class="mb-2 mx-auto" src="{{URL::asset('/assets/kom.png')}}" alt="profile Pic" height="150rem" width="180rem">
                    <p class="tosca small mb-0">KOMUNIKASI & KEPEMIMPINAN</p>
                </div>
                <p class="text-light my-2">2. Mengasah skill berkomunikasi dan kepemimpinan yang selalu diperlukan di dunia kerja</p>
            </div>
        </div>
        <button class="tosca px-3 py-2 mt-5"><a href={{url('register')}}> Gabung sekarang </button>
    </div>
    <footer class="tosca-bg navbar text-white text-center">
        <p class="align-middle mb-0">Copyright © MenITi - 2022. All rights reserved.</p>
        <span>
            <i class="fa-brands fa-facebook fa-2x pr-2"></i>
            <i class="fa-brands fa-tiktok fa-2x pr-2"></i>
            <i class="fa-brands fa-instagram fa-2x"></i>
        </span>
    </footer>

    <script src="{{ asset('/sw.js') }}"></script>
    <script>
        if (!navigator.serviceWorker.controller) {
            navigator.serviceWorker.register("/sw.js").then(function (reg) {
                console.log("Service worker has been registered for scope: " + reg.scope);
            });
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
