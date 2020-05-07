@extends('layouts.app')

@section('title', 'Produk')
@section('content')
<style>
    .my-custom-scrollbar {
        position: relative;
        height: 600px;
        overflow: auto;
        box-shadow: 10px 10px 5px grey;
    }
    .table-wrapper-scroll-y {
    display: block;
        }

</style>


{{-- content head --}}

<div class="container pt-5 pb-5"  >
    <div class="row ">
        <div class="col-6 text-right">
            <img src="https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1584902234/adrajaya/dompet_wavtlu.svg" height="300" width="370">
        </div>
        <div class="col-6 mt-5 ">
            <p class="font-weight-bold text-secondary ml-5">ADRAJAYA MOBILE</p>
            <p class="text-secondary ml-5">NIKMATI kemudahan Bertransaksi digital anda<br>
                HANYA dalam SATU APLIKASI</p>
                <a href="{{'/pendaftaran'}}" class="ml-5">
                    <img src="https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1584795795/adrajaya/btnDaf_insrgb.png" height="40" width="150" alt="">
                </a>
        </div>
    </div>   
</div>

{{-- Tabel Produk --}}
<div class="shadow-lg p-3 bg-white rounded mt-5 text-center mt-5" style="height: 1000px;">
    <h1 style="font-size: medium;margin-top: 50px">Daftar Harga</h1>
    <h1 style="font-size: medium;">Produk ADRAJAYA</h1>
    <div class="container mt-5 ">
        <div class="table-wrapper-scroll-y my-custom-scrollbar">
            <table class="table table-bordered text-center">
                <thead class="thead-light info">
                    <tr>
                        <th scope="col">kode</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $prod)
                        <tr>
                            <th>{{ $prod->kode }}</th>
                            <th>{{ $prod->keterangan }}</th>
                            <th>{{ $prod->harga }}</th>
                            <th>{{ $prod->status }}</th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection