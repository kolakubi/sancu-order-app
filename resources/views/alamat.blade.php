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

@foreach($list_alamat as $alamat)
<div class="row mal-list-produk-container p-3 d-flex align-items-center">
    <div class="col-10">
        <h6>{{$alamat->nama_lengkap}} @if($alamat->utama) <span class="text-danger">[{{'Utama'}}]</span> @endif</h6>
        <p>{{$alamat->telepon}}<br>
        {{$alamat->alamat_lengkap}}<br>
        {{$alamat->kecamatan}}, {{$alamat->kota_kabupaten}}, {{$alamat->propinsi}}, {{$alamat->kode_pos}}</p>
    </div>
    <div class="col-2 d-flex align-items-end justify-content-center">
        <i class="bi bi-pin-map-fill text-danger" style="font-size: 1.5em"></i>
    </div>
</div>
@endforeach

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