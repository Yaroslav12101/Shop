$(document).ready(function(e) {
    let badge = $('[data-id="cart-count"]'),
        badgeValue = localStorage.getItem('count') || 0,
        cart = {};

    badge.text(badgeValue);

    $('.product-link').click(function (e) {
        let sendData = {},
            me = document.querySelector('script[data-route]');

        var articul = $(this).attr('data-id');
        if (cart[articul] !=undefined) {
            cart[articul]++;
        }
        else {
            cart [articul] = 1;
        }
        localStorage.setItem('cart', JSON.stringify(cart) );
        console.log(cart)
        sendData.id = $(this).attr('data-id');

        $.ajax({
            method: 'post',
            data: sendData,
            url: me.getAttribute('data-route'),
            success: (data) => {
               let badgeValue = badge.text();
               console.log(badgeValue);
                console.log(sendData);
               badgeValue++;
               localStorage.setItem('count', badgeValue);
               badge.text(badgeValue);
            },
            error: (error) => {
                console.log(error)
            }

        });

    });

});