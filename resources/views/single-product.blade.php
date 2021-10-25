@extends('partials.main')

@section('container')

    <h2>{{ $produk->nama_produk }}</h2>

    {{-- image --}}
    <div class="row mal-list-produk-container">
        <div class="col-12 ">
            <img src="{{ $produk->gambar_url_produk }}" alt="{{ $produk->nama_produk }}" class="img-fluid">
        </div>
    </div>

    {{-- description --}}
    <div class="row pt-3 mal-list-produk-container">
        <div class="col-12">
            {{-- <h4 class="text-center">{{  $produk->harga_produk    }}</h4> --}}
            {!! $produk->tag ? 
            '<div class="d-flex align-items-center justify-content-center">
                <button class="btn btn-inline btn-danger p-1 mb-1">'.$produk->tag.'</button>
            </div>' :
             ''!!}
            <p>silakan input pesanan anda dengan mengisi kolom di bawah lalu klik "tambahkan ke keranjang"</p>
        </div>
    </div>

    {{-- form pembelian --}}
    <div class="row mal-list-produk-container">
        <div class="col-12">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th>Size</th>
                        <th>Harga</th>
                        <th>Stok<br>(Pack)</th>
                        <th>Order</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- foreach --}}
                    @foreach ($stoks as $stok)
                    <tr style={{$stok->jumlah_stok < 1 ? "background-color:rgba(0,0,0,0.1)" : ""}}>
                        <td>{{ $stok->size }}</td>
                        <td id="harga-size-{{$stok->size}}">{{  $stok->harga_produk }}</td>
                        <td>{{ $stok->jumlah_stok }}</td>
                        <td>
                            <input type="number" min=0 class="form-control" width="50px" value=0 
                            id="input-size-{{$stok->size}}" 
                            data-id-produk-detail={{$stok->id}}
                            data-id-produk={{$stok->id_produk}}
                            {{$stok->jumlah_stok < 1 ? "disabled" : ""}}>
                        </td>
                        <td id="total-harga-size-{{$stok->size}}">
                            0
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

    {{-- total --}}
    <div class="row mal-list-produk-container p-4">
        <div class="col-6">
            <h4 class="text-left">Subtotal</h4>
        </div>
        <div class="col-6" style="display: flex; align-items: flex-end; justify-content: flex-end;">
            <h4 id="subtotal-harga">0</h4>
        </div>
    </div>

    {{-- tombol keranjang --}}
    <div class="row">
        <div class="col-12">
            <a href="/keranjang" class="btn btn-warning col-12" id="tombol-add-to-cart">
                <i class="bi bi-cart mal-floar-nav-icon"></i> <strong>Tambah ke Keranjang</strong>
            </a>
        </div>
    </div>
    
    <script>
        
    </script>
@endsection