@extends('partials.main')

@section('container')

    <h1 class="mb-3">Produk Sancu</h1>

    <!-- search bar -->
    <div class="row">
        <form action="">
            <div class="form-row align-items-center">
                <div class="col-auto">
                    <div class="col-auto">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text bg-light">
                                    <i class="bi bi-search"></i>
                                </div>
                            </div>
                            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Cari produk di sini . . .">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- end search bar -->

    <!-- list produk -->
    <div class="row p-1 mt-2">
        <div class="col-4 d-flex justify-content-center align-items-center flex-column">
            <img src="/assets/image/baby-girl-pink-thumb.jpeg" alt="sancu baby girl" style="max-width: 90%">
            <p class="bg-danger text-light p-1 rounded" style="font-size: 12px">Best Seller</p>
        </div>
        <div class="col-8 d-flex justify-content-center flex-column">
            <h6>Sancu Baby Girl Pink</h6>
            <h6>Rp 11.000</h6>
            <p class="m-0 mb-1">Size: 24, 28, 30, 32, 34, 38</p>
            <div class="row" style="display: flex; align-items: flex-end; justify-content: flex-end; ">
                <button class="btn btn-warning" style="max-width: 30%">Beli</button>
            </div>
            
        </div>
    </div>
    <hr>
    <!-- list produk -->

    <!-- list produk -->
    <div class="row p-1 mt-2">
        <div class="col-4 d-flex justify-content-center align-items-center flex-column">
            <img src="/assets/image/pika-pika-thumb.jpeg" alt="sancu baby girl" style="max-width: 90%">
            {{-- <p class="bg-danger text-light p-1 rounded" style="font-size: 12px">Best Seller</p> --}}
        </div>
        <div class="col-8 d-flex justify-content-center flex-column">
            <h6>Sancu Pika-pika</h6>
            <h6>Rp 11.000</h6>
            <p class="m-0 mb-1">Size: 24, 28, 30, 32, 34, 38</p>
            <div class="row" style="display: flex; align-items: flex-end; justify-content: flex-end; ">
                <button class="btn btn-warning" style="max-width: 30%">Beli</button>
            </div>
            
        </div>
    </div>
    <hr>
    <!-- list produk -->

    <!-- list produk -->
    <div class="row p-1 mt-2">
        <div class="col-4 d-flex justify-content-center align-items-center flex-column">
            <img src="/assets/image/doraemon-thumb.jpeg" alt="sancu baby girl" style="max-width: 90%">
            <p class="bg-danger text-light p-1 rounded" style="font-size: 12px">Best Seller</p>
        </div>
        <div class="col-8 d-flex justify-content-center flex-column">
            <h6>Sancu Doraemon</h6>
            <h6>Rp 11.000</h6>
            <p class="m-0 mb-1">Size: 24, 28, 30, 32, 34, 38</p>
            <div class="row" style="display: flex; align-items: flex-end; justify-content: flex-end; ">
                <button class="btn btn-warning" style="max-width: 30%">Beli</button>
            </div>
            
        </div>
    </div>
    <hr>
    <!-- list produk -->

    <!-- list produk -->
    <div class="row p-1 mt-2">
        <div class="col-4 d-flex justify-content-center align-items-center flex-column">
            <img src="/assets/image/dino-thumb.jpeg" alt="sancu baby girl" style="max-width: 90%">
            {{-- <p class="bg-danger text-light p-1 rounded" style="font-size: 12px">Best Seller</p> --}}
        </div>
        <div class="col-8 d-flex justify-content-center flex-column">
            <h6>Sancu Dino</h6>
            <h6>Rp 11.000</h6>
            <p class="m-0 mb-1">Size: 24, 28, 30, 32, 34, 38</p>
            <div class="row" style="display: flex; align-items: flex-end; justify-content: flex-end; ">
                <button class="btn btn-warning" style="max-width: 30%">Beli</button>
            </div>
            
        </div>
    </div>
    <hr>
    <!-- list produk -->
@endsection