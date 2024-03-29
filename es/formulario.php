<?php 
$pickup = $_POST['pick-up'];
$dropoff = $_POST['drop-off'];
$dates = $_POST['fechas-alquiler'];
$categoria = $_POST['categoria'];
$pickhora = $_POST['pick-hora'];
$pickmin = $_POST['pick-min'];
$drophora = $_POST['drop-hora'];
$dropmin = $_POST['drop-min'];
$age = $_POST['age'];
$via = $_POST['via'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];

$pickuptime = $pickhora . ':' . $pickmin;
$dropofftime = $drophora . ':' . $dropmin;

if($age == '19'){
    $driver = "El%20conductor%20es%20menor%20de%2025";
    $driverEmail = "El conductor es menor de 25 años";
}else{
    $driver = "El%20conductor%20es%20mayor%20de%2025";
    $driverEmail = "El conductor es mayor de 25 años";
}

$texto = "Hola,%20quisiera%20alquilar%20un%20auto%20en%20EEUU.%0a$dates%0aPick-Up:%20$pickup%20-%20$pickuptime%0aDrop-Off:%20$dropoff%20-%20$dropofftime%0a$categoria%0a$driver%0aEmail:%20$email%Telefono:%20+$telefono";

if($via == 'wp'){
    header("Location: https://wa.me/17868208222?text=$texto");
}else{
    if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");
        
    // $address = "lucasadlerstein@gmail.com";
    $address = "contacto@carzrental.com";
    $e_subject = 'Carz Rental - Formulario de Contacto';
        
    $e_body = "Hola, quiero recibir más información para alquilar un auto en EEUU." . PHP_EOL . PHP_EOL;
    $e_content = $dates . PHP_EOL;
    $e_content .= "Pick-Up: $pickup - $pickuptime" . PHP_EOL . "Drop-Off: $dropoff - $dropofftime" . PHP_EOL . "Categoría: $categoria" . PHP_EOL;
    $e_content .= $driverEmail . PHP_EOL . "https://wa.me/$telefono" . "https://web.whatsapp.com/send?phone==$telefono" . PHP_EOL . PHP_EOL;
    $e_reply = "Datos de contacto: $email - $telefono";

    $msg = wordwrap( $e_body . $e_content . $e_reply, 70 );
    
    $headers = "From: $address" . PHP_EOL;
    $headers .= "Reply-To: $email" . PHP_EOL;
    $headers .= "MIME-Version: 1.0" . PHP_EOL;
    $headers .= "Content-type: text/plain; charset=utf-8" . PHP_EOL;
    $headers .= "Content-Transfer-Encoding: quoted-printable" . PHP_EOL;
        
    if(mail($address, $e_subject, $msg, $headers)) {
        header('Location: index.php?mensaje=enviado');
    } else {
        header('Location: index.php?mensaje=error');
    }
}
?>