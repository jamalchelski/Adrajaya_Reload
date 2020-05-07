@extends('layouts.masterhome')
@section('title', 'Trx-Transfer Bank')
@section('content')
<div class="container mt-4 ">
    <a href="/home/transfer" class="btn btn-info">
        <h5 class="haa ">Transfer Bank Konvensional</h5>
    </a>
    <a href="/home/transfer/syariah" class="btn btn-success">
        <h5 class="haa ">Transfer Bank Syariah</h5>
    </a>
    <div class="row mt-4 " id="movie-list">
        @foreach ($transfers as $tr)
            <div class="col-md-2 mb-2">
                <div class="img-hover-zoom">
                    <a href="/home/pascabayar/{{ $tr ->kode}}" class="btn btn-white col">
                        <img src="{{ $tr->img }}" class="" height="60" width="60" >
                    </a>
                    </div>
                </div>
        @endforeach
    </div>
</div>
@endsection