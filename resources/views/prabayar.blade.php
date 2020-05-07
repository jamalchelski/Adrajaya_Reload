@extends('layouts.masterhome')
@section('title', 'Trx-Prabayar')
@section('content')
    @component('components.topcomponent')
                            
    @endcomponent
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-md-8">
                <form method="POST" action="">
                    <div class="form-group row">
                        <div class="col-sm-9">
                            <input type="email" name="trx" class="form-control form-control ttrxx" id="trx" placeholder="No Telp / ID Pelanggan">
                        </div>
                        <div class="col-sm-3">
                            <button type="submit" class="btn btn-success">Lanjutkan</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-1">img</div>
        </div>
    </div>

@endsection
