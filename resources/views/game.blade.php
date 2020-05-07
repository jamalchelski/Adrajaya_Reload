@extends('layouts.masterhome')
@section('title', 'Trx-GAME')
@section('content')
<div class="container mt-4 ">
    <h5 class="haa btn btn-info">Voucher Game</h5>
    <div class="row mt-4" id="movie-list">
        @foreach ($games as $gm)
            <div class="col-md-2 mb-2">
                <div class="img-hover-zoom">
                    <a href="/home/pascabayar/{{ $gm ->kode}}" class="btn btn-white col">
                        <img src="{{ $gm->img }}" class="" height="50" width="50" >
                        <div class="mt-2">
                            <h6 class="ha">{{ $gm->fiture }}</h6>
                        </div>
                    </a>
                    </div>
                </div>
        @endforeach
    </div>
</div>
@endsection