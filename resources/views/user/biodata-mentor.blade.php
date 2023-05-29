@extends('app')
@section('content')
<style>
    body{
        overflow-x: hidden;
        text-align:center;
        display:flex;
        justify-content:center;
        }
    i{
      float:left;
    }
    .container{
      margin-top:1%;
      width:50%;
      padding-bottom:10%;
    }
    .pdg{
      box-sizing: border-box;
      width:100%;
    }
    .nav{
      font-family: 'Dosis';
      font-size:20px;
      color:#00BBA5;
    }
    .nav a{
      border-bottom:3px solid #D9D9D9;
      color:#D9D9D9;
    }
    .nav:focus, .nav a:focus, .nav a:hover{
      border-bottom:3px solid #00BBA5;
      color:#00BBA5;
    }
    .tab-content, .btn-group label{
      color:white;
      font-family: 'Dosis';
    }
    .tab-content p{
      text-align:left;
      margin-top:1px;
    }
    .tab-content .submit{
      float:right;
      background-color:white;
      margin:5% 0;
    }
    #ex1-tabs-3 .tosca{
      width:70%;
      float:none;
    }
    #timepicker:before {
      content: 'Waktu';
      margin-right: .6em;
      color: #9d9d9d;
    }
    .set-jadwal, .submit, .tab-content .submit, .porto{
      background-color:#3A3A3A;
      margin-bottom:0;
    }
    .tab-content button i{
      float:right;
      color:white;
    }
    .tab-content .b-next, .tab-content .b-save {
      float:right;
    }
    @media only screen and (max-width:880px) {
      .container {
          width:75%;
      }
    }
    @media only screen and (max-width:768px) {
      .container {
          width:70%;
      }
    }
    @media only screen and (max-width:768px) {
      .container {
          width:80%;
      }
    }
    @media only screen and (max-width:545px) {
      .container {
          width:100%;
      }
      .nav-item a{
        font-size:15px;
      }
    }
    @media only screen and (max-width:385px) {
      .nav-item a{
        display:none;
      }
    }

</style>
@googlefonts
<i class="fa-solid fa-circle-chevron-left"></i>
<!-- Tabs navs -->
<ul class="nav nav_tabs justify-content-center mb-3 mt-4 text-center">
  <li class="nav-item col-6" role="presentation">
    <a class="nav-link active pdg" data-bs-toggle="tab" href="#home">Data Diri</a>
  </li>
  <li class="nav-item col-6" role="presentation">
    <a class="nav-link pdg" data-bs-toggle="tab" href="#menu1">Bidang & Jadwal</a>
  </li>
</ul>

<!-- Tabs content -->
<form action="{{ route('biodata.mentor') }}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('POST')
  <div class="tab-content">
    <!-- TAB 1 -->
    <div class="tab-pane active" id="home">
      <input type="hidden" id="user_id" name="user_id" value={{$param}}>
      <!-- foto -->
      <div class="btn">
        <input type="file" class="form-control d-none" id="foto" name="foto"/>
        <label class="form-label text-white" for="foto"><img src="{{URL::asset('/assets/profile.png')}}" style="height:100px"></label>
      </div>
      <p class="mb-2">Username</p>
      <div class="mb-3">
          <input class="form-control rounded p-3" placeholder="Isi username.." type="username" name="username" value="{{ old('username') }}" />
      </div>
      <p class="mb-2">Jenis Kelamin</p>
      <div class="mb-3">
          <select class="font-weight-light form-select rounded p-2" aria-label="Default select example" id="jenis_kelamin" name="jenis_kelamin">
              <option selected>None</option>
              <option value="1">Laki-Laki</option>
              <option value="2">Perempuan</option>
          </select>
      </div>
      <p class="mb-2">Tentang</p>
      <div class="mb-3">
          <input class="form-control rounded p-3" placeholder="Isi tentang.." type="tentang" name="tentang" value="{{ old('tentang') }}" />
      </div>
      <p class="mb-2">Tempat Tinggal</p>
      <div class="mb-3">
          <input class="form-control rounded p-3" placeholder="Isi tempat tinggal.." type="alamat" name="tempat_tinggal" id="tempat_tinggal" value="{{ old('alamat') }}" />
      </div>
      <p class="mb-2">Pekerjaan</p>
      <div class="mb-3">
          <select class="font-weight-light form-select rounded p-2" aria-label="Default select example" id="pekerjaan" name="pekerjaan">
              <option selected>None</option>
              <option value="1">Mobile Developer</option>
              <option value="2">Web Developer</option>
              <option value="3">Cloud Computing Engineer</option>
              <option value="4">UI/UX Designer</option>
              <option value="5">IT Manager</option>
              <option value="6">Quality Assurance</option>
              <option value="7">Data Science</option>
              <option value="8">IT Analyst</option>
              <option value="9">UI/UX Research</option>
              <option value="10">Business Analyst</option>
          </select>
      </div>
      <p class="mb-2">Instansi</p>
      <div class="mb-3">
          <input class="form-control rounded p-3" placeholder="Isi instansi.." type="instansi" name="instansi" value="{{ old('instansi') }}" />
      </div>
      <p class="mb-2">Nomor Telepon</p>
      <div class="mb-3">
          <input class="form-control rounded p-3" placeholder="Isi nomor telepon.." type="telepon" name="telepon" value="{{ old('telepon') }}" />
      </div>
      <div class="mt-1 b-next">
        <button type="button" class="btn rounded tosca-bg text-light btnNext">Next</button>
      </div>     
    </div>        
    <!-- TAB 2 -->
    <div class="tab-pane fade" id="menu1">
      <p class="mb-2">Bidang</p>
      <div class="mb-3">
        <select class="font-weight-light form-select rounded p-2" aria-label="Default select example" id="bidang" name="bidang">
          <option selected>None</option>
          <option value="1">Mobile Developer</option>
          <option value="2" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-id="1">Web Developer</option>
          <option value="3">Cloud Computing Engineer</option>
          <option value="4">UI/UX Designer</option>
          <option value="5">IT Manager</option>
          <option value="6">Quality Assurance</option>
          <option value="7">Data Science</option>
          <option value="8">IT Analyst</option>
          <option value="9">UI/UX Research</option>
          <option value="10">Business Analyst</option>
        </select>
      </div>
      <p class="mb-2">Jadwal</p>
      <div class="set-jadwal p-3 mb-2 rounded">
        <p style="width:100%" class="mb-0">OPSI 1</p>
        <div class="row p-2">
          <select class="col-5 font-weight-light form-select rounded p-2" aria-label="Default select example" id="jadwal" name="jadwal[]>
            <option selected value="0">Hari</option>
            <option value="1">Senin</option>
            <option value="2">Selasa</option>
            <option value="3">Rabu</option>
            <option value="4">Kamis</option>
            <option value="5">Jumat</option>
            <option value="6">Sabtu</option>
            <option value="7">Minggu</option>
          </select>
          <div class="col-2"></div>
          <input class="col-5 rounded p-2" placeholder="waktu" type="time" id="jadwal" name="jadwal[]>
          <button type="submit" class="submit">
            <i class="fa-solid fa-plus"></i>
          </button>
        </div>
      </div>
      <p class="mb-2">Portofolio</p>
      <div class="porto tosca-bg align-middle rounded p-3 mb-3">
        <input type="file" class="form-control d-none" id="portofolio" name="portofolio"/>
        <label class="form-label tosca-bg px-5 rounded py-1" for="portofolio">Unggah Berkas</label>
      </div>
      <div class="mt-1 b-save">
        <button type="submit" class="btn rounded tosca-bg text-light">Save</button>
      </div>
      <input type="hidden" id="calon_mentee" name="calon_mentee" value="0">
      <input type="hidden" id="mentee" name="mentee" value="0">
    </div>
  </div>
</form>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body black text-left text-center">
        <img src="{{URL::asset('/assets/roadmap.png')}}" style="width:80%">
        <div class="text-right">
          <button class="btn rounded tosca-bg text-light setuju">Setuju</button>
        </div>
    </div>
  </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
$('.btnNext').click(function() {
  const nextTabLinkEl = $('.nav_tabs .active').closest('li').next('li').find('a')[0];
  const nextTab = new bootstrap.Tab(nextTabLinkEl);
  nextTab.show();
});

$('.btnPrevious').click(function() {
  const prevTabLinkEl = $('.nav_tabs .active').closest('li').prev('li').find('a')[0];
  const prevTab = new bootstrap.Tab(prevTabLinkEl);
  prevTab.show();
});
</script>
@endsection