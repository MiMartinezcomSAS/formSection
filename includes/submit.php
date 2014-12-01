<?php
include('upload.php');

class Submit
{

    private $nameImage;

    public function __construct()
    {
        $this->upload();
        $this->upload1();
        
    }

    function upload()
    {
        $uploadImage = new upload('imagen');
        
	$this->sendMail($uploadImage->upload());
    }
    function upload1()
    {
        $uploadImage = new upload('imagen1');
        
    $this->sendMail($uploadImage->upload1());
    }

    function sendMail($img)
    {

        require 'PHPMailer/PHPMailerAutoload.php';
        $mail = new PHPMailer;
        $mail->IsSendmail();
        $mail->FromName = 'Nuevo Registro - Chica Llanero';
        $mail->CharSet = 'UTF-8';
        $mail->From = 'noreply@aguardientellanero.com';
        $mail->Subject = 'Nuevo postulante chica llanero 2015';
        $mail->MsgHTML('Mensaje con HTML');
        $template = '<h1>Nuevo postulante chica llanero 2015</h1><br>';
        $template .= 'Nombre : ' . $_POST['nombre'] . '<br>';
        $template .= 'Apellido : ' . $_POST['apellido'] . '<br>';
        $template .= 'Edad : ' . $_POST['edad'] . '<br>';
        $template .= 'Ocupación : ' . $_POST['ocupacion'] . '<br>';
        $template .= 'mail : ' . $_POST['mail'] . '<br>';
        $template .= 'Teléfono : ' . $_POST['telefono'] . '<br>';
        $template .= 'Celular : ' . $_POST['celular'] . '<br>';
        $template .= 'Actualmente cursa alguna carrera técnica, tecnológica o profesional? : ' . $_POST['carrera'] . '<br>';
        $template .= 'Tienes algún título universitario? : ' . $_POST['titulo'] . '<br>';
        $template .= 'Eres llanera de nacimiento o has vivido en el Meta los últimos 5 años? : ' . $_POST['llanera'] . '<br>';
        $template .= 'Tienes conocimientos sobre la cultura llanera y sus costumbres? : ' . $_POST['conocimientos'] . '<br>';
        $template .= 'Te desenvuelves bien ante cámaras y eres expresiva? :' . $_POST['expresiva'] . '<br>';
        $template .= 'Estas dispuesta a viajar y promocionar la marca Aguardiente Llanero durante 1 año en
                todo el territorio nacional? : ' . $_POST['viajar'] . '<br>';
        $template .= ' imagen : ' . '<a href="http://aguardientellanero.com/upload/'.$img.'"><img src="http://aguardientellanero.com/upload/'.$img.'"></a>' . '<br>';
         $template .= ' imagen1 : ' . '<a href="http://aguardientellanero.com/upload/'.$img.'"><img src="http://aguardientellanero.com/upload/'.$img.'"></a>' . '<br>';
        $mail->Body = $template;
        $mail->AddAddress('avargascuellar@hotmail.com', '');
        $mail->AddAddress('al.patinom8@gmail.com', '');
        $mail->AddAddress('juan2ramos@gmail.com', '');
        $mail->AddAddress('soporte@mi-martinez.com', '');
        if(!$mail->Send()) {
			echo "Mailer Error: " . $mail->ErrorInfo;
			
			}
    }

    function dataBase()
    {

    }
}