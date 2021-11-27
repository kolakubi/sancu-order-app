@extends('partials.main')

@section('container')

<div class="row mal-top-navigator">
    <div class="col-12 d-flex flex-row align-items-center">
        <a href="/profil" class="text-dark">
            <i class="bi bi-arrow-left-short" style="font-size: 2.2em"></i>
        </a>
        <h5 style="margin: 0 0 0 10px">Profil</h5>
    </div>
</div>

<div class="row mal-list-produk-container p-3">
    <div class="col-12 text-center">
        <img src="/assets/image/logo-sancu-mini.png" class="img" style="max-width: 90px">
        <h4 class="mt-2">Sancu Indonesia</h4>
        <p>Raih kesempatan menjadi agen SANCU INDONESIA. Pemasaran sangat mudah, produk menarik, bergaransi resmi, dan berkualitas. sangat tepat menjadi  bisnis masa depan Anda.</p>
        <p>Saat ini jaringan agen SANCU INDONESIA sudah hampir tersebar di seluruh wilayah Indonesia. SANCU juga sudah merambah ke luar negeri seperti Negara Malaysia, Brunei, Singapura, dan India.</p>
        
        <h4 class="mt-4">Hubungi kami di</h4>
        <p><i class="bi bi-house-fill"></i> Jalan Persahabatan VI no 3-4, RT.10/RW.8, Kelapa Dua Wetan, Jakarta Timur, Jakarta</p>
        <p><i class="bi bi-envelope-fill"></i> <a href="mailto:sancu_lucu@yahoo.com" class="text-dark">sancu_lucu@yahoo.com</a></p>
        <p>
            <a href="https://wa.me/6282122694604?text=Halo admin, saya ada pertanyaan mengenai sancu" class="btn border-rounded text-light px-4" target="blank" style="background-color: green">
                <i class="bi bi-whatsapp"> </i> 
                Chat di Whatsapp
            </a>
    </div>
</div>



@endsection