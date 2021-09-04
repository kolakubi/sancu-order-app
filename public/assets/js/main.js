const btnBabyGirlPink = document.getElementById('btn-produk-baby-girl-pink');
const stokBabyGirlPink = document.getElementById('stok-produk-baby-girl-pink');

btnBabyGirlPink.addEventListener('click', (e)=>{
    if(!stokBabyGirlPink.classList.contains('show')){
        stokBabyGirlPink.classList.add('show')
    }else{
        stokBabyGirlPink.classList.remove('show');
    }
})