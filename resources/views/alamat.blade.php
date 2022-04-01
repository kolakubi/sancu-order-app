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

{{-- list alamat --}}
@foreach($list_alamat as $alamat)
<div class="row mal-list-produk-container p-3 d-flex align-items-center">
    <div class="row">
        <div class="col-10">
            <h6>{{$alamat->nama_lengkap}} @if($alamat->utama) <span class="text-danger">[{{'Utama'}}]</span> @endif</h6>
            <p>{{$alamat->telepon}}<br>
            {{$alamat->alamat_lengkap}}<br>
            {{$alamat->kecamatan}}, {{$alamat->kota_kabupaten}}, {{$alamat->propinsi}}, {{$alamat->kode_pos}}</p>
        </div>
        <div class="col-2 d-flex align-items-center justify-content-center">
            @if($alamat->utama)
                <i class="bi bi-pin-map-fill text-danger" style="font-size: 1.5em"></i>
            @endif
        </div>
    </div>
    @if(!$alamat->utama)
    <div class="row">
        <div class="col-6">
            <a href="/profil/alamat_utama/{{$alamat->id}}"class="btn btn-sm btn-success text-white">Jadikan utama</a>
        </div>
        
    </div>
    @endif
    
</div>
@endforeach

{{-- tombol add alamat --}}
<a style="text-decoration: none; color: #000" href="{{route('add_alamat')}}">
    <div class="row mal-list-produk-container p-3 d-flex align-items-center">
        <div class="col-11">
            <p style="margin: 0;">Tambah Alamat Baru</p>
        </div>
    
        <div class="col-1">
            <h4>+</h4>
        </div>
    </div>
</a>

@endsection