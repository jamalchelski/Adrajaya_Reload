<style>
    @media (min-width: 576px) and (max-width: 767.98px) { 
        .parent {
            display: flex;
        }
    }
</style>


<div class=" shadow-sm  mt-3 "style=" margin-bottom: 5px;margin-left: 5px" >
    <div class="container parent">
        <div class="row">
            @component('components.menu')
                @slot('link')
                    /home/prabayar
                @endslot
                    Prabayar
            @endcomponent
            @component('components.menu')
                @slot('link')
                /home/pascabayar
                @endslot
                Tagihan Paskabayar
            @endcomponent
            @component('components.menu')
                @slot('link')
                    /home/topup
                @endslot
                Layanan Topup
            @endcomponent
            @component('components.menu')
                @slot('link')
                    /home/game
                @endslot
                Voucher Game
            @endcomponent
            @component('components.menu')
                @slot('link')
                    /home/transfer
                @endslot
                Transfer Bank
            @endcomponent
            @component('components.menu')
                @slot('link')
                    /home/ecommerce
                @endslot
                E-Commerce
            @endcomponent
            
        </div>
    </div>
</div>