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

    <h3 class="text-center">Notifikasi</h3>

    <div class="row mal-list-produk-container" style="padding: 0">
        @foreach($notification as $notif)
            <a href="/notification/read/{{$notif->id}}" style='text-decoration: none; color: inherit; padding:15px 25px; @if(!$notif->dilihat) background-color: #ffeded; @endif'>
                <div class="col-12">
                    
                    @if($notif->tipe == '3')
                        <p><strong>Pesanan Telah Diroses</strong></p>
                        <p>pesanan no #{{$notif->id_order}} telah diproses, silakan lakukan pembayaran</p>
                    @elseif($notif->tipe == '4')
                        <p><strong>Pesanan Telah Dikirim</strong></p>
                        <p>pesanan no #{{$notif->id_order}} telah dikirim, silakan cek resi dan tekan tombol "Pesanan Diterima" jika pesanan sudah sampai</p>
                    @endif
                    <p class="text-secondary"><i class="bi bi-clock"></i> {{$notif->created_at}}</p>
                </div>
            </a>
        @endforeach
    </div>

@endsection