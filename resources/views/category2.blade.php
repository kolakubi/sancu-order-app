@extends('partials.main')

@section('container')
    <div class="row mal-top-navigator">
        <div class="col-12 d-flex flex-row align-items-center">
            <a href="/home" class="text-dark">
                <i class="bi bi-arrow-left-short" style="font-size: 2.2em"></i>
            </a>
            <h5 style="margin: 0 0 0 10px">Home</h5>
        </div>
    </div>

    <h2 class="mb-3 text-capitalize">Produk {{$nama_category}}</h2>

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
                            <input type="text" class="form-control cari" id="inlineFormInputGroup" placeholder="Cari produk di sini . . .">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- end search bar -->

    @if(count($produks) > 0)

    @foreach ($produks as $produk)
        <!-- list produk -->
        <div class="row p-2 mal-list-produk-container list-produk" data-nama-produk="{{$produk->nama_produk}}">
            <div class="col-4 d-flex justify-content-center align-items-center flex-column">
                <img src="{{$server_host}}{{ $produk->gambar_url_produk }}" alt="{{ $produk->nama_produk }}" style="max-width: 90%">
                {!! $produk->tag ? '<p class="bg-danger text-light p-1 rounded mt-1" style="font-size: 12px">'.$produk->tag.'</p>' : ''!!}
                
            </div>
            <div class="col-8 d-flex justify-content-center flex-column">
                <h6>{{ $produk->nama_produk }}</h6>
                {{-- <h6>{{ $produk->harga_produk }}</h6> --}}
                {{-- <p class="m-0 mb-1">Size: 24, 28, 30, 32, 34, 38</p> --}}
                <div class="row" style="display: flex; align-items: flex-end; justify-content: flex-end;">
                    <a href="/produk2/{{ $produk->id }}" class="btn btn-warning" style="max-width: 30%">Beli</a>
                </div>
            </div>
        </div>
        <!-- list produk -->
    @endforeach 

    @else
        {{-- <p class="text-center mt-4 mb-4">tidak ada produk</p> --}}
        <div class="alert alert-danger" role="alert">
            Produk tidak ditemukan
        </div>
    @endif

    <script>
        const inputCari = document.getElementsByClassName('cari');
        const elemListProduk = document.getElementsByClassName('list-produk');

        inputCari[0].addEventListener('keyup', (e)=>{
            let valueCari = inputCari[0].value.toLowerCase();
            console.log(valueCari);

            for(let i=0; i<elemListProduk.length; i++){
                let namaProduk = elemListProduk[i].getAttribute('data-nama-produk').toLowerCase();
                
                // if(namaProduk.includes(valueCari)){
                // if(namaProduk.includes(valueCari)){
                if(namaProduk.includes(valueCari)){
                    elemListProduk[i].classList.remove('d-none');
                    console.log(namaProduk);
                }
                else{
                    elemListProduk[i].classList.add('d-none');
                }
            }
        })
    </script>
    
@endsection