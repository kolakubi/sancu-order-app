@extends('partials.main')

@section('container')

<div class="row mal-top-navigator">
    <div class="col-12 d-flex flex-row align-items-center">
        <a href="{{route('alamat')}}" class="text-dark">
            <i class="bi bi-arrow-left-short" style="font-size: 2.2em"></i>
        </a>
        <h5 style="margin: 0 0 0 10px">Profil</h5>
    </div>
</div>


<div class="row mal-list-produk-container p-3 d-flex align-items-center">
    <div class="col-11">
        <p style="margin: 0;">Tambah Alamat Baru</p>
    </div>

    <div class="col-1">
        <h4>+</h4>
    </div>
</div>


@endsection