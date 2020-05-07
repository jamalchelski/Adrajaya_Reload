{{-- @extends('layout/main') --}}
@extends('layouts.app')
@section('title', 'Adrajaya Payments')
@section('content')
    
    <div class="container pt-5 pb-5" style="margin-top: 50px;margin-buttom: 50px"  >
        <div class="row ">
            <div class="col-6 text-right">
                <img src="https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1584795830/adrajaya/gbr1_fw2mtw.png" height="300" width="370">
            </div>
            <div class="col-6 mt-5 ">
                <p class="font-weight-bold text-secondary ml-5">ADRAJAYA MOBILE</p>
                <p class="text-secondary ml-5 font-weight-bold">NIKMATI kemudahan Bertransaksi digital anda<br>
                    HANYA dalam SATU APLIKASI</p>
                    <a href="{{route('register')}}" class="ml-5">
                        <img src="https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1584795795/adrajaya/btnDaf_insrgb.png" height="40" width="150" alt="">
                    </a>
            </div>
        </div>   
    </div>
    <div class="container rounded-lg ">
        <div class="jumbotron jumbotron-fluid text-center mt-2 rounded-lg shadow-lg p-2" style=" margin-bottom: 20px;">
            <div class="container rounded-lg">
                <h3 class="font-weight-bold">Kenapa harus Adrajaya</h3>
                <p>Kami berfokus pada kualitas produk dan pelayanan. dengan CS yang standby 24 jam. jadi tidak perlu sungkan untuk menghubungi CS apabila ada hal yang ingin disampaikan.
                Layanan Topup saldo bisa dilakukan via BANK atau via minimarket Alfamart/Indomaret.
                Program Cashback yang rutin kita buka setiap Hari Jumat untuk memberikan apresiasi kepada agen kita yang Loyalitas terhadap kami.
                Kami juga memberikan kesempatan agen ADRAJAYA untuk bisa memiliki aplikasi pulsa dengan desain, Nama, Logo sesuai keinginan Agen.Agar memudahkan para agen
                mempromosikan usahanya. </p>
            </div>
        </div>
    </div>
    <div class="container-fluid mb-5 mt-5 bg-white pb-5 pt-3 shadow-lg p-2">
        <div class="container">
        <div class="row">
            <div class="col mt-3">
                @component('components.fiturkami')
                    @slot('title')
                        Pendaftaran Gratis
                    @endslot
                    @slot('deskripsi')
                        Pendaftaran bisa langsung dari aplikasi atau CS
                    @endslot
                @endcomponent
                @component('components.fiturkami')
                    @slot('title')
                        CS Responsif 24 Jam
                    @endslot
                    @slot('deskripsi')
                        CS bekerja bergantian 24 jam untuk memantau transaksi dan memberikan pelayanan semaksimal mungkin kepada konsumen
                    @endslot
                @endcomponent
            </div>
            <div class="col-s12 mt-3 mx-auto">
                @component('components.fiturkami')
                @slot('title')
                Kualitas Produk
                @endslot
                @slot('deskripsi')
                Kualitas produk selalu kita utamakan untuk menjaga kenyamanan dan keamanan traksaksi anda.
                @endslot
                @endcomponent
                @component('components.fiturkami')
                @slot('title')
                Efisiensi Waktu
                @endslot
                @slot('deskripsi')
                Dengan menggunakan aplikasi ADRAJA MOBILE, anda menghemat waktu untuk bertransaksi Pulsa, Paket data, Token Listrik dan topup lainnya. Karena semua hanya memerlukan smartphone dan anda pun sudah bisa bertransaksi di rumah
                @endslot
                @endcomponent
            </div>
                <div class="w-100"></div>
            <div class="col-s12 mt-3 mx-auto">
                @component('components.fiturkami')
                @slot('title')
                Jalur Transaksi
                @endslot
                @slot('deskripsi')
                Kami menyedian jalur transaksi via Telegram, SMS, WhatsApp, Aplikasi.
                @endslot
                @endcomponent
            </div>
        </div>
    </div>
    </div>
    <div>
        <div >
            <img src="https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1584795843/adrajaya/bg2_dgnva2.png" width="100%" >
        </div>
        <div class="container mt-5 mb-5">
            <img src="https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1584891720/adrajaya/Group_14_h8xkpp.svg" width="100%" alt="">
        </div>
    </div>
    <div class="container-fluid bg-white pt-4 pb-5 shadow-lg ">
        <div class="container">
            <img src="https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1584795838/adrajaya/banner_fsfsom.png" width="100%" alt="">
        </div>
    </div>
    
    
@endsection
