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
            <img src="{{$server_host}}{{ $produk->gambar_url_produk }}" alt="{{ $produk->nama_produk }}" class="img-fluid">
        </div>
    </div>

    {{-- description --}}
    <div class="row pt-3 mal-list-produk-container">
        <div class="col-12">
            {!! $produk->tag ? 
            '<div class="d-flex align-items-center justify-content-center">
                <button class="btn btn-inline btn-danger p-1 mb-1">'.$produk->tag.'</button>
            </div>' :
             ''!!}
            <p>silakan input pesanan anda dengan mengisi kolom di bawah lalu klik "tambahkan ke keranjang"</p>
        </div>
    </div>
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
                            <td id="harga-size-{{$stok->size}}" class="harga">{{  $stok->harga_produk }}</td>
                            <td>{{ $stok->jumlah_stok }}</td>
                            <td>
                                <input type="number" min=0 class="form-control jumlah_order" width="50px" value=0
                                max={{ $stok->jumlah_stok }}  
                                id="input-size-{{$stok->size}}" 
                                data-id-produk-detail="{{$stok->id}}"
                                data-id-produk={{$stok->id_produk}}
                                {{$stok->jumlah_stok < 1 ? "disabled" : ""}}
                                name="{{$stok->id}}">
                            </td>
                            <td id="total-harga-size-{{$stok->size}}" class="total_harga">
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
    {{-- </form> --}}

    {{-- sweet alert --}}
    <script src="/assets/sweet-alert/sweetalert2.all.min.js"></script>
    
    <script>
        const subtotalHarga = document.getElementById('subtotal-harga');
        const listJumlahOrderPerItem = document.getElementsByClassName('jumlah_order');
        const listHargaItem = document.getElementsByClassName('harga');
        const listTotalHargaItem = document.getElementsByClassName('total_harga');

        let finalSubTotal = 0;
        let totalItemCart = 0;
        
        for(let i=0; i<listJumlahOrderPerItem.length; i++){
            listJumlahOrderPerItem[i].addEventListener('change', ()=>{
                let subTotalX = 0;

                // jika input > stok
                if(parseInt(listJumlahOrderPerItem[i].value) > parseInt(listJumlahOrderPerItem[i].getAttribute('max'))){
                    listJumlahOrderPerItem[i].value = parseInt(listJumlahOrderPerItem[i].getAttribute('max'));
                }

                // hitung total cart 
                listTotalHargaItem[i].innerHTML = listHargaItem[i].innerHTML*listJumlahOrderPerItem[i].value;
                for(let x=0; x<listTotalHargaItem.length; x++){
                    subTotalX += parseInt(listTotalHargaItem[x].innerHTML);
                }
                finalSubTotal = subTotalX;

                subtotalHarga.innerHTML = 'Rp '+finalSubTotal.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                totalItemCart += listJumlahOrderPerItem[i].value;
            })
        }

        // jika cart kosong
        
        const tombolAddToCart = document.getElementById('tombol-add-to-cart');
        tombolAddToCart.addEventListener('click', (e)=>{
            if(totalItemCart == 0){
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
                for(let i=0; i<listJumlahOrderPerItem.length; i++){
                    if(listJumlahOrderPerItem[i].value > 0){
                        console.log(listJumlahOrderPerItem[i]);
                        dataForAjax.push({
                            'id_produk_detail': listJumlahOrderPerItem[i].getAttribute('data-id-produk-detail'),
                            'id_produk': listJumlahOrderPerItem[i].getAttribute('data-id-produk'),
                            'jumlah_produk': listJumlahOrderPerItem[i].value,
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
                    // ubah string data ke array
                    let arrData = data.split(' ');
                    console.log(arrData);
                    // cek jika array ada 'melebihi-cek_stok
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
                            console.log(data+' abis ajax add to cart');
                            // return false;
                            if(data == "sukses"){
                                // reset field jd 0
                                for(let i=0; i<listJumlahOrderPerItem.length; i++){
                                    listJumlahOrderPerItem[i].value = 0;
                                    listTotalHargaItem[i].innerHTML = 0;
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