$(document).ready(function() {
    var cart = {};

    checkCart();
    showCart();
    console.log(cart)
    me = document.querySelector('script[data-route]');

    $.ajax({
        method: 'post',
        data: cart,
        url: me.getAttribute('data-route'),
        success: (cart) => {
            console.log(cart);
            localStorage.setItem('cart');
        },
        error: (error) => {
            console.log(error)
        }

    });

    function checkCart() {
        if (localStorage.getItem('cart') != null) {
            cart=JSON.parse(localStorage.getItem('cart'));
        }
    }
});