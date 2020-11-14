$(document).ready(function() {

    $('#tipo-contacto').click(opcionElegida);
    $('#tipo-contacto').on('blur', opcionElegida);

    $('#btnBest').click(function() {
        $('#btnBest').addClass('auto-activo');
        $('#btnAffordable').removeClass('auto-activo');
        $('#btnPremium').removeClass('auto-activo');
    });

    $('#btnAffordable').click(function() {
        $('#btnAffordable').addClass('auto-activo');
        $('#btnBest').removeClass('auto-activo');
        $('#btnPremium').removeClass('auto-activo');
    });

    $('#btnPremium').click(function() {
        $('#btnPremium').addClass('auto-activo');
        $('#btnAffordable').removeClass('auto-activo');
        $('#btnBest').removeClass('auto-activo');
    });

    $('#carzNavegacion a').on('click', function() {
        $('#carzNavegacion').removeClass('show');
    });

    function opcionElegida() {
        if ($("#tipo-contacto option:selected").text() === 'Email' || $("#tipo-contacto option:selected").text() === 'אימייל') {
            $('#acaEmail').removeClass('oculto');
            $('#acaEmail').addClass('block');
            $('#acaEmail').prop('required', true);
            $('#acaTel').removeClass('oculto');
            $('#acaTel').addClass('block');
            $('#phone').prop('required', true);
        }
        if ($("#tipo-contacto option:selected").text() === 'WhatsApp' || $("#tipo-contacto option:selected").text() === 'וואטסאפ') {
            $('#acaEmail').addClass('oculto');
            $('#acaEmail').removeClass('block');
            $('#acaEmail').prop('required', false);
            $('#acaTel').addClass('oculto');
            $('#acaTel').removeClass('block');
            $('#phone').prop('required', false);
        }
    }

    // SCROLL PANTALLA
    var altoPantalla = $(window).height();
    var altoBarra = $('.navegacion-principal').innerHeight();
    var altoTopBar = $('.barra').innerHeight();
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        // Menu fijo
        if (scroll > ((altoBarra - altoTopBar) * 2)) {
            $('.navegacion-principal').addClass('barra-fixed');
            $('body').css({ 'margin-top': (altoBarra - altoTopBar) + 'px' });
        } else {
            $('.navegacion-principal').removeClass('barra-fixed');
            $('body').css({ 'margin-top': '0px' });
        }
    });

    var d = new Date();
    var mes = d.getMonth() + 1;
    var dia = d.getDate();
    var resul = (('' + mes).length < 2 ? '0' : '') + mes + '/' + (('' + dia).length < 2 ? '0' : '') + dia + '/' + d.getFullYear();

    $('input[name="fechas-alquiler"]').daterangepicker({
        autoUpdateInput: false,
        autoApply: true,
        minDate: resul
    });

    $('input[name="fechas-alquiler"]').on('apply.daterangepicker', function(ev, picker) {
        $(this).val(picker.startDate.format('DD/MM/YYYY') + ' - ' + picker.endDate.format('DD/MM/YYYY'));
    });

    $('input[name="fechas-alquiler"]').on('cancel.daterangepicker', function(ev, picker) {
        $(this).val('');
    });
});