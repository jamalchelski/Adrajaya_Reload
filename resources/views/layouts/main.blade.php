@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
<div class="container mt-5 " style="height: 700px;">
    <div class="row">
        {{-- LEFT DASHBOARD --}}
        @component('components.leftside')
            
        @endcomponent

        {{-- RIGHT CONTENT --}}
        <div class="col-9">
            <div class="topcontent" > 
                @yield('topbar')
            </div>
            <div class=" hcontent" > 
                @yield('utama')
            </div>
        </div>
    </div>

</div>
@endsection