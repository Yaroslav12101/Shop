$(document).ready(function(e) {
    let cart = {};
    me = document.querySelector('script[data-route]');

    $('.product-link').click(function (e) {
        me = document.querySelector('script[data-route]');

        let articul = $(this).attr('data-id');
        if (cart[articul] === undefined) {
            cart [articul] = 1;
        } else {
            cart[articul]++;
        }
        cart = localStorage.setItem('cart', JSON.stringify(cart));
        console.log(cart)
    });

    /*$.ajax({
        type: "POST",
        url: me.getAttribute('data-route'),
        data: cart,
        success: (data) => {
            console.log(cart)
        },
        error: (error) => {
            console.log(error)
        }
    });*/
});