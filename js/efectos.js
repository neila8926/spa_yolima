$(document).ready(function() {


    //Efecto header
    if ($(window).width() > 900) {
        $('.main .nombre').css({
            opacity: 0,
            marginTop: 0
        });
        $('.main .nombre').animate({
            opacity: 1,
            marginTop: '-52px'
        }, 1000);
    }
  
    

});
//ocultar y mostrar
$('#limpieza').on('click',function(e) {
    
    // Resetear, por si acaso has estado jugando con la otra propiedad
    $('#articulo-limp').css('visibility', 'visible');
    
    if( $('#articulo-limp').is(":visible") ) {
      $('#articulo-limp').css('display', 'none'); 
    } else {
      $('#articulo-limp').css('display', 'block');
      $('#articulo-limp').css('width', '80%');
      $('#articulo-limp').css('margin', 'auto');
    }
  });

  $('#micro').on('click',function(e) {
    
    // Resetear, por si acaso has estado jugando con la otra propiedad
    $('#articulo-micro').css('visibility', 'visible');
    
    if( $('#articulo-micro').is(":visible") ) {
      $('#articulo-micro').css('display', 'none'); 
    } else {
      $('#articulo-micro').css('display', 'block');
      $('#articulo-micro').css('width', '80%');
      $('#articulo-micro').css('margin', 'auto');
    }
  });




