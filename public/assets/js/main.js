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

        // hitung total cart 
        for(let i=0; i<listInputSize.length; i++){
            listInputSize[i].addEventListener('change', ()=>{
                listTotalHargaSize[i].innerHTML = listHargaSize[i]*listInputSize[i].value;
            
                subtotalHarga.innerHTML = 
                parseInt(totalHargaSize21.innerHTML)
                +parseInt(totalHargaSize24.innerHTML)
                +parseInt(totalHargaSize28.innerHTML)
                +parseInt(totalHargaSize30.innerHTML)
                +parseInt(totalHargaSize32.innerHTML)
                +parseInt(totalHargaSize34.innerHTML)
                +parseInt(totalHargaSize36.innerHTML)
                +parseInt(totalHargaSize38.innerHTML)
                +parseInt(totalHargaSize40.innerHTML)
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
                    alert("item kosong");
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

                    // reset field jd 0
                    for(let i=0; i<listInputSize.length; i++){
                        listInputSize[i].value = 0;
                        listTotalHargaSize[i].innerHTML = 0;
                    }
                    subtotalHarga.innerHTML = 0;

                    location.replace("/keranjang")
                })
                .catch(function(error) {
                    console.log(error);
                });
            }
        })