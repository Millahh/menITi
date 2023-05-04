@extends('app')
@section('content')
<head>
</head>
<style>
    body{
        overflow-y: hidden; // hide vertical
        overflow-x: hidden; // hide horizontal
    }
    .text-center p{
        font-size:2.5vw;
    }
    .brd{
        display: table;
        text-align: center;
        border: 1.5vw double #00BBA5;
        width: 70%;
        vertical-align: middle;
        background-color:white;
        padding:1% 4%;
    }
    .logo {
        color: black;
        font-size:3.5vw;
        font-weight:900;
    }
    .logo span{
        color:#00BBA5;
    }

    .marquee {
        color: #00BBA5;
        font-size: 3vw;
        font-weight:900;
    }
    .assignment {
        margin: 20px;
        font-size: 1.5vw;
        font-family:'Nanum Myeongjo';
    }
    .person {
        border-bottom: 1px solid black;
        font-size: 32px;
        font-style: italic;
        margin: 20px auto;
        width: 400px;
    }
    .reason {
        margin: 20px;
        font-size: 1.5vw;
        font-family:'Nanum Myeongjo';
    }
    button{
        font-size:1.4vw;
    }
</style>
<body class="text-center my-auto">
    <p class="text-light mb-2 bevietnam">Selamat!</p>
    <div class="brd mx-auto">
        <div class="logo dosis">
            men<span>IT</span>i
        </div>
        <div class="marquee condensed">
            SERTIFIKAT APRESIASI
        </div>
        <div class="assignment">
            Sertifikat ini diberikan kepada:
        </div>
        <div class="person condensed">
            Aditya Rais
        </div>
        <div class="reason">
            Atas partisipasinya sebagai <strong>MENTOR</strong> di bidang <strong>IT Analyst</strong>
        </div>
    </div>
    <button class="download tosca-bg text-light px-5 py-2 mt-4 rounded-pill bevietnam">Cetak Sertifikat</button>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js" integrity="sha512-tVYBzEItJit9HXaWTPo8vveXlkK62LbA+wez9IgzjTmFNLMBO1BEYladBw2wnM3YURZSMUyhayPCoLtjGh84NQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
document.querySelector(".container").addEventListener("click", (e) => {
    if (e.target.className === "download tosca-bg text-light px-5 py-2 mt-4 rounded-pill bevietnam") {
        const imgName = prompt("Input nama gambar yang akan diunduh: ")
        if (imgName) {
            const element = e.target.previousElementSibling;
            html2canvas(element).then(function (canvas) {
                const a = document.createElement("a");
                a.download = imgName + ".jpg";
                a.href = canvas.toDataURL("image/jpeg").replace("image/jpeg", "image/octet-stream");
                a.click();
            })
        }
    }
})
</script>
@endsection