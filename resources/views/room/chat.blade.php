@extends('app')
@section('content')
<style>
    table{
        border-top:1px solid #2A3734;
    }
    .judul{
        font-size:2vw;
        font-family:'Roboto Condensed';
    }
    table td{
        color:#969696;
        font-weight:700;
        padding-top:1%;
        font-size:1.5vw;
    }
</style>
<body>
    <p class="tosca judul">Pesan</p>
    <table>
        <div class="pesan">
            <tr>
                <td rowspan="2" class="col-1"><img src="{{URL::asset('/assets/pp1.png')}}" style="height:5vw"></td>
                <td class="col-11 text-light">Aditya Rais</td>
                <td class="col-1">19.30</td>
            </tr>
            <tr>
                <td class="col-11">Siang, baik CV sudah saya lihat dan saya...</td>
                <td class="col-1 text-right"><img src="{{URL::asset('/assets/ntf1.png')}}" style="height:25px"></td>
            </tr>
        </div>
    </table>
</body>
<script>
</script>
@endsection