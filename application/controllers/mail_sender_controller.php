<?php

    require '../models/mail/PHPMailer.php';
    require '../models/mail/SMTP.php';
    
    $loginData = file_get_contents("php://input");
    $request = json_decode($loginData);

    $name = $request->name;
    $email = $request->email;
    $phone = $request->phone;
    $message = $request->message;

    $response = array('error' => false);

    $body = "";

    $body.="Nombre: ".$name."<br><br>";
    $body.="E-mail de contacto: ".$email."<br><br>";
    $body.="Teléfono: ".$phone."<br><br>";
    $body.="Mensaje: ".$message."<br><br>";

    $mail = new PHPMailer();
    $mail->CharSet = 'UTF-8';

    $mail->IsSMTP();
    $mail->Host       = 'shared91.accountservergroup.com';
    $mail->SMTPSecure = '';
    $mail->Port       = 587;
    $mail->SMTPDebug  = 1;
    $mail->SMTPAuth   = true;
    $mail->Username   = 'digital@grupoccima.com';
    $mail->Password   = 'Ccdig.0';
    $mail->SetFrom('digital@grupoccima.com', "CCIMA Digital");
    $mail->AddReplyTo('no-reply@grupoccima.com','no-reply');
    $mail->Subject    = 'Correo de formulario web';
    $mail->MsgHTML($body);

    $mail->AddAddress('hola@grupoccima.com', 'Grupo CCIMA');

    if (!$mail->send()) {
        $response['error'] = true;
    }

    echo json_encode($response);
?>