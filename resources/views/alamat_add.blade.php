@extends('partials.main')

@section('container')

<div class="row mal-top-navigator">
    <div class="col-12 d-flex flex-row align-items-center">
        <a href="{{route('alamat')}}" class="text-dark">
            <i class="bi bi-arrow-left-short" style="font-size: 2.2em"></i>
        </a>
        <h5 style="margin: 0 0 0 10px">Alamat Saya</h5>
    </div>
</div>

<h3 class="text-center">Tambah Alamat</h3>

<div class="row mal-list-produk-container p-3 d-flex align-items-center">
    <form action="/alamat/insert_alamat" method="post">
        @csrf

        {{-- kontak --}}
        <div class="form-group mb-3">
            <h6>Kontak</h6>
            @error('nama_penerima')
                <span class="bg-danger text-light px-2" style="margin-top: -5px">{{$message}}</span>
            @enderror
            <input class="form-control p-2 mb-1" type="text" placeholder="Nama Penerima" name="nama_penerima" value="{{old('nama_penerima')}}">

            @error('telepon')
                <span class="bg-danger text-light px-2" style="margin-top: -5px">{{$message}}</span>
            @enderror
            <input class="form-control p-2" type="text" placeholder="Nomor Telepon" name="telepon" value="{{old('telepon')}}">
        </div>

        {{-- alamat --}}
        <div class="form-group mb-3">
            <h6>Alamat</h6>
            {{-- propinsi --}}
            @error('propinsi')
                <span class="bg-danger text-light px-2" style="margin-top: -5px">{{$message}}</span>
            @enderror
            <select class="form-control mb-1" name="propinsi" id="propinsi">
                <option value=0>-- Propinsi --</option>
            </select>

            {{-- kabupaten --}}
            @error('kabupaten')
                <span class="bg-danger text-light px-2" style="margin-top: -5px">{{$message}}</span>
            @enderror
            <select class="form-control mb-1" name="kabupaten" id="kabupaten">
                <option value=0>-- Kota/Kabupaten --</option>
            </select>

            {{-- kecamatan --}}
            @error('kecamatan')
                <span class="bg-danger text-light px-2" style="margin-top: -5px">{{$message}}</span>
            @enderror
            <select class="form-control mb-1" name="kecamatan" id="kecamatan">
                <option value=0>-- Kecamatan --</option>
            </select>

             {{-- kelurahan --}}
             @error('kelurahan')
                <span class="bg-danger text-light px-2" style="margin-top: -5px">{{$message}}</span>
            @enderror
            <select class="form-control mb-1" name="kelurahan" id="kelurahan">
                <option value=0>-- kelurahan --</option>
            </select>

            {{-- alamat lengkap --}}
            @error('alamat_lengkap')
                <span class="bg-danger text-light px-2" style="margin-top: -5px">{{$message}}</span>
            @enderror
            <textarea class="form-control mb-1" rows="4" name="alamat_lengkap" placeholder="Alamat lengkap">{{old('telepon')}}</textarea>

            {{-- detail --}}
            <input type="text" class="form-control px-2 mb-1" name="detail" placeholder="Detail lainnya (Blok/Unit No., Patokan)" value="{{old('telepon')}}">

            {{-- kode pos --}}
            @error('kode_pos')
                <span class="bg-danger text-light px-2" style="margin-top: -5px">{{$message}}</span>
            @enderror
            <input type="text" class="form-control" name="kode_pos" placeholder="Kode pos" value="{{old('telepon')}}">

        </div>

        {{-- Utama --}}
        <div class="form-group mb-4">
            <h6>Pengaturan</h6>
            <div class="row">
                <div class="col-10">
                    <p>Atur sebagai alamat utama</p>
                </div>
                <div class="col-2">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="1" name="alamat_utama">
                        <label class="form-check-label" for="inlineCheckbox1">Ya</label>
                    </div>
                </div>
            </div>
        </div>

        {{-- hidden --}}
        <input type="hidden" id="elemPropinsiHidden" name="nama_propinsi" value="">
        <input type="hidden" id="elemKabupatenHidden" name="nama_kabupaten" value="">
        <input type="hidden" id="elemKecamatanHidden" name="nama_kecamatan" value="">
        <input type="hidden" id="elemKelurahanHidden" name="nama_kelurahan" value="">

        {{-- button submit --}}
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" style="width: 100%">Submit</button>
        </div>
        
    </form>
</div>

<script>
    let elemPropinsi = document.getElementById('propinsi');
    let elemKabupaten = document.getElementById('kabupaten');
    let elemKecamatan = document.getElementById('kecamatan');
    let elemKelurahan = document.getElementById('kelurahan');
    let elemPropinsiHidden = document.getElementById('elemPropinsiHidden');
    let elemKabupatenHidden = document.getElementById('elemKabupatenHidden');
    let elemKecamatanHidden = document.getElementById('elemKecamatanHidden');
    let elemKelurahanHidden = document.getElementById('elemKelurahanHidden');

    ///////////////////////////////////////////////////
    // sumber api
    // https://farizdotid.com/blog/dokumentasi-api-daerah-indonesia/
    let apiUrlPropinsi = 'https://dev.farizdotid.com/api/daerahindonesia/provinsi';
    let apiUrlKabupaten = 'https://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi=';
    let apiUrlKecamata = 'https://dev.farizdotid.com/api/daerahindonesia/kecamatan?id_kota=';
    let apiUrlKelurahan = 'https://dev.farizdotid.com/api/daerahindonesia/kelurahan?id_kecamatan=';

    // get propinsi
    fetch(apiUrlPropinsi, {
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json, text-plain, */*",
            "X-Requested-With": "XMLHttpRequest",
            },
        method: "GET", 
        credentials: "same-origin",
    })
    .then(response => response.json())
    .then(propinsi => {
        console.log(propinsi);
        // reset option
        elemPropinsi.innerHTML = '<option value=0>-- Propinsi --</option>';;
        propinsi.provinsi.forEach(element => {
            elemPropinsi.innerHTML += 
            '<option value="'+element.id+'">'+element.nama+'</option>'
        });
    });

    //
    // GET Kota/Kabupaten
    //
    elemPropinsi.addEventListener('change', (e)=>{
        // show overlay loading
        document.getElementById('mal-loading-overlay').style.display = 'flex';
        let idPropinsiDipilih = elemPropinsi.value;
        console.log('id propinsi ='+idPropinsiDipilih);

        elemPropinsiHidden.value = elemPropinsi.options[elemPropinsi.selectedIndex].text;
        fetch(apiUrlKabupaten+''+idPropinsiDipilih, {
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json, text-plain, */*",
                "X-Requested-With": "XMLHttpRequest",
                },
            method: "GET", 
            credentials: "same-origin",
        })
        .then(response => response.json())
        .then(kabupaten => {
            console.log(kabupaten);
            // reset option
            elemKabupaten.innerHTML = '<option value=0>-- Kota/Kabupaten --</option>';
            elemKecamatan.innerHTML = '<option value=0>-- Kecamatan --</option>';
            elemKelurahan.innerHTML = '<option value=0>-- Kelurahan --</option>';
            kabupaten.kota_kabupaten.forEach(element => {
                elemKabupaten.innerHTML += 
                '<option value="'+element.id+'">'+element.nama+'</option>'
            });
            // hide overlay loading
            document.getElementById('mal-loading-overlay').style.display = 'none';
        });        
    })

    //
    // GET kecamanatan
    //
    elemKabupaten.addEventListener('change', (e)=>{
        // show overlay loading
        document.getElementById('mal-loading-overlay').style.display = 'flex';
        let idKabupatenDipilih = elemKabupaten.value;
        elemKabupatenHidden.value = elemKabupaten.options[elemKabupaten.selectedIndex].text;

        fetch(apiUrlKecamata+''+idKabupatenDipilih, {
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json, text-plain, */*",
                "X-Requested-With": "XMLHttpRequest",
                },
            method: "GET", 
            credentials: "same-origin",
        })
        .then(response => response.json())
        .then(kecamatan => {
            console.log(kecamatan);
            // reset option
            elemKecamatan.innerHTML = '<option value=0>-- Kecamatan --</option>';
            elemKelurahan.innerHTML = '<option value=0>-- Kelurahan --</option>';
            kecamatan.kecamatan.forEach(element => {
                elemKecamatan.innerHTML += 
                '<option value="'+element.id+'">'+element.nama+'</option>'
            });
            // hide overlay loading
            document.getElementById('mal-loading-overlay').style.display = 'none';
        });        
    })

    elemKecamatan.addEventListener('change', (e)=>{
        elemKecamatanHidden.value = elemKecamatan.options[elemKecamatan.selectedIndex].text;
    })

    //
    // GET kelurahan
    //
    elemKecamatan.addEventListener('change', (e)=>{
        // show overlay loading
        document.getElementById('mal-loading-overlay').style.display = 'flex';
        let idKecamatanDipilih = elemKecamatan.value;
        elemKelurahanHidden.value = elemKecamatan.options[elemKecamatan.selectedIndex].text;

        fetch(apiUrlKelurahan+''+idKecamatanDipilih, {
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json, text-plain, */*",
                "X-Requested-With": "XMLHttpRequest",
                },
            method: "GET", 
            credentials: "same-origin",
        })
        .then(response => response.json())
        .then(kelurahan => {
            console.log(kelurahan);
            // reset option
            elemKelurahan.innerHTML = '<option value=0>-- Kelurahan --</option>';
            kelurahan.kelurahan.forEach(element => {
                elemKelurahan.innerHTML += 
                '<option value="'+element.id+'">'+element.nama+'</option>'
            });
            // hide overlay loading
            document.getElementById('mal-loading-overlay').style.display = 'none';
        });        
    })

    elemKelurahan.addEventListener('change', (e)=>{
        elemKelurahanHidden.value = elemKelurahan.options[elemKelurahan.selectedIndex].text;
    })

    /////////////////////////////////////////////////
    
</script>


@endsection