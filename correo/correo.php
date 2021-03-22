<?php
    if (isset($_POST['enviar'])){
        if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])){
            $name = $_POST['name'];
            $from = $_POST['email'];
            $asunto = "Cotizaci贸n";
            $email = "claudio.v18@hotmail.cl" ;
            $message = $_POST['message'];
            $header = "Enviado por: {$from}". "\n";

            $mail = mail($email, $asunto, $message, $header);
        }
    }