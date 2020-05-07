@extends('layouts.masterhome')
@section('title', 'Dashboard')
@section('content')
@if(session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif
<div class="bg-white mt-3 mt-2" style="height: 100px;">
    <div class="container">
        <div class="row justify-content-between mx-2">
            <div style="width: 230px;" class="hachartw">
                <div class="t-content">
                    <h6 class="haac mb-1">Trx Sukses Hari Ini</h6>
                    <h1 class="mb-1 haacn ml-2 text-success">0</h1>
                    <span class="hachart">Nominal : </span>
                    <span class="p-1 hachart font-weight-bold ">Rp 1.000.500</span>
                </div>
            </div>
            <div style="width: 230px;" class="hachartw">
                <div class="t-content">
                    <h6 class="haac mb-1">Trx Pending Hari Ini</h6>
                    <h1 class="mb-1 haacn ml-2 text-warning">0</h1>
                    <span class="hachart">Nominal : </span>
                    <span class="p-1 hachart font-weight-bold ">Rp 0</span>
                </div>
            </div>
            <div style="width: 230px;" class="hachartw">
                <div class="t-content">
                    <h6 class="haac mb-1">Trx Gagal Hari Ini</h6>
                    <h1 class="mb-1 haacn ml-2 text-danger">0</h1>
                    <span class="hachart">Nominal : </span>
                    <span class=" p-1 hachart font-weight-bold">Rp 0</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container hachartw mt-5" style="height: 350px;">

</div>
@endsection