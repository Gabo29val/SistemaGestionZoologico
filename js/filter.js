$(buscar_datos());


function buscar_datos(consulta) {
    $.ajax({
            url: 'includes/control_animals.php',
            type: 'POST',
            dataType: 'html',
            data: { consulta: consulta },

        }).done(function(respuesta) {
            $('#data').html(respuesta)
        })
        .fail(function() {
            console.log('error')
        })

}
$(document).on('keyup', '#search', function() {
    var valor = $(this).val()
    if (valor != "") {
        buscar_datos(valor)
            // console.log('ga')
    } else {
        buscar_datos()
    }
})