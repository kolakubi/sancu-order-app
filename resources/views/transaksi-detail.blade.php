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
                    <img src="{{$item->gambar_url_produk}}" alt="sancu baby girl" class="img-fluid">
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
            <tr>
                <td>Grand Total</td>
                <td>: 
                    <strong>Rp 
                        {{
                            number_format((
                                $totalPembelian+
                                $items[0]->ongkir-
                                ($coupons ? $coupons->potongan*$totalJumlahItem : 0)
                            ), 0)
                        }}
                    </strong>
                </td>
            </tr>
        </table>
    </div>

    @if($items[0]->status == '2' || $items[0]->status == '3')
    {{-- bukti bayar --}}
    <div class="row mal-list-produk-container p-3 d-flex align-items-center">
        <div class="col-12 text-center">
            <strong>Upload bukti pembayaran</strong>
            <br>
            <p>File yang dibolehkan: JPG, JPEG, PNG</p>
            <i class="bi bi-cloud-upload-fill" style="font-size: 45px; color: #13a176"></i>
            <br>
            <form method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="orders_id" value="{{$alamat->id}}">
                <input class="form-control" type="file" name="file_bukti_bayar" required>

                @error('file_bukti_bayar')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                @enderror

                <span>Max Size: 2MB</span>
                <br>
                <br>

                <button type="submit" class="btn btn-success">Upload</button>
            </form>
            <br>
        </div>
        <hr>
        @if($items[0]->status == '3' && $coupons->bukti_bayar != null)
            <div class="col-12 text-center">
                <p>Bukti pembayaran berikut sedang dalam pemeriksaan</p>
                <img class="img-fluid" src="/storage/{{$coupons->bukti_bayar}}" alt="bukti pembayaran distributor">
            </div>
        @endif
    </div>
    @endif

@endsection