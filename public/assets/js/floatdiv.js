let token2 = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
let floatDivTotal = document.getElementById('floatdiv-total');

fetch("/keranjang/ajaxget", {
    headers: {
        "Content-Type": "application/json",
        "Accept": "application/json, text-plain, */*",
        "X-Requested-With": "XMLHttpRequest",
        "X-CSRF-TOKEN": token2
        },
    method: "GET", 
    credentials: "same-origin",
})
.then(response => response.text())
.then(data => {
    floatDivTotal.innerHTML = data;
    // console.log(data);

})
.catch(function(error) {
    console.log(error);
});