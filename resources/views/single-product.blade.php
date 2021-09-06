@extends('partials.main')

@section('container')

    <h2>Baby Girl Pink</h2>

    {{-- image --}}
    <div class="row mal-list-produk-container">
        <div class="col-12 ">
            <img src="/assets/image/baby-girl-pink-thumb.jpeg" alt="sancu baby girl pink" class="img-fluid">
        </div>
    </div>

    {{-- description --}}
    <div class="row pt-3 mal-list-produk-container">
        <div class="col-12">
            <h4 class="text-center">Rp 11.000/psg</h4>
            <div >
                <button class="btn btn-inline btn-danger p-1 mb-1">Best Seller</button>
            </div>
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
                        <th>Stok(Pack)</th>
                        <th>Order</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>24</td>
                        <td>50</td>
                        <td><input type="number" min=0 placeholder="isi jumlah order..." class="form-control" width="50px"></td>
                    </tr>
                    <tr>
                        <td>28</td>
                        <td>20</td>
                        <td><input type="number" min=0 placeholder="isi jumlah order..." class="form-control" width="50px"></td>
                    </tr>
                    <tr style="background-color: rgba(0,0,0,0.1)">
                        <td>30</td>
                        <td>kosong</td>
                        <td><input type="number" min=0 placeholder="Stok Kosong..." class="form-control" width="50px" disabled></td>
                    </tr>
                    <tr>
                        <td>32</td>
                        <td>30</td>
                        <td><input type="number" min=0 placeholder="isi jumlah order..." class="form-control" width="50px"></td>
                    </tr>
                    <tr>
                        <td>34</td>
                        <td>20</td>
                        <td><input type="number" min=0 placeholder="isi jumlah order..." class="form-control" width="50px"></td>
                    </tr>
                    <tr>
                        <td>36</td>
                        <td>20</td>
                        <td><input type="number" min=0 placeholder="isi jumlah order..." class="form-control" width="50px"></td>
                    </tr>
                    <tr>
                        <td>38</td>
                        <td>20</td>
                        <td><input type="number" min=0 placeholder="isi jumlah order..." class="form-control" width="50px"></td>
                    </tr>
                    <tr style="background-color: rgba(0,0,0,0.1)">
                        <td>40</td>
                        <td>kosong</td>
                        <td><input type="number" min=0 placeholder="Stok Kosong..." class="form-control" width="50px" disabled></td>
                    </tr>
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
            <h4>Rp 1.000.000</h4>
        </div>
    </div>

    {{-- tombol keranjang --}}
    <div class="row">
        <div class="col-12">
            <a href="/keranjang" class="btn btn-warning col-12">
                <i class="bi bi-cart mal-floar-nav-icon"></i> <strong>Tambah ke Keranjang</strong>
            </a>
        </div>
    </div>

@endsection