<?php 
$pickup = $_POST['pick-up'];
$dropoff = $_POST['drop-off'];
$dates = $_POST['fechas-alquiler'];
$pickhora = $_POST['pick-hora'];
$categoria = $_POST['categoria'];
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
    $driver = "Driver%20age%20is%20not%20above%2025";
    $driverEmail = "Driver age is not above 25.";
}else{
    $driver = "Driver%20age%20is%20above%2025";
    $driverEmail = "Driver age is above 25.";
}

$texto = "היי, הייתי רוצה לקבל מידע נוסף בנוגע להשכרת רכב בארה'ב.%0D$dates%0DPick-Up:%20$pickup%20-%20$pickuptime%0DDrop-Off:%20$dropoff%20-%20$dropofftime%0D$driver%0D$categoria";

if($via == 'wp'){
    header("Location: https://wa.me/13478993389?text=$texto");
}else{
    if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");
        
    $address = "info@carzrental.net";
    $e_subject = 'טופס צור קשר  CarzRental';
        
    $e_body = 'היי, הייתי רוצה לקבל מידע נוסף בנוגע להשכרת רכב בארה"ב' . PHP_EOL . PHP_EOL;
    $e_content = $dates . PHP_EOL;
    $e_content .= "Pick-Up: $pickup - $pickuptime" . PHP_EOL . "Drop-Off: $dropoff - $dropofftime" . PHP_EOL . "$categoria" . PHP_EOL;
    $e_content .= $driverEmail . PHP_EOL . PHP_EOL;
    $e_reply = "Contact details: $email - $telefono";

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