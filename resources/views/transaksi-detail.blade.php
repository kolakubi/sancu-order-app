@extends('partials.main')

@section('container')

    {{-- @dump($items) --}}

    <div class="row mal-top-navigator">
        <div class="col-12 d-flex flex-row align-items-center">
            <a href="/profil/transaksi" class="text-dark">
                <i class="bi bi-arrow-left-short" style="font-size: 2.2em"></i>
            </a>
            <h5 style="margin: 0 0 0 10px">Transaksi</h5>
        </div>
    </div>

    <h3 class="text-center">Detail Transaksi</h3>

    @php
        $asd = 0;
        $no=0;
        $subTotalItem = 0;
        $totalBerat = 0;
        $totalJumlahItem = 0;
        $totalPembelian = 0;
    @endphp
    @foreach($items as $key=>$item)
        @php
            $totalPembelian += ($item->jumlah_produk*$item->harga_produk);
        @endphp

        {{-- jika idproduk beda dengan var pembantu --}}
        {{-- buat header table --}}
        {{-- jadikan variable helper = id_produk --}}
        @if($item->id_produk != $asd)

            @php
                $asd = $item->id_produk;
                $subTotalItem = 0;
            @endphp

            <div class="row mal-list-produk-container pt-3">

                <div class="col-2">
                    <img src="{{$server_host}}{{$item->gambar_url_produk}}" alt="sancu baby girl" class="img-fluid">
                </div>
                <div class="col-10">
                    <div class="row">

                    </div>
                    <h6>{{$item->nama_produk}}</h6>
                    <table class="table text-center table-keranjang table-sm">
                        <thead>
                            <tr>
                                <th>Size</th>
                                <th>Qty</th>
                                <th>Total</th>
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
            <td>{{ $item->jumlah_produk }} </td>
            <td>
                <p style="font-size: 14px;">{{ number_format($item->jumlah_produk*$item->harga_produk, 0) }}
                </p>
            </td>
        </tr>
        
        {{-- jika index berikutnya sudah berbeda id --}}
        {{-- buat footer table --}}
        @if(isset($items[$key+1]))
            @if($items[$key+1]->id_produk != $asd)
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

    {{-- pengiriman --}}
    @if($alamat->dropship)
        <div class="row mal-list-produk-container p-3 d-flex align-items-center">
            <table class="table">
                <tr>
                    <td style="width: 50%">Order Id</td>
                    <td style="width: 50%">: <strong>{{$alamat->id}}</strong></td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td>: <strong>{{$items[0]->tgl_order}}</strong></td>
                </tr>
                <tr>
                    <td>Berat Total</td>
                    <td>: <strong>{{number_format($totalBerat, 0)}}g</strong></td>
                </tr>
            </table>
        </div>
        <div class="row mal-list-produk-container p-3 d-flex align-items-center">
            <h5 class="text-center"><strong>Sebagai Dropship</strong></h5>
            <h6><strong>Penerima</strong></h6>
            <table class="table">
                <tr>
                    <td style="width: 50%">Penerima</td>
                    <td style="width: 50%">: <strong>{{$alamat->dropship_nama}}</strong></td>
                </tr>
                <tr>
                    <td>Telepon</td>
                    <td>: <strong>{{$alamat->dropship_telepon}}</strong></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>: <strong>{{$alamat->dropship_alamat}}</strong></td>
                </tr>
            </table>

            <h6 class="mt-3"><strong>Pengirim</strong></h6>
            <table class="table">
                <tr>
                    <td style="width: 50%">Pengirim</td>
                    <td style="width: 50%">: <strong>{{$alamat->nama_lengkap}}</strong></td>
                </tr>
                <tr>
                    <td>Telepon Pengirim</td>
                    <td>: <strong>{{$alamat->telepon}}</strong></td>
                </tr>
                <tr>
                    <td>Alamat Pengirim</td>
                    <td>: <strong>{{$alamat->alamat_lengkap}}, {{$alamat->kecamatan}}, {{$alamat->kota_kabupaten}}, {{$alamat->propinsi}}, {{$alamat->kode_pos}}</strong></td>
                </tr>
            </table>
        </div>
    @else
        <div class="row mal-list-produk-container p-3 d-flex align-items-center">
            <table class="table">
                <tr>
                    <td style="width: 50%">Order Id</td>
                    <td style="width: 50%">: <strong>{{$alamat->id}}</strong></td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td>: <strong>{{$items[0]->tgl_order}}</strong></td>
                </tr>
                <tr>
                    <td>Berat Total</td>
                    <td>: <strong>{{number_format($totalBerat, 0)}}g</strong></td>
                </tr>
                <tr>
                    <td>Penerima</td>
                    <td>: <strong>{{$alamat->nama_lengkap}}</strong></td>
                </tr>
                <tr>
                    <td>Telepon</td>
                    <td>: <strong>{{$alamat->telepon}}</strong></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>: <strong>{{$alamat->alamat_lengkap}}, {{$alamat->kecamatan}}, {{$alamat->kota_kabupaten}}, {{$alamat->propinsi}}, {{$alamat->kode_pos}}</strong></td>
                </tr>
            </table>
        </div>
    @endif

    {{-- angka --}}
    <div class="row mal-list-produk-container p-3 d-flex align-items-center">
        <table class="table">
            <tr>
                <td style="width: 50%">Jumlah Item</td>
                <td style="width: 50%">: <strong>{{$totalJumlahItem}}</strong></td>
            </tr>
            <tr>
                <td>Total Pembelian</td>
                <td>: <strong>Rp {{number_format($totalPembelian, 0)}}</strong></td>
            </tr>
            <tr>
                <td>Ongkir</td>
                <td>: <strong>Rp {{number_format($items[0]->ongkir,0)}}</strong></td>
            </tr>
            <tr>
                <td>Coupon</td>
                <td>: <strong>{{$coupons != null ? $coupons->name : '-'}}</strong></td>
            </tr>
            <tr>
                <td>Potongan Coupon</td>
                <td>: 
                    <strong>( 
                        Rp{{$coupons ? number_format($coupons->potongan*$totalJumlahItem, 0) : '-'}} )</strong>
                
                </td>
            </tr>
            @if($alamat->potongan_harga_langsung)
                <tr>
                    <td>Potongan Harga Langsung</td>
                    <td>: <strong>Rp {{number_format($alamat->potongan_harga_langsung, 0)}}</strong></td>
                </tr>
                <tr>
                    <td>Keterangan</td>
                    <td>: <strong>{{$alamat->keterangan_potongan_harga_langsung}}</strong></td>
                </tr>
            @endif
            <tr>
                <td>Grand Total</td>
                <td>: 
                    <strong>Rp 
                        {{
                            number_format((
                                $totalPembelian+
                                $items[0]->ongkir-
                                ($coupons ? $coupons->potongan*$totalJumlahItem : 0)-
                                $alamat->potongan_harga_langsung
                            ), 0)
                        }}
                    </strong>
                </td>
            </tr>
        </table>
    </div>

    {{-- batalkan order --}}
    @if($items[0]->status == '1')
    <div class="row mal-list-produk-container p-3 d-flex align-items-center">
        <div class="col-12 text-center">
            <form action="{{route('transaksi_batal')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="orders_id" value="{{$alamat->id}}">
                <button type="submit" class="btn btn-danger">Batalkan Pesanan</button>
                <br>
                klik jika kamu ingin membatalkan pesanan ini
            </form>
            <br>
        </div>
    </div>
    @endif

    {{-- Upload bukti bayar --}}
    @if($items[0]->status == '2' || $items[0]->status == '3')
    <div class="row mal-list-produk-container p-3 d-flex align-items-center">
        <div class="col-12 text-center">
            <strong>Upload bukti pembayaran</strong>
            <br>
            <p>File yang dibolehkan: JPG, JPEG, PNG</p>
            <i class="bi bi-cloud-upload-fill" style="font-size: 45px; color: #13a176"></i>
            <br>
            <form method="post" enctype="multipart/form-data" id="form_bukti_bayar">
                @csrf
                <input type="hidden" name="orders_id" value="{{$alamat->id}}">
                <input class="form-control mal-file-input" type="file" name="file_bukti_bayar" required>

                @error('file_bukti_bayar')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                @enderror

                <span>Max Size: 2MB</span>
                <br>
                <br>

                {{-- <button type="submit" class="btn btn-success">Upload</button> --}}
            </form>
            <br>
        </div>
        <hr>
        @if($items[0]->status == '3' && $alamat->bukti_bayar != null)
            <div class="col-12 text-center">
                <p>Bukti pembayaran berikut sedang dalam pemeriksaan</p>
                <img class="img-thumbnail" src="/storage/{{$alamat->bukti_bayar}}" alt="bukti pembayaran distributor">
            </div>
        @endif
    </div>

    {{-- overlay prgress upload --}}
    <div id="mal-progress-bar-container" style="z-index: 999999; display: none; align-items: center; justify-content: center; flex-direction: column; background-color: rgba(0,0,0,0.7); position: fixed; top:0; right: 0; bottom: 0; left: 0; height: vh">
        <h4 class="text-center text-light">file sedang di upload</h4>
        <div class="progress" style="height: 40px; width: 300px">
            <div class="progress-bar progress-bar-striped" id="mal-progress-bar" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>

    {{-- sweet alert --}}
    <script src="/assets/sweet-alert/sweetalert2.all.min.js"></script>

    <script>
        const formBuktiBayar = document.getElementById('form_bukti_bayar');
        let fileInput = formBuktiBayar.querySelector('.mal-file-input');

        fileInput.onchange = ({target}) => {
            let file = target.files[0];
            console.log(file);
            if(file){
                let fileName = file.name;
                console.log(fileName);
                // cek tipe file
                if(file.type == 'image/png' || file.type == 'image/jpeg' || file.type == 'image/jpg' ){

                    // cek size
                    if(file.size > (1000*1000*2)){
                        Swal.fire({
                            icon: 'error',
                            title: 'File Lebih Besar Dari 2MB',
                        });

                        return false;
                    }
                    else{
                        uploadFile(fileName);
                    }
                }
                else{
                    Swal.fire({
                        icon: 'error',
                        title: 'Bukan File Image',
                    });

                    return false;
                }
            }
        }

        function uploadFile(name){
            let malProgressBar = document.getElementById('mal-progress-bar');
            let malProgressBarContainer = document.getElementById('mal-progress-bar-container');
            malProgressBarContainer.style.display = 'flex';

            let xhr = new XMLHttpRequest();
            xhr.open('POST', '/profil/transaksi_detail/{{$alamat->id}}');
            xhr.upload.addEventListener('progress', ({loaded, total})=>{
                let fileLoaded = Math.floor((loaded/total) *100);
                let fileTotal = Math.floor(total / 1000);

                malProgressBar.style.width = fileLoaded+'%';

                if(fileLoaded == 100){
                    malProgressBarContainer.style.display = 'none';
                    Swal.fire({
                        icon: 'success',
                        title: 'Upload Sukses',
                    }).then((result) => {
                        location.reload();
                    })
                }
            });
            let formData = new FormData(formBuktiBayar);
            xhr.send(formData);
        }
        console.log('hellow');
    </script>

    @endif

    {{-- info resi --}}
    @if($items[0]->status == '4')
    <div class="row mal-list-produk-container p-3 d-flex align-items-center">
        <div class="col-12 text-center">
            <h5>Selamat! order kamu telah dikirim</h5>
            <img class="img-thumbnail" src="{{$server_host}}{{$items[0]->resi}}" alt="resi pengiriman distributor">
            <p>Resi pengiriman</p>

            <form action="{{route('transaksi_selesai')}}" method="post">
                @csrf
                <input type="hidden" name="orders_id" value="{{$alamat->id}}">
                <br>
                <button type="submit" class="btn btn-danger">Pesanan diterima</button>
                <br><br>
                <span class="mt-2">Silakan klik tombol setelah kamu menerima pesanan</span>
            </form>
        </div>
    </div>
    @endif

@endsection

