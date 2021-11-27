@extends('partials.main')

@section('container')

    <div class="row mal-top-navigator">
        <div class="col-12 d-flex flex-row align-items-center">
            <a href="{{ url()->previous() }}" class="text-dark">
                <i class="bi bi-arrow-left-short" style="font-size: 2.2em"></i>
            </a>
            <h5 style="margin: 0 0 0 10px">List Produk</h5>
        </div>
    </div>

    <h2 class="text-center">{{ $produk->nama_produk }}</h2>

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

    {{-- <form action="/produk/addtocart2" method="POST">
        @csrf --}}
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
                                max={{ $stok->jumlah_stok }}  
                                id="input-size-{{$stok->size}}" 
                                data-id-produk-detail={{$stok->id}}
                                data-id-produk={{$stok->id_produk}}
                                {{$stok->jumlah_stok < 1 ? "disabled" : ""}}
                                name="{{$stok->id}}">
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
            {{-- <button type="submit" class="btn btn-warning col-12">
                <i class="bi bi-cart mal-floar-nav-icon"></i> <strong>Tambah ke Keranjang</strong>
            </button> --}}
        </div>
    </div>
    {{-- </form> --}}

    {{-- sweet alert --}}
    <script src="/assets/sweet-alert/sweetalert2.all.min.js"></script>
    
    <script>
        const hargaSize21 = document.getElementById('harga-size-21').innerHTML;
        const inputSize21 = document.getElementById('input-size-21');
        const totalHargaSize21 = document.getElementById('total-harga-size-21');

        const hargaSize24 = document.getElementById('harga-size-24').innerHTML;
        const inputSize24 = document.getElementById('input-size-24');
        const totalHargaSize24 = document.getElementById('total-harga-size-24');

        const hargaSize28 = document.getElementById('harga-size-28').innerHTML;
        const inputSize28 = document.getElementById('input-size-28');
        const totalHargaSize28 = document.getElementById('total-harga-size-28');

        const hargaSize30 = document.getElementById('harga-size-30').innerHTML;
        const inputSize30 = document.getElementById('input-size-30');
        const totalHargaSize30 = document.getElementById('total-harga-size-30');

        const hargaSize32 = document.getElementById('harga-size-32').innerHTML;
        const inputSize32 = document.getElementById('input-size-32');
        const totalHargaSize32 = document.getElementById('total-harga-size-32');

        const hargaSize34 = document.getElementById('harga-size-34').innerHTML;
        const inputSize34 = document.getElementById('input-size-34');
        const totalHargaSize34 = document.getElementById('total-harga-size-34');

        const hargaSize36 = document.getElementById('harga-size-36').innerHTML;
        const inputSize36 = document.getElementById('input-size-36');
        const totalHargaSize36 = document.getElementById('total-harga-size-36');

        const hargaSize38 = document.getElementById('harga-size-38').innerHTML;
        const inputSize38 = document.getElementById('input-size-38');
        const totalHargaSize38 = document.getElementById('total-harga-size-38');

        const hargaSize40 = document.getElementById('harga-size-40').innerHTML;
        const inputSize40 = document.getElementById('input-size-40');
        const totalHargaSize40 = document.getElementById('total-harga-size-40');

        const subtotalHarga = document.getElementById('subtotal-harga');

        const listInputSize = [inputSize21, inputSize24, inputSize28, inputSize30, inputSize32, inputSize34, inputSize36, inputSize38, inputSize40];

        const listHargaSize = [hargaSize21, hargaSize24, hargaSize28, hargaSize30, hargaSize32, hargaSize34, hargaSize36, hargaSize38, hargaSize40];

        const listTotalHargaSize = [totalHargaSize21, totalHargaSize24, totalHargaSize28, totalHargaSize30, totalHargaSize32, totalHargaSize34, totalHargaSize36, totalHargaSize38, totalHargaSize40]; 

        let finalSubTotal = 0;
        
        for(let i=0; i<listInputSize.length; i++){
            listInputSize[i].addEventListener('change', ()=>{

                // jika input > stok
                if(parseInt(listInputSize[i].value) > parseInt(listInputSize[i].getAttribute('max'))){
                    listInputSize[i].value = parseInt(listInputSize[i].getAttribute('max'));
                }

                // hitung total cart 
                listTotalHargaSize[i].innerHTML = listHargaSize[i]*listInputSize[i].value;
                finalSubTotal = parseInt(totalHargaSize21.innerHTML)
                +parseInt(totalHargaSize24.innerHTML)
                +parseInt(totalHargaSize28.innerHTML)
                +parseInt(totalHargaSize30.innerHTML)
                +parseInt(totalHargaSize32.innerHTML)
                +parseInt(totalHargaSize34.innerHTML)
                +parseInt(totalHargaSize36.innerHTML)
                +parseInt(totalHargaSize38.innerHTML)
                +parseInt(totalHargaSize40.innerHTML);

                subtotalHarga.innerHTML = 'Rp '+finalSubTotal.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            })
        }

        // jika cart kosong
        const tombolAddToCart = document.getElementById('tombol-add-to-cart');
        tombolAddToCart.addEventListener('click', (e)=>{
            if(inputSize21.value == 0 &&
                inputSize24.value == 0 &&
                inputSize28.value == 0 &&
                inputSize30.value == 0 &&
                inputSize32.value == 0 &&
                inputSize34.value == 0 &&
                inputSize36.value == 0 &&
                inputSize38.value == 0 &&
                inputSize40.value == 0){
                    e.preventDefault();
                    
                    Swal.fire({
                        icon: 'error',
                        title: 'Mohon Pilih Item',
                        text: 'Tidak ada item yang dipilih',
                    })
                }

            else{
                e.preventDefault();
                // ambil data yg dipilih
                const dataForAjax = [];
                for(let i=0; i<listInputSize.length; i++){
                    if(listInputSize[i].value > 0){
                        // console.log(listInputSize[i].getAttribute('data-id-produk-detail'));
                        dataForAjax.push({
                            'id_produk_detail': listInputSize[i].getAttribute('data-id-produk-detail'),
                            'id_produk': listInputSize[i].getAttribute('data-id-produk'),
                            'jumlah_produk': listInputSize[i].value,
                        })
                    }
                }

                // tampilin overlay loading
                document.getElementById('mal-loading-overlay').style.display = 'flex';

                // post request
                let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                fetch("/produk/masscekstok", {
                    headers: {
                        "Content-Type": "application/json",
                        "Accept": "application/json, text-plain, */*",
                        "X-Requested-With": "XMLHttpRequest",
                        "X-CSRF-TOKEN": token
                        },
                    method: "POST", 
                    credentials: "same-origin",
                    body: JSON.stringify(dataForAjax)
                })
                .then(response => response.text())
                .then(data => {
                    console.log(data);
                    // ubah string data ke array
                    let arrData = data.split(' ');
                    console.log(arrData);
                    // cek jika array ada 'melebihi-stok
                    if(arrData.includes('melebihi-stok')){
                        // jika ada
                        // alert('item kamu melebihi stok yang ada, cek keranjang belanja!');
                        Swal.fire({
                            icon: 'error',
                            title: 'Pesanan Melebihi Stok',
                            text: 'mungkin sudah ada di keranjang kamu!',
                        })

                        // hilangkan overlay loading
                        document.getElementById('mal-loading-overlay').style.display = 'none';
                    }else{

                        // input item ke keranjang
                        fetch("/produk/addtocart", {
                            headers: {
                                "Content-Type": "application/json",
                                "Accept": "application/json, text-plain, */*",
                                "X-Requested-With": "XMLHttpRequest",
                                "X-CSRF-TOKEN": token
                                },
                            method: "POST", 
                            credentials: "same-origin",
                            body: JSON.stringify(dataForAjax)
                        })
                        .then(response => response.text())
                        .then(data => {
                            console.log(data);

                            if(data == "sukses"){
                                // reset field jd 0
                                for(let i=0; i<listInputSize.length; i++){
                                    listInputSize[i].value = 0;
                                    listTotalHargaSize[i].innerHTML = 0;
                                }
                                subtotalHarga.innerHTML = 0;

                                location.replace("/keranjang")
                            }
                        })
                        .catch(function(error) {
                            console.log(error);
                        });
                    }
                })
                .catch(function(error) {
                    console.log(error);
                });

            }
        })
    </script>
@endsection