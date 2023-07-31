@extends('base')
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
    .nav:focus, .nav a:focus, .nav a:hover, .nav-item .active{
      border-bottom:3px solid #00BBA5;
      color:#00BBA5;
    }
    .btnNext:hover, .btnNext:focus, .btnSubmit:hover, .btnSubmit:focus{
      background-color:#00BBA5;
      color:white;
    }
    .tab-content, .btn-group label{
      color:white;
      font-family: 'Dosis';
    }
    .tab-content p{
      text-align:left;
      margin-top:1px;
    }
    .tab-content button{
      float:right;
      background-color:white;
      margin:5% 0;
    }
    #ex1-tabs-3 .tosca{
      width:70%;
      float:none;
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
          width:90%;
      }
      .nav-item a{
        font-size:12px;
      }
      select option{
        font-size:10px;
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
  <li class="nav-item col-4" role="presentation">
    <a class="nav-link active" data-bs-toggle="tab" href="#home">Data Diri</a>
  </li>
  <li class="nav-item col-4" role="presentation">
    <a class="nav-link" data-bs-toggle="tab" href="#menu1">Minat</a>
  </li>
  <li class="nav-item col-4" role="presentation">
    <a class="nav-link" data-bs-toggle="tab" href="#menu2">Portofolio</a>
  </li>
</ul>

<!-- Tabs content -->
<form action="{{ route('biodata.mentee') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="tab-content">
      <!-- TAB 1 -->
      <div class="tab-pane active" id="home">
        <input type="hidden" id="user_id" name="user_id" value={{$param}}>
        <!-- foto -->
        <div class="btn">
          <input type="file" class="form-control d-none @error('foto') is-invalid @enderror" id="foto" name="foto" style="display:none" onchange="loadFile(event)"/>
          <label class="form-label text-white" for="foto"><img src="{{URL::asset('/assets/profile.png')}}" style="height:100px" id="imgBox"></label>
          @error('foto')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <p class="mb-2">Username</p>
        <div class="mb-3">
            <input class="form-control rounded p-3 @error('username') is-invalid @enderror" placeholder="Isi username.." type="username" id="username" name="username" value="{{ old('username') }}" />
            @error('username')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <p class="mb-2">Jenis Kelamin</p>
        <div class="mb-3">
          <select class="font-weight-light form-select rounded p-2 @error('jenis_kelamin') is-invalid @enderror" aria-label="Default select example" id="jenis_kelamin" name="jenis_kelamin">
            <option selected>None</option>
            <option value="1">Laki-Laki</option>
            <option value="2">Perempuan</option>
          </select>
          @error('jenis_kelamin')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <p class="mb-2">Tentang</p>
        <div class="mb-3">
          <input class="form-control rounded p-3 @error('tentang') is-invalid @enderror" placeholder="Isi tentang.." type="tentang" id="tentang" name="tentang" value="{{ old('tentang') }}" />
          @error('tentang')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <p class="mb-2">Tempat Tinggal</p>
        <div class="mb-3">
          <input class="form-control rounded p-3 @error('tempat_tinggal') is-invalid @enderror" placeholder="Isi tempat tinggal.." type="alamat" id="tempat_tinggal" name="tempat_tinggal" value="{{ old('tempat_tinggal') }}" />
          @error('tempat_tinggal')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <p class="mb-2">Pekerjaan</p>
        <div class="mb-3">
          <select class="font-weight-light form-select rounded p-2 @error('pekerjaan') is-invalid @enderror" aria-label="Default select example" id="pekerjaan" name="pekerjaan">
            <option value="0" selected>None</option>
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
          <input class="form-control rounded p-3 @error('instansi') is-invalid @enderror" placeholder="Isi instansi.." type="instansi" id="instansi" name="instansi" value="{{ old('instansi') }}" />
          @error('pekerjaan')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <p class="mb-2">Nomor Telepon</p>
        <div class="mb-3">
          <input class="form-control rounded p-3 @error('telepon') is-invalid @enderror" placeholder="Isi nomor telepon.." type="telepon" id="telepon" name="telepon" value="{{ old('telepon') }}" />
          @error('jenis_kelamin')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="mt-3 mb-1">
          <button type="button" class="btn rounded tosca btnNext">Next</button>
        </div>
      </div>

      <!-- TAB 2 -->
      <div class="tab-pane fade" id="menu1">
        <div class="btn-group btn-group-toggle d-block" data-toggle="buttons">
          <label class="btn tosca-bg rounded-pill mx-2 my-2" for="minat">
            <input class="@error('minat') is-invalid @enderror" type="checkbox" id="minat" name="minat[]" autocomplete="off">📱 Mobile Developer
          </label>
          <label class="btn tosca-bg rounded-pill mx-2 my-2" for="minat">
            <input class="@error('minat') is-invalid @enderror" type="checkbox" id="minat" name="minat[]" autocomplete="off"> 💻 Web Developer
          </label>
          <label class="btn tosca-bg rounded-pill mx-2 my-2" for="minat">
            <input class="@error('minat') is-invalid @enderror" type="checkbox" id="minat" name="minat[]" autocomplete="off"> ⚙️ Cloud Computing Engineer
          </label>
          <label class="btn tosca-bg rounded-pill mx-2 my-2" for="minat">
            <input class="@error('minat') is-invalid @enderror" type="checkbox" id="minat" name="minat[]" autocomplete="off"> ✒️  UI/UX Designer
          </label>
          <label class="btn tosca-bg rounded-pill mx-2 my-2" for="minat">
            <input class="@error('minat') is-invalid @enderror" type="checkbox" id="minat" name="minat[]" autocomplete="off"> 👨🏻‍💻 IT Manager
          </label>
          <label class="btn tosca-bg rounded-pill mx-2 my-2" for="minat">
            <input class="@error('minat') is-invalid @enderror" type="checkbox" id="minat" name="minat[]" autocomplete="off"> 🖥️ Quality Assurance
          </label>
          <label class="btn tosca-bg rounded-pill mx-2 my-2" for="minat">
            <input class="@error('minat') is-invalid @enderror" type="checkbox" id="minat" name="minat[]" autocomplete="off"> 📈 Data Science
          </label>
          <label class="btn tosca-bg rounded-pill mx-2 my-2" for="minat">
            <input class="@error('minat') is-invalid @enderror" type="checkbox" id="minat" name="minat[]" autocomplete="off"> 📊 IT Analyst
          </label>
          <label class="btn tosca-bg rounded-pill mx-2 my-2" for="minat">
            <input class="@error('minat') is-invalid @enderror" type="checkbox" id="minat" name="minat[]" autocomplete="off"> 🗂️ UI/UX Research
          </label>
          <label class="btn tosca-bg rounded-pill mx-2 my-2" for="minat">
            <input class="@error('minat') is-invalid @enderror" type="checkbox" id="minat" name="minat[]" autocomplete="off"> 🗃️ Business Analyst
          </label>
          @error('minat')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="mt-3 mb-1">
            <button type="button" class="btn rounded tosca btnNext">Next</button>
        </div>
      </div>

      <!-- TAB 3 -->
      <div class="tab-pane fade text-center" id="menu2">
        <div class="btn">
          <input type="file" class="form-control d-none @error('portofolio') is-invalid @enderror" id="portofolio" name="portofolio" onchange="loadFile2(event)"/>
          <label class="form-label" for="portofolio"><img src="{{URL::asset('/assets/upload.png')}}" style="width:70%" id="imgBox2"></label>
          @error('portofolio')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3 mt-0 text-center">
            <button type="submit" class="btn rounded tosca text-center btnSubmit">Upload</button>
        </div>
      </div>
      <input type="hidden" id="calon_mentor" name="calon_mentor" value="0">
      <input type="hidden" id="mentor" name="mentor" value="0">
  </div>
  <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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

var imgBox = document.getElementById("imgBox");
var loadFile = function(event){
  imgBox.src = "{{URL::asset('storage/foto/pp-mentee.png')}}";

}
var imgBox2 = document.getElementById("imgBox2");
var loadFile2 = function(event){
  imgBox2.src = "{{URL::asset('/assets/cv-upload.png')}}";

}
</script>
@endsection
