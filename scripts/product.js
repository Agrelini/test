let buttonEl = document.querySelector('button');


buttonEl.addEventListener('click', function () {
    let productId = this.getAttribute('data-product-id');
    
    let xhr = new XMLHttpRequest();
    xhr.open('GET', `handlers/basketHandler.php?id=${productId}`);
    xhr.send();

    xhr.addEventListener('load', ()=>{

    let countProducts = xhr.responseText;
    let countBasketEl = document.querySelector('.user_basket__basket__count');
    countBasketEl.innerText = countProducts;
    });
});