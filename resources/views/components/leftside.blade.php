{{-- LEFT SIDE DASHBOADR --}}
<style>
    .lwrapper {
        height: 520px; 
        background-color: #0881c2; 
        border-radius: 10px
    }
    .lflexbox {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }
    .lsaldo {
        border-radius: 20px;
        border-color: #fff;
        border-style: solid;
        border-width: 2px;
    }
    .lmainsaldo {
        border-color: #fff;
        border-bottom-style: solid;
        border-width: 2px;
    }
    .llast {
        margin-bottom: 20px
    }
    

</style>
{{-- Contents --}}
<div class="col shadow-sm  mt-3 text-center img-thumbnail lwrapper" >
            <img src="{{'https://res.cloudinary.com/http-adrajaya-com-dev/image/upload/v1585160188/adrajaya/IMG20200318123925_wkdasl.png'}}" class="rounded-circle  mt-5" height="100" width="100">
            <h6 class="text-white font-weight-bold mt-4" id="Kode-agen" >ADR03</h6>
            <h6 class="text-white font-weight-bold mt-1" id="Nama-agen" >Enda Hernanda ci anak Imuet</h6>
            <div class="container mt-3 lmainsaldo">
                    @component('components.saldo')
                        @slot('title')
                            Saldo : 
                        @endslot
                        @slot('nominal')
                            100.000
                        @endslot
                        @slot('img')
                            /img/plus.png
                        @endslot
                    @endcomponent
                    @component('components.komisi')
                        @slot('title')
                            Komisi : 
                        @endslot
                        @slot('rp')
                            Rp.
                        @endslot
                        @slot('nominal')
                            50.000
                        @endslot
                        @slot('img')
                            /img/trx.png
                        @endslot
                    @endcomponent
                    @component('components.komisi')
                        @slot('title')
                            Point : 
                        @endslot
                        @slot('rp')

                        @endslot
                        @slot('nominal')
                            4.000
                        @endslot
                        @slot('img')
                            /img/trx.png
                        @endslot
                    @endcomponent
            </div>
            <div class="container mt-3 lmainsaldo">
                @component('components.ls')
                    @slot('url')
                        /#
                    @endslot
                    @slot('title')
                        Profil
                    @endslot
                    @slot('img')
                    
                    @endslot
                @endcomponent
                @component('components.ls')
                    @slot('url')
                        /home
                    @endslot
                    @slot('title')
                        Beranda
                    @endslot
                @endcomponent
                @component('components.ls')
                    @slot('url')
                        /#
                    @endslot
                    @slot('title')
                        Riwayat Transaksi
                    @endslot
                @endcomponent
                <div class="llast">
                @component('components.ls')
                    @slot('url')
                        /downline
                    @endslot
                    @slot('title')
                        Downline
                    @endslot
                @endcomponent
                </div>
            </div>
</div>