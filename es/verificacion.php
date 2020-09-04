<?php 
    if(isset($_GET)){
        if($_GET['mensaje'] == 'enviado'){ ?>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Mensaje enviado',
            showConfirmButton: false,
            timer: 1300
        });
        gtag_report_conversion('ContactForm');
    </script>
    <?php
        }else if($_GET['mensaje'] == 'error'){
            ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'El mensaje no se envió',
                showConfirmButton: false,
                timer: 1500
            });
            gtag_report_conversion('ContactFormNotSent');
        </script>
        <?php
        }}
    ?>