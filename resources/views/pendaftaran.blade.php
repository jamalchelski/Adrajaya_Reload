@extends('layouts.app')

@section('title', 'Daftar Baru')
@section('content')
<div class="container pt-5 pb-5" style="margin-bottom: 90px"  >
    <div class="row ">
        <div class="col-6 text-center mt-5">
            <img src="https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1584902234/adrajaya/dompet_wavtlu.svg" height="300" width="370">
        </div>
        <div class="col-6 mt-5 ">
            <h3 class="text-center mb-4">Isi Formulir Ini Dengan Lengkap</h3>
            <form method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Lengkap">
                    <input type="text" class="form-control mt-2 mb-2" id="formGroupExampleInput2" placeholder="No Hp Aktif">
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                  </div>
                  <div class="form-group col-md-6">
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="inputAddress" placeholder="Alamat lengkap">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="inputAddress2" placeholder="contoh:  Apartment, lantai">
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control" placeholder="Kota" id="inputCity">
                  </div>
                  <div class="form-group col-md-4">
                    <input type="text" class="form-control" placeholder="Provinsi" id="inputprovinsi">
                  </div>
                  <div class="form-group col-md-2">
                    <input type="text" class="form-control" placeholder="POS" id="inputZip">
                  </div>
                </div>
                <label for="inputZip">Upload Ktp</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                    </div>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                      <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                  </div>
                <a href="/#" class="btn btn-primary">Daftar</a>
              </form>
              
        </div>
    </div>   
</div>
@endsection