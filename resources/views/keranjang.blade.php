@extends('partials.main')

@section('container')

    {{-- @dump($cart_items) --}}
    @if(!isset($cart_items[0]))
        <div class="row mal-list-produk-container pt-3">
            <div class="alert alert-danger" role="alert">
                Cart Anda Kosong!
            </div>
        </div>
    @endif

    <h2>Keranjang Pemesanan</h2>
    @php
        $asd = 0;
        $no=0;
        $subTotalItem = 0;
        $totalBerat = 0;
    @endphp
    @foreach($cart_items as $key=>$item)

        {{-- jika idproduk beda dengan var pembantu --}}
        {{-- buat header table --}}
        {{-- jadikan variable helper = id_produk --}}
        @if($item->id_produk != $asd)

            @php
                $asd = $item->id_produk;
                $subTotalItem = 0;   
            @endphp

            <div class="row mal-list-produk-container pt-3">
                
                {{-- hapus seluruh item --}}
                <div class="col-12 d-flex align-items-center flex-row-reverse">
                    <button class="btn btn-danger btn-ms rounded" onclick="deleteAllItem(this)">
                        <i class="bi bi-trash-fill"></i>
                    </button>
                </div>

                <div class="col-2">
                    <img src="{{$item->gambar_url_produk}}" alt="sancu baby girl" class="img-fluid">
                </div>
                <div class="col-10">
                    <div class="row">

                    </div>
                    <h6>{{$item->nama_produk}}</h6>
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
        @endif
        
        @php
            $subTotalItem += ($item->jumlah_produk*$item->harga_produk);
            $totalBerat += ($item->berat*$item->jumlah_produk);
        @endphp
        <tr>
            <td>{{ $item->size }}</td>
            <td>
                <div class="d-flex align-items-center justify-content-center">
                    {{-- remove button --}}
                    <button class="btn btn-secondary p-2 remove-button" onclick="decreaseItem(this)"
                    data-id-cart="{{$item->carts_id}}">-</button>
                    {{-- input number --}}
                    <input type="number" min=0 value="{{ $item->jumlah_produk }}" class="form-control px-1 py-2"
                    data-harga="{{$item->harga_produk}}"
                    data-id-produk="{{$item->id_produk_detail}}">
                    {{-- add button --}}
                    <button class="btn btn-warning p-2 add-button" onclick="increaseItem(this)"
                    data-id-cart="{{$item->carts_id}}">+</button>
                </div>
            </td>
            <td><p style="font-size: 14px;">{{ number_format($item->jumlah_produk*$item->harga_produk, 0) }}</p></td>
            <td>
                {{-- hapus 1 item --}}
                <button class="btn p-1" onclick="deleteItem(this)">
                    <i class="bi bi-trash-fill delete-item"></i>
                </button>
            </td>
        </tr>
        
        {{-- jika index berikutnya sudah berbeda id --}}
        {{-- buat footer table --}}
        @if(isset($cart_items[$key+1]))
            @if($cart_items[$key+1]->id_produk != $asd)
            
                </tbody>
                </table>
                <div class="d-flex align-items-center flex-row-reverse">
                    <h6 class="text-right">Sub Total: <span style="font-weight: bold; font-size: 1.1em">Rp {{ number_format($subTotalItem, 0)}}</span></h6>
                </div>
                </div>
                </div>

            @endif
        @endif  
    
    {{-- jika item terakhir dalam loop --}}
    {{-- buat footer table --}}
    @if($loop->last)

        </tbody>
        </table>
        <div class="d-flex align-items-center flex-row-reverse">
            <h6 class="text-right">Sub Total: <span style="font-weight: bold; font-size: 1.1em">Rp {{ number_format($subTotalItem, 0)}}</span></h6>
        </div>
        </div>
    </div> 
    @endif

    @endforeach

    {{-- produk di cart --}}
    {{-- <div class="row mal-list-produk-container pt-3">
        
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
    </div> --}}


    {{-- Ongkir --}}
    <div class="container mal-list-produk-container p-5">
        <h6><strong><i class="bi bi-truck" style="font-size: 2rem;"></i></strong></h6>

        {{-- Alamat --}}
        <div class="row">
            <div class="col-5">
                <h6>Alamat</h6>
            </div>
            <div class="col-7">
                <p class="text-end">Jalan Persahabatan VI no 3-4, Ciracas, Jakarta Timur 13730</p>
            </div>
        </div>

        {{-- Ekspedisi --}}
        <div class="row">
            <div class="col-5">
                <h6>Ekspedisi</h6>
            </div>
            <div class="col-7">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Indah Cargo</option>
                    <option value="Dakota">Dakota</option>
                    <option value="Alif Pratama">Alif Pratama</option>
                    <option value="Hexa">Hexa</option>
                </select>
            </div>
        </div>

        {{-- Berat total --}}
        <div class="row mt-4">
            <div class="col-5">
                <h6>Berat total</h6>
            </div>
            <div class="col-7">
                <h6 class="text-end"><strong>{{number_format($totalBerat)}}g</strong></h6>
            </div>
        </div>

        {{-- Total --}}
        <div class="d-flex align-items-center flex-row-reverse mt-4">
            <h6 class="text-right">Sub Total Ongkir: <span style="font-weight: bold; font-size: 1.1em">Rp 192.000</span></h6>
        </div>
        
    </div>

    {{-- kode kupon --}}
    <div class="row mal-list-produk-container p-4">
        <div class="col-6">
            <h6>Kode Kupon</h6>
        </div>
        <div class="col-6 d-flex align-items-center flex-row-reverse">
            <input type="text" class="form-control" width="50px"></td>
        </div>
    </div>

    {{-- total keranjang --}}
    <div class="row mal-list-produk-container p-4">
        <div class="col-6">
            <h6>Total Pembelian</h6>
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
            <button class="btn col-12 btn-warning" 
            @if(!isset($cart_items[0])) disabled @endif>
                <i class="bi bi-cart mal-floar-nav-icon"></i> 
                Checkout
            </button>
        </div>
    </div>

    <script>

        let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        function increaseItem(a){
            document.getElementById('mal-loading-overlay').style.display = 'flex';

            // target input
            let inputElem = a.previousElementSibling;
            let hargaProduk = inputElem.getAttribute('data-harga');
            let idProduk = inputElem.getAttribute('data-id-produk');
            let hargaElem = a.parentElement.parentElement.nextElementSibling.firstChild;
            
            // ajax ke pengecekan stok
            fetch("/produk/cekstok", {
                headers: {
                    "Content-Type": "application/json",
                    "Accept": "application/json, text-plain, */*",
                    "X-Requested-With": "XMLHttpRequest",
                    "X-CSRF-TOKEN": token
                    },
                method: "POST", 
                credentials: "same-origin",
                body: idProduk
            })
            .then(response => response.text())
            .then(data => {

                console.log(data);
                data = parseInt(data);

                // jika input melebihi stok
                if(parseInt(inputElem.value) >= data){
                    alert('pesanan melebihi stok yg ada');
                    inputElem.value = data;

                    // hide overlay loading
                    document.getElementById('mal-loading-overlay').style.display = 'none';
                }
                else{
                    //
                    //
                    // ajax tambah item satuam
                    //
                    //
                    let idCarts = a.getAttribute('data-id-cart');
                    console.log(idCarts);
                    fetch("/keranjang/add_1_item", {
                        headers: {
                            "Content-Type": "application/json",
                            "Accept": "application/json, text-plain, */*",
                            "X-Requested-With": "XMLHttpRequest",
                            "X-CSRF-TOKEN": token
                            },
                        method: "POST", 
                        credentials: "same-origin",
                        body: JSON.stringify(idCarts)
                    })
                    .then(response => response.text())
                    .then(data => {
                        console.log(data);

                        // hide overlay loading
                        document.getElementById('mal-loading-overlay').style.display = 'none';

                        // update jumlah
                        inputElem.value = parseInt(inputElem.value)+1;
                        hargaElem.innerHTML = parseInt(hargaProduk)*parseInt(inputElem.value);
                    })
                    .catch(function(error) {
                        console.log(error);
                    });
                    //
                    //                    
                    // end ajax tambah item satuam
                    //
                    //
                }
            })
            .catch(function(error) {
                console.log(error);
            });
        }
        //
        // end function increaseItem
        //

        function decreaseItem(a){
            // show overlay loading
            document.getElementById('mal-loading-overlay').style.display = 'flex';

            // target input
            let inputElem = a.nextElementSibling;
            let hargaProduk = inputElem.getAttribute('data-harga');
            let hargaElem = a.parentElement.parentElement.nextElementSibling.firstChild;
            if(inputElem.value > 0){
                //
                //
                // ajax kurangin item satuam
                //
                //
                let idCarts = a.getAttribute('data-id-cart');
                console.log(idCarts);
                fetch("/keranjang/decrease_1_item", {
                    headers: {
                        "Content-Type": "application/json",
                        "Accept": "application/json, text-plain, */*",
                        "X-Requested-With": "XMLHttpRequest",
                        "X-CSRF-TOKEN": token
                        },
                    method: "POST", 
                    credentials: "same-origin",
                    body: JSON.stringify(idCarts)
                })
                .then(response => response.text())
                .then(data => {
                    console.log(data);

                    // hide overlay loading
                    document.getElementById('mal-loading-overlay').style.display = 'none';

                    // update jumlah
                    inputElem.value = parseInt(inputElem.value)-1;
                    hargaElem.innerHTML = 
                    
                    parseInt(hargaProduk)*parseInt(inputElem.value);
                })
                .catch(function(error) {
                    console.log(error);
                });
                //
                //                    
                // end ajax kurangin item satuam
                //
                //
            }
            else{
                let tableRow = a.parentElement.parentElement.parentElement;
                let itemDetailId = tableRow.firstElementChild.nextElementSibling.firstElementChild.firstElementChild.getAttribute('data-id-cart');

                console.log(itemDetailId);
                // hapus data menurut 'data-id-cart'
                //
                //                    
                // end ajax hapus item
                //
                //
                let idCarts = a.getAttribute('data-id-cart');
                console.log(idCarts);
                fetch("/keranjang/remove_1_item", {
                    headers: {
                        "Content-Type": "application/json",
                        "Accept": "application/json, text-plain, */*",
                        "X-Requested-With": "XMLHttpRequest",
                        "X-CSRF-TOKEN": token
                        },
                    method: "POST", 
                    credentials: "same-origin",
                    body: JSON.stringify(idCarts)
                })
                .then(response => response.text())
                .then(data => {
                    console.log(data);

                    // hide overlay loading
                    document.getElementById('mal-loading-overlay').style.display = 'none';

                    // hapus row item
                    tableRow.remove();
                })
                .catch(function(error) {
                    console.log(error);
                });
            }
        }
        //
        // end function decreaseItem
        //

        function deleteItem(a){
            let tableRow = a.parentElement.parentElement;
            let itemDetailId = a.parentElement.previousElementSibling.previousElementSibling.firstElementChild.firstElementChild.nextElementSibling.getAttribute('data-id-produk');

            console.log(itemDetailId);
            tableRow.remove();

            // ajax hapus item menurut id_produk_detail
        }

        function deleteAllItem(a){
            let containerItem = a.parentElement.parentElement;

            containerItem.remove();

            // ajax hapus item menurut id_produk
        }

    </script>

@endsection