$(document).ready(function() {

    $('#tipo-contacto').blur(function() {
        if ($("#tipo-contacto option:selected").text() === 'Email') {
            $('#acaEmail').removeClass('oculto');
            $('#acaEmail').addClass('block');
            $('#acaEmail').prop('required', true);
            $('#acaTel').removeClass('oculto');
            $('#acaTel').addClass('block');
            $('#acaTel').prop('required', true);
        }
        if ($("#tipo-contacto option:selected").text() === 'WhatsApp') {
            $('#acaEmail').addClass('oculto');
            $('#acaEmail').removeClass('block');
            $('#acaEmail').prop('required', false);
            $('#acaTel').addClass('oculto');
            $('#acaTel').removeClass('block');
            $('#acaTel').prop('required', false);
        }
    });

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


    // DatePicker
    var date_input_pick = $('input[name="pick-up-date"]');
    var date_input_drop = $('input[name="drop-off-date"]');
    var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
    var options = {
        format: 'dd/mm/yyyy',
        minDate: '1',
        useCurrent: false,
        container: container,
        todayHighlight: true,
        autoclose: true,
        startDate: '0'
    };
    date_input_pick.datepicker(options);
    date_input_drop.datepicker(options);
});

$(function() {
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

var slider = tns({
    container: '.carousel-opiniones',
    items: 1,
    autoplay: true,
    autoplayButtonOutput: false,
    mouseDrag: true,
    swipeAngle: false,
    speed: 400,
    controlsText: ['<i class="fas fa-arrow-circle-left"></i>', '<i class="fas fa-arrow-circle-right"></i>'],
    gutter: '10',
    controls: false,
    nav: false,
    responsive: {
        // 640: {
        //     edgePadding: 10,
        //     gutter: 20

        // },
        991: {
            items: 3
        }
    }
});