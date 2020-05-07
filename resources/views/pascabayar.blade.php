@extends('layouts.app')
@section('title', 'Trx-pascabayar')
@section('content')
<div class="container mt-5 " style="height: 700px;">
    <div class="row">
        {{-- LEFT DASHBOARD --}}
        @component('components.leftside')
            
        @endcomponent

        {{-- RIGHT CONTENT --}}
        <div class="col-9">

            {{-- TOP CONTENT --}}
            @component('components.topmenu')
                
            @endcomponent

            {{-- CONTENT BUTTOM --}}

            @component('layouts.maincontent')
                @section('contents')
                    <div class="container mt-4 ">
                        <h5 class="haa btn btn-info">Tagihan Pascabayar</h5>
                        <div class="row mt-4" id="movie-list">
                            @foreach ($prabayars as $pbr)
                                <div class="col-md-3 mb-2">
                                    <div class="img-hover-zoom">
                                        <a href="/home/pascabayar/{{ $pbr ->kode}}" class="btn btn-white col">
                                            <img src="{{ $pbr->img }}" class="" height="50" width="50" >
                                            <div class="mt-2">
                                                <h6 class="ha">{{ $pbr->fiture }}</h6>
                                            </div>
                                        </a>
                                        </div>
                                    </div>
                            @endforeach
                        </div>
                    </div>
                @endsection
            @endcomponent
            
        </div>
    </div>

</div>
@endsection