@extends('partials.main')

@section('container')

    {{-- @dump(auth()->user()) --}}
    <div class="row mal-top-navigator">
        <div class="col-12 d-flex flex-row align-items-center">
            <a href="/home" class="text-dark">
                <i class="bi bi-arrow-left-short" style="font-size: 2.2em"></i>
            </a>
            <h5 style="margin: 0 0 0 10px">Beranda</h5>
        </div>
    </div>

    <h3 class="text-center">Profil</h3>

    {{-- image --}}
    <div class="row mal-list-produk-container p-3">
        <div class="col-12 d-flex flex-column align-items-center justify-content-center ">
            <img src="/assets/image/logo-sancu-app-1.jpg" class="img-fluid rounded-circle mt-3" style="max-width: 200px;">
            <h5 class="text-center mt-2">{{auth()->user()->name}}</h5>
            <h6 class="text-center mal-text-gold">Member Gold</h6>
        </div>
    </div>

    {{-- menu --}}
    <div class="row mal-list-produk-container">

        {{-- transaksi --}}
        <a href="/profil/transaksi" style="color: #000; text-decoration: none; border-bottom: 0.5px solid rgba(0,0,0,0.1)">
            <div class="row p-3">
                <div class="col-1">
                    <i class="bi bi-cart-check" style="font-size: 1.5em"></i>
                </div>
                <div class="col-10 d-flex align-items-center">
                    <h6 class="ps-2">Transaksi</h6>
                </div>
                <div class="col-1">
                    <i class="bi bi-chevron-right" style="font-size: 1.3em"></i>
                </div>
            </div>
        </a>

        {{-- total pembelian --}}
        <a href="{{route('total_pembelian')}}" style="color: #000; text-decoration: none; border-bottom: 0.5px solid rgba(0,0,0,0.1)">
            <div class="row p-3">
                <div class="col-1">
                    <i class="bi bi-bar-chart-line" style="font-size: 1.5em"></i>
                </div>
                <div class="col-10 d-flex align-items-center">
                    <h6 class="ps-2">Total pembelian</h6>
                </div>
                <div class="col-1">
                    <i class="bi bi-chevron-right" style="font-size: 1.3em"></i>
                </div>
            </div>
        </a>

        {{-- <a href="#" style="color: #000; text-decoration: none;">
            <div class="row p-3">
                <div class="col-1">
                    <i class="bi bi-key" style="font-size: 1.5em"></i>
                </div>
                <div class="col-10 d-flex align-items-center">
                    <h6 class="ps-2">Ubah kata sandi</h6>
                </div>
                <div class="col-1">
                    <i class="bi bi-chevron-right" style="font-size: 1.3em"></i>
                </div>
            </div>
        </a> --}}

        {{-- alamat --}}
        <a href="{{route('alamat')}}" style="color: #000; text-decoration: none; border-bottom: 0.5px solid rgba(0,0,0,0.1)">
            <div class="row p-3">
                <div class="col-1">
                    <i class="bi bi-pin-map" style="font-size: 1.5em"></i>
                </div>
                <div class="col-10 d-flex align-items-center">
                    <h6 class="ps-2">Alamat</h6>
                </div>
                <div class="col-1">
                    <i class="bi bi-chevron-right" style="font-size: 1.3em"></i>
                </div>
            </div>
        </a>

        {{-- bantuan --}}
        <a href="{{route('bantuan')}}" style="color: #000; text-decoration: none;">
            <div class="row p-3">
                <div class="col-1">
                    <i class="bi bi-headset" style="font-size: 1.5em"></i>
                </div>
                <div class="col-10 d-flex align-items-center">
                    <h6 class="ps-2">Bantuan</h6>
                </div>
                <div class="col-1">
                    <i class="bi bi-chevron-right" style="font-size: 1.3em"></i>
                </div>
            </div>
        </a>
    </div>

@endsection