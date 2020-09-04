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

var slider = tns({
    container: '.carousel-autos',
    items: 1,
    autoplay: true,
    autoplayButtonOutput: false,
    mouseDrag: true,
    swipeAngle: false,
    speed: 400,
    gutter: 0,
    controlsText: ['<i class="fas fa-arrow-circle-left"></i>', '<i class="fas fa-arrow-circle-right"></i>'],
    controls: true,
    controlsPosition: 'bottom',
    nav: false,
    responsive: {
        540: {
            disable: true
        }
    }
});

var slider = tns({
    container: '.carousel-autos2',
    items: 1,
    autoplay: true,
    autoplayButtonOutput: false,
    mouseDrag: true,
    swipeAngle: false,
    speed: 400,
    gutter: 0,
    controlsText: ['<i class="fas fa-arrow-circle-left"></i>', '<i class="fas fa-arrow-circle-right"></i>'],
    controls: true,
    controlsPosition: 'bottom',
    nav: false,
    responsive: {
        540: {
            disable: true
        }
    }
});

var slider = tns({
    container: '.carousel-autos3',
    items: 1,
    autoplay: true,
    autoplayButtonOutput: false,
    mouseDrag: true,
    swipeAngle: false,
    speed: 400,
    gutter: 0,
    controlsText: ['<i class="fas fa-arrow-circle-left"></i>', '<i class="fas fa-arrow-circle-right"></i>'],
    controls: true,
    controlsPosition: 'bottom',
    nav: false,
    responsive: {
        540: {
            disable: true
        }
    }
});


// Aeropuertos
const options = {
    fuse_options: {
        shouldSort: true,
        threshold: 0.4,
        maxPatternLength: 32,
        keys: [{
                name: "IATA",
                weight: 0.6
            },
            {
                name: "name",
                weight: 0.4
            },
            {
                name: "city",
                weight: 0.2
            }
        ]
    }
};

AirportInput("pick-airport", options);
AirportInput("drop-airport", options);

// Telefono

var input = document.querySelector("#phone"),
    errorMsg = document.querySelector("#error-msg"),
    validMsg = document.querySelector("#valid-msg");

var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

var iti = window.intlTelInput(input, {
    utilsScript: "utils.js"
});

var reset = function() {
    input.classList.remove("error");
    errorMsg.innerHTML = "";
    errorMsg.classList.add("hide");
    validMsg.classList.add("hide");
};

input.addEventListener('blur', function() {
    reset();
    if (input.value.trim()) {
        if (iti.isValidNumber()) {
            validMsg.classList.remove("hide");
        } else {
            input.classList.add("error");
            var errorCode = iti.getValidationError();
            errorMsg.innerHTML = errorMap[errorCode];
            errorMsg.classList.remove("hide");
        }
    }
});

input.addEventListener('change', reset);
input.addEventListener('keyup', reset);

var enviarFormulario = document.querySelector("#enviarForm");
enviarFormulario.addEventListener('click', function(e) {
    var seleccionado = document.getElementById("tipo-contacto");
    var opcionElegida = seleccionado.options[seleccionado.selectedIndex].text;
    if (opcionElegida === 'Email') {
        if (!(iti.isValidNumber())) {
            e.preventDefault();
        }
    }
});