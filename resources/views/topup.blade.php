@extends('layouts.masterhome')
@section('title', 'Trx-Topup')
@section('content')
<div class="container mt-4 ">
    <h5 class="haa btn btn-info">Top Up Saldo</h5>
    <div class="row mt-4" id="movie-list">
        @foreach ($topups as $top)
            <div class="col-md-2 mb-2">
                <div class="img-hover-zoom">
                    <a href="/home/pascabayar/{{ $top ->kode}}" class="btn btn-white col">
                        <img src="{{ $top->img }}" class="" height="50" width="50" >
                        <div class="mt-2">
                            <h6 class="ha">{{ $top->fiture }}</h6>
                        </div>
                    </a>
                    </div>
                </div>
        @endforeach
    </div>
</div>
@endsection