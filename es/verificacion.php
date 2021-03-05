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

        gtag('event', 'conversion', {'send_to': 'AW-1019430203/j8F-CNKb3eEBELuKjeYD'});
        
        // Nuevo Guido 05/03/2021
        gtag('event', 'conversion', {'send_to': 'AW-1019430203/TVUoCPis4_kBELuKjeYD'});

        
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

            gtag('event', 'conversion', {'send_to': 'AW-1019430203/j8F-CNKb3eEBELuKjeYD'});
        
        </script>
        <?php
        }}
    ?>