@extends('layouts.app')

@section('title', 'Kontak Adrajaya')
@section('content')
<style>
    .my-jumbotron{
        background-color: #7ca8ca;
    }
    .title {
        font-family:monospace;
        color: aliceblue
    }
    .flexbox {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }
    .maincontainer {
        height:auto;
    max-height:200%;
    overflow:auto;
    margin-bottom: 100px; 
    }
    .maincard{
        width: 15rem;
        margin: 20px;
    }

</style>

<div class="container shadow-lg p-3 bg-white rounded mt-5 text-center mt-5 maincontainer" >
    <div class="jumbotron jumbotron-fluid my-jumbotron">
        <div class="container">
            <h1 class="display-4 title">KONTAK KAMI</h1>
        </div>
    </div>

    <div class="container flexbox">
        @foreach ($contacts as $cont)
            <div class="card maincard" >
                <div class="card-body">
                <h5 class=" px-5" class="card-title">{{ $cont->tipe }}</h5>
                <a href="{{ $cont->link }}" class="btn btn-primary">{{ $cont->data }}</a>
                </div>
            </div>
        @endforeach
        
    </div>

</div>
@endsection