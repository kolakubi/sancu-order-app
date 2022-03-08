@extends('partials.main')

@section('container')

    @php
        $id_alamat = $alamat == null ? 0 : $alamat->id;
    @endphp

    {{-- @dump($alamat) --}}
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
        $totalJumlahItem = 0;
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
                    <button class="btn btn-danger btn-ms rounded" onclick="deleteAllItems(this)"
                    data-id-all-produk="{{ $item->id_produk }}">
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
            // jika stok tidak 0
            // tambahka jumlah
            if($item->jumlah_stok > 0){
                $totalJumlahItem += $item->jumlah_produk;
                $subTotalItem += ($item->jumlah_produk*$item->harga_produk);
                $totalBerat += ($item->berat*$item->jumlah_produk);
            }
        @endphp
        <tr style="position: relative;">
            <td>{{ $item->size }}</td>
            <td>
                <div class="d-flex align-items-center justify-content-center">
                    @if($item->jumlah_stok == 0)
                        <div style="position: absolute; left:0; top: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.05); z-index: 99999"></div>
                    @endif

                    {{-- remove button --}}
                    <button class="btn btn-secondary p-2 remove-button" onclick="decreaseItem(this)"
                    data-id-cart="{{$item->carts_id}}">-</button>
                    {{-- input number --}}
                    <input type="number" min=0 value="{{ $item->jumlah_produk }}" class="form-control px-1 py-2"
                    data-harga="{{$item->harga_produk}}"
                    data-id-produk="{{$item->id_produk_detail}}"
                    name="input-{{$item->id_produk_detail}}-{{$item->carts_id}}">
                    {{-- add button --}}
                    <button class="btn btn-warning p-2 add-button" onclick="increaseItem(this)"
                    data-id-cart="{{$item->carts_id}}">+</button>
                </div>
                @if($item->jumlah_stok == 0) 
                    <span class="text-danger fw-bold">Variasi habis</span>
                @endif
            </td>
            <td>
                <p style="font-size: 14px;">{{ number_format($item->jumlah_produk*$item->harga_produk, 0) }}
                </p>
            </td>
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

    @if($alamat != null)
   {{-- Alamat --}}
    <div class="container mal-list-produk-container p-4">
        <h6>Alamat Pengiriman</h6>
        <div class="row">
            <div class="col-1">
                <i class="bi bi-pin-map-fill text-danger" style="font-size: 1.5em"></i>
            </div>
            <div class="col-10">
                <p class="">{{$alamat->nama_lengkap}} | {{$alamat->telepon}}<br>
                    {{$alamat->alamat_lengkap}}, {{$alamat->kecamatan}}, {{$alamat->kota_kabupaten}}, {{$alamat->propinsi}}, {{$alamat->kode_pos}}</p>
            </div>
            <div class="col-1 d-flex align-items-center justify-content-center">
                <a href="{{route('alamat')}}">
                    <i class="bi bi-chevron-right"></i>
                </a>
            </div>
        </div>
    </div>
    @else
    <div class="container mal-list-produk-container p-4">
        <h6>Alamat Pengiriman</h6>
        <div class="alert alert-danger" role="alert">
            <div class="row">
                <div class="col-7">
                    Kamu belum input alamat!
                </div>
                <div class="col-5">
                    <a href="{{route('alamat')}}" class="btn btn-sm btn-danger">Tambah Alamat +</a>
                </div>
            </div>
            
        </div>
    </div>
    @endif

    {{-- Berat total --}}
    <div class="row mal-list-produk-container p-4">
        <div class="col-5">
            <h6>Berat total</h6>
        </div>
        <div class="col-7">
            <h6 class="text-end"><strong>{{number_format($totalBerat)}}g</strong></h6>
        </div>
    </div>

    {{-- kode kupon --}}
    <div class="row mal-list-produk-container p-4">
        <div class="col-6">
            <h6>Kode Kupon</h6>
            <span class="border border border-2 border-success rounded text-success fw-bold py-1 px-2 mt-2" id="kupon-valid" style="display:none;">kupon valid</span>
            <span class="border border border-2 border-danger rounded text-danger fw-bold py-1 px-2 mt-2" id="kupon-invalid" style="display:none;">kupon invalid</span>
        </div>
        <div class="col-6 d-flex align-items-center flex-row-reverse">
            <div>
                <input type="text" class="form-control" width="50px" id="kodeCoupon" onchange="cekCoupon(this)">
            </div>
        </div>
    </div>

    {{-- total keranjang --}}
    <div class="row mal-list-produk-container p-4">
        <div class="col-6">
            <h6>Total Pembayaran</h6>
        </div>
        <div class="col-6 d-flex align-items-center flex-row-reverse">
            <span style="font-weight: bold; font-size: 1.2em" id="total-pembayaran">0</span>
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
            @if(!isset($cart_items[0])) disabled @endif
            id="btn-submit-cart-form"
            type="submit" onclick="checkout()">
                <i class="bi bi-cart mal-floar-nav-icon"></i> 
                Checkout
            </button>
        </div>
    </div>

    {{-- sweet alert --}}
    <script src="/assets/sweet-alert/sweetalert2.all.min.js"></script>

    <script>
        let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        let potonganCoupon = 0;

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
                console.log('stok sekarang', data);
                data = parseInt(data);

                // jika input melebihi stok
                if(parseInt(inputElem.value) >= data){
                    Swal.fire({
                        icon: 'error',
                        title: 'Melebihi Stok',
                        text: 'Tidak bisa menambah item lagi',
                    })
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
                    console.log('id_cart',idCarts);
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
                        // update jumlah
                        inputElem.value = parseInt(inputElem.value)+1;
                        hargaElem.innerHTML = parseInt(hargaProduk)*parseInt(inputElem.value);
                         // hide overlay loading
                         document.getElementById('mal-loading-overlay').style.display = 'none';
                         // update total pembayaran
                        updateTotalPembayaran();
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

                    // update jumlah
                    inputElem.value = parseInt(inputElem.value)-1;
                    hargaElem.innerHTML = parseInt(hargaProduk)*parseInt(inputElem.value);
                    // hide overlay loading
                    document.getElementById('mal-loading-overlay').style.display = 'none';
                    // update total pembayaran
                    updateTotalPembayaran();
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

            if(inputElem.value == 1){
                let tableRow = a.parentElement.parentElement.parentElement;
                // hapus data menurut 'data-id-cart'
                //
                //                    
                // ajax hapus item
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
                    // hapus row item
                    tableRow.remove();
                    // hide overlay loading
                    document.getElementById('mal-loading-overlay').style.display = 'none';
                    // update total pembayaran
                    updateTotalPembayaran();
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
            // show overlay loading
            document.getElementById('mal-loading-overlay').style.display = 'flex';

            let tableRow = a.parentElement.parentElement;
            let idCart = a.parentElement.previousElementSibling.previousElementSibling.firstElementChild.firstElementChild.getAttribute('data-id-cart');

            console.log(idCart);
            //
            //                    
            // ajax hapus item
            //
            //
            fetch("/keranjang/remove_1_item", {
                headers: {
                    "Content-Type": "application/json",
                    "Accept": "application/json, text-plain, */*",
                    "X-Requested-With": "XMLHttpRequest",
                    "X-CSRF-TOKEN": token
                    },
                method: "POST", 
                credentials: "same-origin",
                body: JSON.stringify(idCart)
            })
            .then(response => response.text())
            .then(data => {
                console.log(data);
                // hapus row item
                tableRow.remove();
                // hide overlay loading
                document.getElementById('mal-loading-overlay').style.display = 'none';
                // update total pembayaran
                updateTotalPembayaran();
                
            })
            .catch(function(error) {
                console.log(error);
            });
            //
            //                    
            // end ajax hapus item
            //
            //
        }
        //
        // end function deleteItem
        //

        function deleteAllItems(a){
            // show overlay loading
            document.getElementById('mal-loading-overlay').style.display = 'flex';

            let containerItem = a.parentElement.parentElement;
            let idProduk = a.getAttribute('data-id-all-produk');

            console.log(idProduk);
            //
            //                    
            // ajax hapus item
            //
            //
            fetch("/keranjang/delete_all_items", {
                headers: {
                    "Content-Type": "application/json",
                    "Accept": "application/json, text-plain, */*",
                    "X-Requested-With": "XMLHttpRequest",
                    "X-CSRF-TOKEN": token
                    },
                method: "POST", 
                credentials: "same-origin",
                body: JSON.stringify(idProduk)
            })
            .then(response => response.text())
            .then(data => {
                console.log(data);
                // hapus container item
                containerItem.remove();
                // hide overlay loading
                document.getElementById('mal-loading-overlay').style.display = 'none';
                // update total pembayaran
                updateTotalPembayaran();
            })
            .catch(function(error) {
                console.log(error);
            });
            //
            //                    
            // end ajax hapus item
            //
            //
        }
        //
        // end function deleteAllItem
        //

        function updateTotalPembayaran(){
            //
            // ajax get cart data
            //
            let totalPembayaran = document.getElementById('total-pembayaran');
            let floatDivTotal = document.getElementById('floatdiv-total');

            fetch("/keranjang/get_cart_total_mount", {
                headers: {
                    "Content-Type": "application/json",
                    "Accept": "application/json, text-plain, */*",
                    "X-Requested-With": "XMLHttpRequest",
                    "X-CSRF-TOKEN": token
                    },
                method: "GET", 
                credentials: "same-origin",
            })
            .then(response => response.text())
            .then(data => {
                console.log(data);
                totalPembayaran.innerHTML = 'Rp '+(data-potonganCoupon).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                floatDivTotal.innerHTML = 'Rp '+(data-potonganCoupon).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            })
            .catch(function(error) {
                console.log(error);
            });
        }
        updateTotalPembayaran();
        //
        // end function updateTotalPembayaran
        //

        function cekCoupon(a){
            setTimeout(() => {
                // show overlay loading
                document.getElementById('mal-loading-overlay').style.display = 'flex';
                // ambil kode kupon
                let kodeCoupon = document.getElementById('kodeCoupon').value;
                // cek status kode kupon
                //
                //                    
                // ajax hapus item
                //
                //
                fetch("/coupon/cekdata", {
                    headers: {
                        "Content-Type": "application/json",
                        "Accept": "application/json, text-plain, */*",
                        "X-Requested-With": "XMLHttpRequest",
                        "X-CSRF-TOKEN": token
                        },
                    method: "POST", 
                    credentials: "same-origin",
                    body: JSON.stringify(kodeCoupon)
                })
                .then(response => response.text())
                .then(data => {
                    // hide overlay loading
                    document.getElementById('mal-loading-overlay').style.display = 'none';

                    console.log('potongan',data);
                    potonganCoupon = `${data*{{$totalJumlahItem}}}`;
                    console.log(potonganCoupon);
                    if(data){
                        // show span kupon valid
                        document.getElementById('kupon-valid').style.display = 'block';
                        document.getElementById('kupon-invalid').style.display = 'none';

                        // update total pembayaran
                        updateTotalPembayaran();

                    }
                    else{
                        // show span kupon invalid
                        document.getElementById('kupon-invalid').style.display = 'block';
                        document.getElementById('kupon-valid').style.display = 'none';

                        potonganCoupon = 0;
                        // update total pembayaran
                        updateTotalPembayaran();
                    }
                    
                })
                .catch(function(error) {
                    console.log(error);
                });
                //
                //
                // end ajax hapus item
                //
                //

            }, 500);
        }

        function checkout(){ 
            // show overlay loading
            document.getElementById('mal-loading-overlay').style.display = 'flex';

            let idAlamat = {{$id_alamat}};
            // jika belum isi alamat
            if(idAlamat == 0){
                window.location.href = "/profil/alamat";
                return false;
                // Swal.fire({
                //     icon: 'error',
                //     title: 'Mohon isi alamat anda',
                //     text: 'Tidak bisa melakukan checkout',
                // }).then((result) => {
                    
                // })
            }

            let coupon = document.getElementById('kodeCoupon').value;
            let berat = {{$totalBerat}}
            let postData = {
                'id_alamat': idAlamat,
                'coupon': coupon,
                'berat': berat
            }
            console.log('id alamat', idAlamat);
            console.log('coupon', coupon);
            console.log('berat', berat);

            fetch("/keranjang/checkout", {
                    headers: {
                        "Content-Type": "application/json",
                        "Accept": "application/json, text-plain, */*",
                        "X-Requested-With": "XMLHttpRequest",
                        "X-CSRF-TOKEN": token
                        },
                    method: "POST", 
                    credentials: "same-origin",
                    body: JSON.stringify(postData)
                })
            .then(response => response.text())
            .then(data => {
                console.log(data);

                Swal.fire({
                    icon: 'success',
                    title: 'Order Sukses',
                    text: 'admin kami akan menghubungi anda untuk info biaya ongkir',
                }).then((result) => {
                    window.location.href = "/profil/transaksi";
                })
                // hide overlay loading
                document.getElementById('mal-loading-overlay').style.display = 'none';
            })
            .catch(function(error) {
                console.log(error);
            });
        }

    </script>

@endsection