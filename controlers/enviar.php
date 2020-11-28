<?php

    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = $_POST['correo'];
    $to = "neila8926@hotmail.com";
    $subject = "Checking PHP mail";
    $message = "PHP mail works just fine";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    $respuesta= "The email message was sent.";
?>

