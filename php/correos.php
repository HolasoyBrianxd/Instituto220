<?php
    $destinatario = 'cursosgratisaprovechen@gmail.com';

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $mail = $_POST['mail'];
    $mensaje = $_POST['mensaje'];

    $header = "Enviado desde la pagina principal de ISFT N°220";
    $mensajeCompleto = $nombre . "\n" . $apellido . "\n" . $mail . "\n" . $mensaje;

    mail($destinatario, $mensajeCompleto, $header);
    echo "<script>alert('Correo Enviado Exitosamente')</script>";
    echo "<script>setTimeOut(\"location.href='index.html'\", 1000)</script>";
?>