<?php 
    if(isset($_GET)){
        if($_GET['mensaje'] == 'enviado'){ ?>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Message sent',
            showConfirmButton: false,
            timer: 1300
        })
    </script>
    <?php
        }else if($_GET['mensaje'] == 'error'){
            ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Message not sent',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
        <?php
        }}
    ?>