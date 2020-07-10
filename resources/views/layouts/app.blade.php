<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=1366">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('customs/icon.js') }}"></script>
    <script src="{{ asset('customs/style.css') }}"></script>
    <link rel="shortcut icon" type="image/png" href="https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1584909709/adrajaya/title-adr_z95keo_mdyiuh.ico" />
    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
</head>
<body class="utama" >
    <div id="app" >
        <nav class="navbar navbar-expand-md navbar-light bg-white ">
            <div class="container">
                <a class="navbar-brand ml-5" href="{{'/'}}" >
                    <img src="https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1584795795/adrajaya/ADR_coardk.png" width="95" height="62" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Daftar</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown data-offset="10,20"">
                                
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img src="https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1584997134/adrajaya/1828479_zvbgv0.png" height="25" width="25">
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid bg-white shadow-sm navut" >
            <div class="container">
            <div class="d-flex flex-row-reverse bd-highlight">
                <div class="p-2 bd-highlight mr-5">
                    <a class="text-dark mr-5 mt-2 tbl {{ Request::is('artikel') ? 'border border-info rounded-pill px-2  ' : ''}}" href="{{ route('artikel') }}">Artikel</a>
                </div>
                <div class="p-2 bd-highlight">
                    <a class="text-dark mr-5 mt-2 tbl {{ Request::is('kontak') ? 'border border-info rounded-pill px-2  ' : ''}}" href="{{ route('kontak') }}">Kontak kami</a>
                </div>
                <div class="p-2 bd-highlight ">
                    <a class="text-dark mr-5 mt-2 tbl {{ Request::is('produk') ? 'border border-info rounded-pill px-2  ' : ''}} " href="{{ route('product') }}">Produk Kami</a>
                </div>
                <div class="p-2 bd-highlight ">
                    <a class="text-dark mr-5 mt-2 tbl {{ Request::is('landing') ? 'border border-info rounded-pill px-2  ' : ''}}" href="{{ route('landing') }}">Beranda</a>
                </div>
            </div>
        </div>
        </div>
        <main class="py-4">

            
            @yield('content')   



        </main>
    </div>
    <div class="pb-0 ">
        <div class="container-fluid foot" >
            <div class="container">
                <div class="row">
                    <div class="col-2">
                        <h6 class="text-white text-small mt-3">kritik & saran</h6>
                            <form method="post" >
                                @csrf
                                <div class="form-group mt-3 ">
                                    <input type="text" class="form-control form-control-sm mb-2 " id="email" placeholder="Email" name="email">
                                    <input type="text" class="form-control form-control-sm " id="nama" name="nama" placeholder="Nama">
                                    
                                </div>
                                <a class="btn btn-light btn-sm" href="{{route('pesan')}}">Lanjutkan</a>
                            </form>
                    </div>
                    <div class="col-8 text-center">
                        <img src="https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1584795796/adrajaya/logoAdraSdwba3cc940_lrmmvs.png" 
                            width="100" class="rounded-circle bg-white imgfoot " >
                        <div class="row mt-2 text-white text-small h6">
                            <div class="col"></div>
                            <div class="col-8">
                                <p class="text-small">ADRAJAYA Adalah server Pulsa & PPOB atau media penghubung
                                    transaksi digital. kami melayani jual beli pulsa regular, Paket data,
                                    Token Listrik, Pembayaran PDAM, BPJS, E-Commerce, dan juga
                                    topup E-Wallet.</p>
                                    <div class="d-flex justify-content-center mt-2">
                                        <a href="{{'https://telegram.me/adrajayapayment_bot'}}" class=" bg-white rounded-circle">
                                            <i class="fa fa-telegram fa-2x" aria-hidden="true"></i>
                                        </a>
                                        <a href="{{'https://www.facebook.com/adrajaya.rel0ad/'}}" class="mr-4 ml-4 bg-white rounded">
                                            <i class="fa fa-facebook-square fa-2x " aria-hidden="true"></i>
                                        </a>
                                        <a href="{{'https://www.facebook.com/adrajaya.rel0ad/'}}" class=" bg-white rounded">
                                            <i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
                                        </a>
                                        <a href="{{'https://www.facebook.com/adrajaya.rel0ad/'}}" class="mr-4 ml-4 bg-white rounded-circle">
                                            <i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <p class="text-white text-small mt-3 " >© Copyright CV. Adrajaya Digital Teknologi Indonesia 2020.</p>                                                                                                                                                                                 
                            </div>
                            <div class="col"></div>
                        </div>
                    </div>
                    <div class="col-2 mt-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.9827379151375!2d107.6183155143472!3d-6.892667769364056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6534415b3b5%3A0x895e5aece2489318!2sAdrajaya%20Reload!5e0!3m2!1sid!2sid!4v1584899517032!5m2!1sid!2sid" 
                        width="120" height="100" frameborder="1" style="border:1;" allowfullscreen="true" aria-hidden="false" tabindex="0" ></iframe>
                        <p class="text-white text-small mt-1" >Alamat : 
                            Sukasari 2 No 56 RT 01/02
                            sekeloa kec coblong Bandung</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="background-color :white; height: 20px"></div>
    </div>
    @include('sweetalert::alert')

</body>
</html>
