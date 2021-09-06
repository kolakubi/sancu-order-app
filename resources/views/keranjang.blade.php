@extends('partials.main')

@section('container')

    <h2>Keranjang Pemesanan</h2>

    {{-- produk di cart --}}
    <div class="row mal-list-produk-container pt-3">
        
        <div class="col-12 d-flex align-items-center flex-row-reverse">
            <button class="btn btn-danger btn-ms rounded">
                <i class="bi bi-trash-fill"></i>
            </button>
        </div>
 
        <div class="col-2">
            <img src="/assets/image/baby-girl-pink-thumb.jpeg" alt="sancu baby girl" class="img-fluid">
        </div>
        <div class="col-10">
            <div class="row">

            </div>
            <h6>Sancu Baby Girl Pink</h6>
            <table class="table text-center table-keranjang">
                <thead>
                    <tr>
                        <th>Size</th>
                        <th>Qty</th>
                        <th>Total</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>24</td>
                        <td>
                            <div class="d-flex align-items-center justify-content-center">
                                <button class="btn btn-secondary p-2">-</button>
                                <input type="number" min=0 value="10" class="form-control p-2">
                                <button class="btn btn-warning p-2">+</button>
                            </div>
                        </td>
                        <td><p style="font-size: 14px;">Rp 120.000</p></td>
                        <td>
                            <button class="btn p-1">
                                <i class="bi bi-trash-fill"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>28</td>
                        <td>
                            <div class="d-flex align-items-center justify-content-center">
                                <button class="btn btn-secondary p-2">-</button>
                                <input type="number" min=0 value="1" class="form-control p-2">
                                <button class="btn btn-warning p-2">+</button>
                            </div>
                        </td>
                        <td><p style="font-size: 14px;">Rp 12.000</p></td>
                        <td>
                            <button class="btn p-1">
                                <i class="bi bi-trash-fill"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>24</td>
                        <td>
                            <div class="d-flex align-items-center justify-content-center">
                                <button class="btn btn-secondary p-2">-</button>
                                <input type="number" min=0 value="5" class="form-control p-2">
                                <button class="btn btn-warning p-2">+</button>
                            </div>
                        </td>
                        <td><p style="font-size: 14px;">Rp 60.000</p></td>
                        <td>
                            <button class="btn p-1">
                                <i class="bi bi-trash-fill"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="d-flex align-items-center flex-row-reverse">
                <h6 class="text-right">Sub Total: <span style="font-weight: bold; font-size: 1.1em">Rp 192.000</span></h6>
            </div>
        </div>
    </div>

    <div class="row mal-list-produk-container pt-3">
        <div class="col-12 d-flex align-items-center flex-row-reverse">
            <button class="btn btn-danger btn-ms rounded">
                <i class="bi bi-trash-fill"></i>
            </button>
        </div>

        <div class="col-2">
            <img src="/assets/image/pika-pika-thumb.jpeg" alt="sancu baby girl" class="img-fluid">
        </div>
        <div class="col-10">
            <h6>Sancu Baby Girl Pink</h6>
            <table class="table text-center table-keranjang">
                <thead>
                    <tr>
                        <th>Size</th>
                        <th>Qty</th>
                        <th>Total</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>24</td>
                        <td>
                            <div class="d-flex align-items-center justify-content-center">
                                <button class="btn btn-secondary p-2">-</button>
                                <input type="number" min=0 value="10" class="form-control p-2">
                                <button class="btn btn-warning p-2">+</button>
                            </div>
                        </td>
                        <td><p style="font-size: 15px;">Rp 120.000</p></td>
                        <td>
                            <button class="btn p-1">
                                <i class="bi bi-trash-fill"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>28</td>
                        <td>
                            <div class="d-flex align-items-center justify-content-center">
                                <button class="btn btn-secondary p-2">-</button>
                                <input type="number" min=0 value="1" class="form-control p-2">
                                <button class="btn btn-warning p-2">+</button>
                            </div>
                        </td>
                        <td><p style="font-size: 15px;">Rp 12.000</p></td>
                        <td>
                            <button class="btn p-1">
                                <i class="bi bi-trash-fill"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>24</td>
                        <td>
                            <div class="d-flex align-items-center justify-content-center">
                                <button class="btn btn-secondary p-2">-</button>
                                <input type="number" min=0 value="5" class="form-control p-2">
                                <button class="btn btn-warning p-2">+</button>
                            </div>
                        </td>
                        <td><p style="font-size: 15px;">Rp 60.000</p></td>
                        <td>
                            <button class="btn p-1">
                                <i class="bi bi-trash-fill"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="d-flex align-items-center flex-row-reverse">
                <h6 class="text-right">Sub Total: <span style="font-weight: bold; font-size: 1.1em">Rp 192.000</span></h6>
            </div>
        </div>
    </div>

    {{-- total keranjang --}}
    <div class="row mal-list-produk-container p-4">
        <div class="col-6">
            <h6>Total Keranjang</h6>
        </div>
        <div class="col-6 d-flex align-items-center flex-row-reverse">
            <span style="font-weight: bold; font-size: 1.2em">Rp 384.000</span>
        </div>
    </div>

    {{-- button Checkout --}}
    <div class="row mt-3">
        <div class="col-6">
            <a href="/" class="btn col-12 btn-secondary">
                <i class="bi bi-cart mal-floar-nav-icon text-light"></i> 
                Belanja Lagi
            </a>
        </div>
        <div class="col-6">
            <button class="btn col-12 btn-warning">
                <i class="bi bi-cart mal-floar-nav-icon"></i> 
                Checkout
            </button>
        </div>
    </div>

@endsection