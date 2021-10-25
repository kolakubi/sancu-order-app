@extends('partials.main')

@section('container')

    <h3>Transaksi</h3>
    
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation" style="width: 50%">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true" style="width: 100%">Pesanan Aktif</button>
        </li>
        <li class="nav-item" role="presentation" style="width: 50%">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false" style="width: 100%">Riwayat Pesanan</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">

        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

            {{-- list pesanan Aktif --}}
            <a href="#" style="color: #000; text-decoration: none;">
                <div class="row p-3 border-bottom" style="background-color: #fff">
                    <div class="col-11">
                        <p style="font-size: 0.8em; margin-bottom: -2px;">No Order Pembayaran</p>
                        <h6>DDC141021-00262</h6>
                        <p style="font-size: 0.8em; margin-top: -2px; margin-bottom: 4px">14 Pkt 2021</p>
                        <button class="mal-btn-proses-bayar">
                            Menunggi Pembayaran
                        </button>
                    </div>
                    <div class="col-1 d-flex align-items-center">
                        <i class="bi bi-chevron-right" style="font-size: 1.3em"></i>
                    </div>
                </div>
            </a>

            <a href="#" style="color: #000; text-decoration: none;">
                <div class="row p-3 border-bottom" style="background-color: #fff">
                    <div class="col-11">
                        <p style="font-size: 0.8em; margin-bottom: -2px;">No Order Pembayaran</p>
                        <h6>DDC141021-00262</h6>
                        <p style="font-size: 0.8em; margin-top: -2px; margin-bottom: 4px">14 Pkt 2021</p>
                        <button class="mal-btn-proses-diantar">
                            Diantar
                        </button>
                    </div>
                    <div class="col-1 d-flex align-items-center">
                        <i class="bi bi-chevron-right" style="font-size: 1.3em"></i>
                    </div>
                </div>
            </a>

            
        </div>
           
        
        {{-- list riwayat pesanan --}}
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <a href="#" style="color: #000; text-decoration: none;">
                <div class="row p-3 border-bottom" style="background-color: #fff">
                    <div class="col-11">
                        <p style="font-size: 0.8em; margin-bottom: -2px;">No Order Pembayaran</p>
                        <h6>DDC141021-00262</h6>
                        <p style="font-size: 0.8em; margin-top: -2px; margin-bottom: 4px">14 Pkt 2021</p>
                        <button class="mal-btn-proses-selesai">
                            Selesai
                        </button>
                    </div>
                    <div class="col-1 d-flex align-items-center">
                        <i class="bi bi-chevron-right" style="font-size: 1.3em"></i>
                    </div>
                </div>
            </a>
        
        </div>
    </div>

@endsection