@extends('partials.main')

@section('container')

    {{-- @dump($sliders) --}}

    <!-- slide -->
    <div class="row mb-5">
        @include('partials.slider')
    </div>

    <!-- Promo -->
    <div class="row mb-5">
        <h6>Promo</h6>
        <div class="col-6 rounded">
            <a href="#">
                <img src="assets/image/promo-sancu.jpg" alt="" class="img-fluid rounded">
            </a>
        </div>
        <div class="col-6 rounded">
            <a href="#">
                <img src="assets/image/promo-pretty.jpg" alt="" class="img-fluid rounded">
            </a>
        </div>
    </div>

    <!-- Belanja apa -->
    <div class="row">
        <h6>Belanja Apa Hari Ini</h6>
        <div class="col-6 p-1">
            <a href="/category/sancu"> 
                <div class="mal-home-shadow p-2 rounded">
                    <img src="assets/image/sancu-thumb-home.jpg" alt="sancu" class="img-fluid">
                </div>
            </a>    
        </div>
        <div class="col-6 p-1">
            <a href="/category/boncu"> 
                <div class="mal-home-shadow p-2 rounded">
                    <img src="assets/image/boncu-thumb-home.jpg" alt="boncu" class="img-fluid">
                </div>
            </a>
        </div>
        <div class="col-6 p-1">
            <a href="/category/pretty"> 
                <div class="mal-home-shadow p-2 rounded">
                    <img src="assets/image/pretty-thumb-home.jpg" alt="pretty" class="img-fluid">
                </div>
            </a>
        </div>
        <div class="col-6 p-1">
            <a href="/category/xtreme"> 
                <div class="mal-home-shadow p-2 rounded">
                    <img src="assets/image/xtreme-thumb-home.jpg" alt="xtreme" class="img-fluid">
                </div>
            </a>
        </div>
        <div class="col-6 p-1">
            <a href="/category/kawaru"> 
                <div class="mal-home-shadow p-2 rounded">
                    <img src="assets/image/kawaru-thumb-home.jpg" alt="kawaru" class="img-fluid">
                </div>
            </a>
        </div>
        <div class="col-6 p-1">
            <a href="/category/kaos"> 
                <div class="mal-home-shadow p-2 rounded">
                    <img src="assets/image/kaos-thumb-home.jpg" alt="kawaru" class="img-fluid">
                </div>
            </a>
        </div>
        <div class="col-6 p-1">
            <a href="/category/pelengkap"> 
                <div class="mal-home-shadow p-2 rounded">
                    <img src="assets/image/pelengkap-thumb.png" alt="pelengkap" class="img-fluid">
                </div>
            </a>
        </div>
    </div>

    <!-- Section Produk -->
    {{-- <div class="row">
        <h3>Produk</h3>
        <!-- Produk Detail -->
        <div class="col-md-4 p-3">
            <div class="row bg-danger p-1 rounded">
                <div class="col-4" style="border-right: 0.5px solid rgba(255,255,255, 0.4)">
                    <img src="assets/image/baby-girl-pink-thumb.jpeg" alt="sancu-baby-girl" class="img-fluid rounded-circle" style="max-width: 70px">
                </div>
                <div class="col-6 d-flex justify-content-center align-items-center" style="border-right: 0.5px solid rgba(255,255,255, 0.4)">
                    <p class="text-center text-light">Baby Girl Pink</p>
                </div>
                <div class="col-2 d-flex justify-content-center align-items-center">
                    <button class="btn" id="btn-produk-baby-girl-pink">
                        <i class="bi bi-arrow-down-circle text-light"></i>
                    </button>
                </div>
            </div>
            <div class="row stok-produk-baby-girl-pink">
                <table class="table">
                    <thead class="text-center">
                        <tr>
                            <th>Size</th>
                            <th style="width: 40%">Pesanan</th>
                            <th>Stok</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr style="max-height:20px">
                            <td>24</td>
                            <td><input type="number" min=0 placeholder="pack" class="form-control" width="50px"></td>
                            <td>20</td>
                        </tr>
                        <tr>
                            <td>28</td>
                            <td><input type="number" min=0 placeholder="Kosong" class="form-control" disabled width="50px"></td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>30</td>
                            <td><input type="number" min=0 placeholder="pack" class="form-control" width="50"></td>
                            <td>20</td>
                        </tr>
                    </tbody>
                </table>
                <button class="btn btn-danger"><i class="bi bi-cart"></i> Add to Cart</button>
            </div>
        </div>
        <!-- End Produk Detail -->

        <div class="col-md-4">
            <p class="text-center">xx</p>
        </div>
        <div class="col-md-4">
            <p class="text-center">xx</p>
        </div>
    </div> --}}
    <!-- End Section produk -->


@endsection