$(document).ready(function() {
    $(window).scroll(function() {
        var ventanaAncho = $(window).width();

        if (ventanaAncho > 900) {
            var scroll = $(window).scrollTop();

           
            $('.acerca article').css({
                'transform': 'translate(0px, -' + scroll / 4 + '%)'
            });


        }
    });
    $(window).resize(function() {
        var ventanaAncho = $(window).width();
        if (ventanaAncho < 900) {
            $('.acerca article').css({
                'transform': 'translate(0px, 0px)'
            });

        }
    })

})