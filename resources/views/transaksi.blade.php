@extends('partials.main')

@section('container')

    <div class="row mal-top-navigator">
        <div class="col-12 d-flex flex-row align-items-center">
            <a href="/profil" class="text-dark">
                <i class="bi bi-arrow-left-short" style="font-size: 2.2em"></i>
            </a>
            <h5 style="margin: 0 0 0 10px">Profil</h5>
        </div>
    </div>

    <h3 class="text-center">Transaksi</h3>
    
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation" style="width: 33%">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true" style="width: 100%">Pesanan Aktif</button>
        </li>
        <li class="nav-item" role="presentation" style="width: 33%">
            <button class="nav-link" id="dibatalkan-tab" data-bs-toggle="tab" data-bs-target="#dibatalkan" type="button" role="tab" aria-controls="dibatalkan" aria-selected="false" style="width: 100%">Dibatalkan</button>
        </li>
        <li class="nav-item" role="presentation" style="width: 33%">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false" style="width: 100%">Selesai</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">

        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            @foreach($orders as $order)
                @if($order->status != '5' && $order->status != '0')
                <a href="/profil/transaksi_detail/{{$order->id}}" style="color: #000; text-decoration: none;">
                    <div class="row p-3 border-bottom" style="background-color: #fff">
                        <div class="col-11">
                            <p style="font-size: 0.8em; margin-bottom: -2px;">No Order Pembayaran</p>
                            <h6>{{$order->id}}</h6>
                            <p style="font-size: 0.8em; margin-top: -2px; margin-bottom: 4px">{{$order->created_at}}</p>
                            @if($order->status == '1')
                                <button class="mal-btn-proses-bayar">
                                    Menunggu ongkir
                                </button>
                            @elseif($order->status == '2')
                                <button class="mal-btn-proses-diantar">
                                    Proses
                                </button>
                            @elseif($order->status == '3')
                                <button class="mal-btn-proses-diantar">
                                    Konfirmasi Pembayaran
                                </button>
                            @elseif($order->status == '4')
                                <button class="mal-btn-proses-diantar">
                                    Dikirim
                                </button>
                            @endif
                            {{-- dropship --}}
                            @if($order->dropship)
                                <span class="text-secondary">Dropship</span>
                            @endif
                        </div>
                        <div class="col-1 d-flex align-items-center">
                            <i class="bi bi-chevron-right" style="font-size: 1.3em"></i>
                        </div>
                    </div>
                </a>
                @endif
            @endforeach
        </div>

        {{-- list riwayat pesanan --}}
        <div class="tab-pane fade" id="dibatalkan" role="tabpanel" aria-labelledby="profile-tab">
            @foreach($orders as $order)
                @if($order->status == '0')
                <a href="/profil/transaksi_detail/{{$order->id}}" style="color: #000; text-decoration: none;">
                    <div class="row p-3 border-bottom" style="background-color: #fff">
                        <div class="col-11">
                            <p style="font-size: 0.8em; margin-bottom: -2px;">No Order Pembayaran</p>
                            <h6>{{$order->id}}</h6>
                            <p style="font-size: 0.8em; margin-top: -2px; margin-bottom: 4px">{{$order->created_at}}</p>
                            <button class="mal-btn-proses-bayar">
                                Dibatalkan
                            </button>
                        </div>
                        <div class="col-1 d-flex align-items-center">
                            <i class="bi bi-chevron-right" style="font-size: 1.3em"></i>
                        </div>
                    </div>
                </a>
                @endif
            @endforeach
        </div>
           
        
        {{-- list riwayat pesanan --}}
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            @foreach($orders as $order)
                @if($order->status == '5')
                <a href="/profil/transaksi_detail/{{$order->id}}" style="color: #000; text-decoration: none;">
                    <div class="row p-3 border-bottom" style="background-color: #fff">
                        <div class="col-11">
                            <p style="font-size: 0.8em; margin-bottom: -2px;">No Order Pembayaran</p>
                            <h6>{{$order->id}}</h6>
                            <p style="font-size: 0.8em; margin-top: -2px; margin-bottom: 4px">{{$order->created_at}}</p>
                            <button class="mal-btn-proses-selesai">
                                Selesai
                            </button>
                        </div>
                        <div class="col-1 d-flex align-items-center">
                            <i class="bi bi-chevron-right" style="font-size: 1.3em"></i>
                        </div>
                    </div>
                </a>
                @endif
            @endforeach
        </div>
        
    </div>

@endsection