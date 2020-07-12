$(document).ready(function(a) {
    $('.promote-user').click(function (e) {
        let sendData = {},
            em = document.querySelector('script[data-route]');

        sendData.id = $(this).attr('data-id');

        $.ajax({
            method: 'post',
            data: sendData,
            url: me.getAttribute('data-route'),
            success: (data) => {
                console.log(data);
            },
            error: (error) => {
                console.log(error)
            }

        });

    });
});