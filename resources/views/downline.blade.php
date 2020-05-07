@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
<style>
    .formSearch {
        border-radius: 10px;
        border-style: solid;
        border-width: 2px;
        border-color: #0881c2;
    }
    .input {
        border-radius: 5px;
        border-style: solid;
        border-width: 1px;
        border-color: #0881c2;
    }
    .label {
        color : #0881c2;
        font-weight: bold;
    }
    .my-custom-scrollbar {
        position: relative;
        height: 430px;
        overflow: auto;
    }
    .table-wrapper-scroll-y {
        display: block;
    }
    .data {
        height: 500px;
        border-radius: 10px;
        margin-left: 5px;
        margin-bottom: 5px;
    }
    .data1 {
        color: white;
    }
    .mline {
        white-space:pre;
    }
</style>
<div class="container mt-5 " style="height: 700px;">
    <div class="row">
        {{-- LEFT DASHBOARD --}}
        @component('components.leftside')
            
        @endcomponent

        {{-- RIGHT CONTENT --}}
        <div class="col-9">
            {{-- TOP CONTENT --}}
                <form class="container bg-white wraper mt-3 p-3 formSearch">
                    <div class="row ">
                      <div class="col-md-3">
                        <label class="label" for="kodeAgen">Kode Agen</label>
                        <input class="input col" type="text" class="form-control" placeholder="Kode Agen">
                      </div>
                      <div class="col-md-3">
                        <label class="label" for="NamaAgen">Nama Agen</label>
                        <input class="input col" type="text" class="form-control" placeholder="Kode Agen">
                      </div>
                      <div class="col-md-2">
                        <label class="label" for="NamaAgen">Tgl Daftar</label>
                        <input class="input col" type="text" class="form-control" placeholder="Kode Agen">
                      </div>
                      <div class="col-md-2">
                        <label class="label" for="NamaAgen">Tgl Aktifitas</label>
                        <input class="input col" type="text" class="form-control" placeholder="Kode Agen">
                      </div>
                    </div>
                  </form>

            {{-- CONTENT BUTTOM --}}
            <div class="bg-white  shadow-sm img-thumbnail data mt-2 formSearch"  >
                <div class="container">
                    <div class="table-wrapper-scroll-y my-custom-scrollbar table-responsive">
                        <table class="table table-hover-sm">
                            <thead>
                              <tr>
                                <th scope="col">Kode Agen</th>
                                <th scope="col">Nama Agen</th>
                                <th scope="col">Saldo</th>
                                <th scope="col">Komisi</th>
                                <th scope="col">Point</th>
                                <th scope="col">Status</th>
                                <th scope="col">Markup</th>
                                <th scope="col-md-5">Alamat</th>
                                <th scope="col">Tgl Daftar</th>
                                <th scope="col">Aktifitas Terakhir</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td  class="mline" scope="col">wdssfsfsfsefcrvggvfv1</td>
                                <td class="mline"  scope="col">1svsvsdsdvsdvsdv</td>
                                <td  class="mline" scope="col">1vsvsdvsdvds</td>
                                <td  class="mline" scope="col">1vdsvsvdsvdv</td>
                                <td  class="mline" scope="col">1vdsvsdvsv</td>
                                <td  class="mline" scope="col">1vdvsvsvsdv</td>
                                <td  class="mline" scope="col">1vsdvsdvsd</td>
                                <td  class="mline" scope="col">1vdadgadhadgahdgahdjadgahsgdhashdashxsbxabxbhabxjsaxbajxbjkxaxbjaxbjabsxjabsjxbajxsjxbjasbxjasbjxbasjbbasjsdvsdvsd</td>
                                <td  class="mline" scope="col">1vsdvsdvsd</td>
                                <td  class="mline" scope="col">1vsdvsdvsd</td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                </div>
                <div class="container">
                    <div class="d-flex flex-row-reverse ">
                        <div class="p-2 bd-highlight mr-5">
                            <a class="text-dark mr-5 mt-2 btn btn-primary btn-sm center" href="#">
                                <h6 class="data1">Simpan Data</h6>
                            </a>
                        </div>
                        <div class="p-2 bd-highlight">
                            <a class="text-dark mr-5 mt-2 btn btn-primary btn-sm data1 " href="#">
                                <h6 class="data1">Print Data</h6>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            

        </div>
    </div>

</div>
@endsection