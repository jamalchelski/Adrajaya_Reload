@extends('layouts.masterhome')
@section('title', 'Trx-pascabayar')
@section('content')
    <div class="container mt-4 ">
        <h5 class="haa btn btn-info">E-Commerce</h5>
        <div class="row mt-4" id="movie-list">
            @foreach ($ecommerces as $ec)
                <div class="col-md-3 mb-2">
                    <div class="img-hover-zoom">
                        <a href="/home/pascabayar/{{ $ec ->kode}}" class="btn btn-white col">
                            <img src="{{ $ec->img }}" class="" height="50" width="50" >
                            <div class="mt-2">
                                <h6 class="ha">{{ $ec->fiture }}</h6>
                            </div>
                        </a>
                        </div>
                    </div>
            @endforeach
        </div>
    </div>
@endsection