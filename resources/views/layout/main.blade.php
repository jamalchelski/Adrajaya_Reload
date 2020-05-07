<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/ded0e6020d.js"></script>
    <link rel="shortcut icon" type="image/png" href="https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1584909709/adrajaya/title-adr_z95keo_mdyiuh.ico" />
    <title>@yield('title')</title>
  </head>
  <body style="height: 100%;background-image: url(https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1584795833/adrajaya/bgLay_gpybyo.png); background-repeat: no-repeat;
  background-size: cover;background-attachment: fixed;">
    <!-- Navbar -->
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand ml-5" href="{{'/'}}">
            <img src="https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1584795795/adrajaya/ADR_coardk.png" width="130" height="80" alt="">
        </a>
        <form class="form-inline mr-5" method="POST">
            <input class="form-control form-control-sm mr-2" type="search" placeholder="Kode agen" aria-label="Kode-Agen">
            <input class="form-control form-control-sm mr-2" type="search" placeholder="No telp" aria-label="No-Telp">
            <a class="btn btn-primary btn-sm" href="#">Masuk</a>
        </form>
    </nav>
    <nav class="nav light bg-light justify-content-end pb-2 shadow-lg p-2 ">
        <a class="text-dark mr-5 mt-2" href="{{'/'}}">Beranda</a>
        <a class="text-dark mr-5 mt-2" href="{{'/produk'}}">Produk</a> 
        <a class="text-dark mr-5 mt-2" href="{{'/kontak'}}">Kontak Kami</a>
        <a class="text-dark mr-5 mt-2" href="{{'/tentang'}}">Tentang</a>
        <a class="text-dark mr-5 mt-2" href="{{'artikel'}}">Artikel</a>
    </nav>
    
    @yield('content')
    <div class="pb-0">
    <div class="container-fluid" style="background-color :#0881c2; height: 220px">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <h6 class="text-white text-small mt-4">kritik & saran</h6>
                        <form method="POST">
                            <div class="form-group mt-3 ">
                                <input type="text" class="form-control form-control-sm mb-2 " id="formGroupExampleInput" placeholder="Email">
                                <input type="text" class="form-control form-control-sm " id="formGroupExampleInput2" placeholder="Nama">
                                <input type="text" class="form-control form-control-sm mt-2 " id="formGroupExampleInput2" placeholder="Pesan">
                            </div>
                        </form>
                </div>
                <div class="col-8 text-center">
                    <img src="https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1584795796/adrajaya/logoAdraSdwba3cc940_lrmmvs.png" 
                        width="100" class="rounded-circle bg-white " style="margin-top: -50px; border-color: #0881c2; border-style: solid" alt="">
                    <div class="row mt-3 text-white h6">
                        <div class="col"></div>
                        <div class="col-8">
                            <p>ADRAJAYA Adalah server Pulsa & PPOB atau media penghubung
                                transaksi digital. kami melayani jual beli pulsa regular, Paket data,
                                Token Listrik, Pembayaran PDAM, BPJS, E-Commerce, dan juga
                                topup E-Wallet.</p>
                                <div class="d-flex justify-content-center mt-4">
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
                                <p class="text-white text-small mt-5 " >© Copyright CV. Adrajaya Digital Teknologi Indonesia 2020.</p>                                                                                                                                                                                 
                        </div>
                        <div class="col"></div>
                    </div>
                </div>
                <div class="col-2 mt-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.9827379151375!2d107.6183155143472!3d-6.892667769364056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6534415b3b5%3A0x895e5aece2489318!2sAdrajaya%20Reload!5e0!3m2!1sid!2sid!4v1584899517032!5m2!1sid!2sid" 
                    width="150" height="130" frameborder="1" style="border:1;" allowfullscreen="true" aria-hidden="false" tabindex="0" ></iframe>
                    <p class="text-white text-small mt-1" >Alamat : 
                        Sukasari 2 No 56 RT 01/02
                        sekeloa kec coblong Bandung</p>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="background-color :white; height: 20px"></div>
</div>


















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>