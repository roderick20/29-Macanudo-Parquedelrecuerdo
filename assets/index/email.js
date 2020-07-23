var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>';
var csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';

jQuery("#btnEnviar").click(function () {
    if (jQuery('#form_nombre').val() == '') {
        alert("Ingrese nombre");
        return;
    }
    if (jQuery('#form_apellido').val() == '') {
        alert("Ingrese apellido");
        return;
    }
    if (jQuery('#form_telefono').val() == '') {
        alert("Ingrese telefono");
        return;
    }
    if (jQuery('#form_email').val() == '') {
        alert("Ingrese email");
        return;
    }
    if (jQuery('#form_mensaje').val() == '') {
        alert("Ingrese mensaje");
        return;
    }

    if (!jQuery('#form_terminos_condiciones').prop('checked')) {
        alert('Debe aceptar los términos y condiciones ');
        return;
    }

    var dataJson = {[csrfName]: csrfHash,
        nombre: jQuery('#form_nombre').val(),
        apellidos: jQuery('#form_apellido').val(),
        email: jQuery('#form_email').val(),
        telefono: jQuery('#form_telefono').val(),
        mensaje: jQuery('#form_mensaje').val(),
        pagina: jQuery('#form_pagina').val()};

    jQuery('div.wpcf7 .ajax-loader').css('visibility', 'visible')
    jQuery.ajax({
        url: "/ContactenosForm",
        type: 'post',
        data: dataJson,
        success: function (data)
        {
            data = jQuery.parseJSON(data);
            csrfName = data.csrfName;
            csrfHash = data.csrfHash;
            if (data.resultado == 'ok') {
                jQuery('div.wpcf7 .ajax-loader').css('visibility', 'hidden');
                jQuery('#form_nombre').val('');
                jQuery('#form_apellido').val('');
                jQuery('#form_email').val('');
                jQuery('#form_telefono').val('');
                jQuery('#form_mensaje').val('');
                jQuery('#form_terminos_condiciones').prop('checked', '')
                alert("Correo enviado, gracias");
            } else {
                jQuery('div.wpcf7 .ajax-loader').css('visibility', 'hidden')
                alert("Error en envio de correo");
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            csrfName = data.csrfName;
            csrfHash = data.csrfHash;
            jQuery('div.wpcf7 .ajax-loader').css('visibility', 'hidden')
            alert("Error en envio de correo");
        }
    });
});
