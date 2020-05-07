@extends('layouts.app')

@section('content')
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="container mt-3 mb-5 ">
        <div class="col-md-6 bg-white offset-md-3 p-3 border border-primary rounded">
            <form method="post" action="{{ route('pesan')}}">
                @csrf
                <div class="form-group">
                    <label for="nama">NAMA</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Nama" name="nama"  >
                    <span class="invalid-feedback">kolom nama masih kosong</span>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" name="email">
                    <span class="invalid-feedback">kolom email masih kosong</span>
                </div>
                <div class="form-group">
                    <label for="pesan">Pesan</label>
                    <textarea type="text" class="form-control @error('pesan') is-invalid @enderror" id="pesan" placeholder="Email" name="pesan" rows="7"></textarea>
                    <span class="invalid-feedback">kolom pesan masih kosong</span>
                </div>
                <button class="btn btn-info btn-sm" type="submit">kirim</button>
            </form>
        </div>
    </div>
@endsection