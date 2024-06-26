<!doctype html>
<html lang="en">

<head>
    @googlefonts
    <!-- Required meta tags -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@300;400&family=Dancing+Script:wght@500&family=Dosis:wght@600&family=Nanum+Myeongjo&family=Oswald&family=Roboto+Condensed&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Recursive:wght@400;700&display=swap">

    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #011612}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        body{
                overflow-x: hidden;
                background-color: #011612;
                overflow-y: scroll;
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
        .black{
            color:black;
        }
        .soft-tosca-bg{
            background-color:#A1E6DE;
        }
        .condensed{
            font-family:'Roboto Condensed';
        }
        .bevietnam{
            font-family:'Be Vietnam Pro';
        }
        .dosis{
            font-family:'Dosis';
        }
        .container{
            padding: 2%;
        }

        @media only screen and (min-width:575px) {
            .fixed-bottom {
                display:none;
            }
            .for_mobile{
                display: none !important;
            }
        }
        @media only screen and (max-width:574px) {
            .for_web{
                display: none !important;
            }
        }
    </style>
    @laravelPWA
    <link rel="manifest" href="./manifest.json">
</head>
<body>
    @php
        $users = DB::table('users')->orderBy('id')->get();
        $mentor = DB::table('biodata_mentor')->orderBy('id')->get();
        $mentee = DB::table('biodata_mentee')->orderBy('id')->get();
        $id_user = auth()->user()->id;
        $role = $users->where('id', $id_user)->pluck('role');
        $pemberitahuan;
        $temp=true;
        $read_status;
        $cek_pengingat = null;
        $mydate=getdate(date("U"));
        if($role[0]==1){
            $pemberitahuan = $mentee->where('user_id', $id_user)->pluck('pemberitahuan');
            $pemberitahuan = substr($pemberitahuan[0], 2, -2);
            $pemberitahuan = explode('","', $pemberitahuan);
            
            $cek_mentor = $mentee->where('user_id', $id_user)->pluck('mentor');
            $cek_mentor = $cek_mentor[0];
            if($cek_mentor!=null){
                $cek_mentor = $cek_mentor[2];
                $cek_pengingat = $mentor->where('id', $cek_mentor)->pluck('jadwal');
                $cek_pengingat = explode('"', $cek_pengingat[0]);
            }
        }else{
            $pemberitahuan = $mentor->where('user_id', $id_user)->pluck('pemberitahuan');
            $pemberitahuan = substr($pemberitahuan[0], 2, -2);
            $pemberitahuan = explode('","', $pemberitahuan);

            $cek_mentee = $mentor->where('user_id', $id_user)->pluck('mentee');
            $cek_pengingat = $mentor->where('user_id', $id_user)->pluck('jadwal');
            $cek_pengingat = explode('"', $cek_pengingat[0]);
            
        }
        $pemberitahuan = explode(',', $pemberitahuan[0]);
        $loop = count($pemberitahuan);
        for($i=0; $i<$loop; $i++){
            $temp2 = explode('|', $pemberitahuan[$i]);
            (count($temp2)==4) ? $i=$loop : $temp = false;
        }
    @endphp
    <div class="container">
        <!-- NOTIF DAN PROFILE -->
        <div class="for_web top-nav d-flex fixed-top px-5 py-2 align-items-center my-auto tosca-bg">
            <div class="mr-auto p-1 justify-content-center">
                <a onclick="changeIcon(this)">
                    @if($temp)
                        <i class="fa-solid fa-bell fa-xl text-danger" style="cursor:pointer;" onclick="window.location='{{ url('/pemberitahuan'); }}'"></i>
                    @else
                        <i class="fa-solid fa-bell fa-xl text-white" style="cursor:pointer;" onclick="window.location='{{ url('/pemberitahuan'); }}'"></i>
                    @endif
                </a>
                @if(auth()->user()->role == 0)
                    <a class="text-light ml-3 condensed" style="cursor:pointer;" onclick="window.location='{{ url('/beranda-mentor'); }}'">Beranda</a>
                @else
                    <a class="text-light ml-3 condensed" style="cursor:pointer;" onclick="window.location='{{ url('/beranda-mentee'); }}'">Beranda</a>
                @endif
            </div>
            <a class="text-light mr-3 condensed" style="cursor:pointer;" onclick="window.location='{{ url('/chatify'); }}'">Pesan</a>
            <a class="text-light mr-3 condensed" style="cursor:pointer;" onclick="window.location='{{ url('/pengingat'); }}'">Jadwal</a>
            <a class="text-light mr-3 condensed" style="cursor:pointer;" onclick="window.location='{{ url('/bookmark-list'); }}'">Favorit</a>
            <?php 
                $id = auth()->user()->id;
                $foto = "null";
                if(auth()->user()->role == 0){
                    $id = DB::table('biodata_mentor')->where('user_id', $id)->pluck('id');
                    $foto = (string)DB::table('biodata_mentor')->where('id', $id)->pluck('foto');
                }else{
                    $id = DB::table('biodata_mentee')->where('user_id', $id)->pluck('id');
                    $foto = (string)DB::table('biodata_mentee')->where('id', $id)->pluck('foto');
                }
                $foto = explode("\\", $foto);
                $foto = $foto[1];
                $foto = explode('"', $foto);
                $foto = $foto[0];
            ?>
            <div class="p-1 justify-content-center"><img src="{{asset('storage/foto/').'/'.$foto}}" style="height:40px; width:40px; border-radius:50%; object-fit:cover;"></div>
        </div> 
        <div class="for_mobile tosca-bg top-nav d-flex fixed-top px-5 py-2 align-items-center my-auto">
            <div class="mr-auto p-1 justify-content-center">
                <a onclick="changeIcon(this)">
                    @if($temp)
                        <i class="fa-solid fa-bell fa-xl text-danger" style="cursor:pointer;" onclick="window.location='{{ url('/pemberitahuan'); }}'"></i>
                    @else
                        <i class="fa-solid fa-bell fa-xl text-white" style="cursor:pointer;" onclick="window.location='{{ url('/pemberitahuan'); }}'"></i>
                    @endif
                </a>
            </div>
            <div class="p-1 justify-content-center"><img src="storage/foto{{$foto}}" style="height:40px; width:40px; border-radius:50%; object-fit:cover;"></div>
        </div> 
        @yield('content')
        <!-- BOTTOM NAVBAR -->
        <nav class="tosca-bg fixed-bottom py-1">
            <div class="text-center row">
            @if(auth()->user()->role == 0)
                <a class="col nav-item nav-link active logo" onclick="window.location='{{ url('/beranda-mentor'); }}'"><img src="{{URL::asset('/assets/nav-logo.png')}}" style="height:22px"><span class="sr-only">(current)</span></a>
            @else
                <a class="col nav-item nav-link active logo" onclick="window.location='{{ url('/beranda-mentee'); }}'"><img src="{{URL::asset('/assets/nav-logo.png')}}" style="height:22px"><span class="sr-only">(current)</span></a>
            @endif
            <a class="col nav-item nav-link" onclick="window.location='{{ url('/chatify'); }}'"><img src="{{URL::asset('/assets/nav-chat.png')}}" style="height:22px"></a>
            <a class="col nav-item nav-link" onclick="window.location='{{ url('/pengingat'); }}'"><img src="{{URL::asset('/assets/nav-calendar.png')}}" style="height:22px"></a>
            <a class="col nav-item nav-link" onclick="window.location='{{ url('/bookmark-list'); }}'"><img src="{{URL::asset('/assets/nav-bookmark.png')}}" style="height:22px"></a>
            </div>
        </nav>
    </div>

    <script type="text/javascript">
    // Initialize the service worker
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('/serviceworker.js', {
            scope: '.'
        }).then(function (registration) {
            // Registration was successful
            console.log('Laravel PWA: ServiceWorker registration successful with scope: ', registration.scope);
        }, function (err) {
            // registration failed :(
            console.log('Laravel PWA: ServiceWorker registration failed: ', err);
        });
    }
</script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script> -->
</body>

</html>