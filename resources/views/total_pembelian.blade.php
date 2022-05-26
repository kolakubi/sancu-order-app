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

<div class="row mal-list-produk-container p-3">
    <div class="col-12 text-center">
        <form method="post">
            @csrf
            <div class="mb-3">
              <label for="tanggaldari" class="form-label">Tanggal dari</label>
              <input type="date" class="form-control" id="tanggaldari" aria-describedby="tanggaldari" name="tanggaldari" required>
            </div>
            <div class="mb-3">
                <label for="tanggalsampai" class="form-label">sampai</label>
                <input type="date" class="form-control" id="tanggalsampai" aria-describedby="tanggalsampai" name="tanggalsampai" required>
              </div>
            <button type="submit" class="btn btn-primary">Cek Pembelian</button>
        </form>
    </div>
</div>

<div class="row mal-list-produk-container p-3">
    <div class="col-12 text-center">
        <table class="table">
            <thead>
                <tr>
                    <th>Sancu</th>
                    <th>Boncu</th>
                    <th>Pretty</th>
                    <th>Xtreme</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$sancu}}</td>
                    <td>{{$boncu}}</td>
                    <td>{{$pretty}}</td>
                    <td>{{$xtreme}}</td>
                </tr>
                <tr>
                    <td>Rp{{number_format($pembelian_sancu, 0)}}</td>
                    <td>Rp{{number_format($pembelian_boncu, 0)}}</td>
                    <td>Rp{{number_format($pembelian_pretty, 0)}}</td>
                    <td>Rp{{number_format($pembelian_xtreme, 0)}}</td>
                </tr>
            </tbody>
        </table>
        <h3>Total Item: {{$sancu+$boncu+$pretty+$xtreme}}</h3>
        <h3>Pembelian: Rp{{number_format($pembelian_sancu+$pembelian_boncu+$pembelian_pretty+$pembelian_xtreme, 0)}}</h3>
    </div>
</div>



@endsection