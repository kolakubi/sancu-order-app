@extends('partials.main')

@section('container')

    <h3>Profil</h3>

    {{-- image --}}
    <div class="row mal-list-produk-container p-3">
        <div class="col-12 ">
            <img src="/assets/image/profil-foto-thumb.jpg" class="img-fluid rounded-circle mt-3">
            <h5 class="text-center mt-2">Sancu</h5>
            <h6 class="text-center mal-text-gold">Member Gold</h6>
        </div>
    </div>

    {{-- menu --}}
    <div class="row mal-list-produk-container">
        <a href="/profil/transaksi" style="color: #000; text-decoration: none;">
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

        <a href="#" style="color: #000; text-decoration: none;">
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
        </a>

        <a href="#" style="color: #000; text-decoration: none;">
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

        <a href="#" style="color: #000; text-decoration: none;">
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