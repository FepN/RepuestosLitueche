<?php session_start();
if (isset($_SESSION['nombres'])) {
$n = $_SESSION['nombres'];
} else {
$n = "";
}
if (isset($_SESSION['email'])) {
$c = $_SESSION['email'];
} else {
$c = "";
}
if (isset($_POST['mensaje'])) {
$m = $_POST['mensaje'];
} else {
$m = "";
}
if (isset($_POST['asunto'])) {
$a = $_POST['asunto'];
} else {
$a = "";
}

echo $m;
//Incluimos la clase de PHPMailer
require_once('../phpmailer/class.phpmailer.php');
 
$correo = new PHPMailer(); //Creamos una instancia en lugar usar mail()
 
//Usamos el SetFrom para decirle al script quien envia el correo
$correo->SetFrom($c, $c);
 
//Usamos el AddReplyTo para decirle al script a quien tiene que responder el correo
$correo->AddReplyTo("repuestoslontueche@gmail.com",$c);
 
//Usamos el AddAddress para agregar un destinatario
$correo->AddAddress("ricky.v.g@hotmail.com", "Robot");
 
//Ponemos el asunto del mensaje
$correo->Subject = $a;
 
/*
 * Si deseamos enviar un correo con formato HTML utilizaremos MsgHTML:
 * $correo->MsgHTML("<strong>Mi Mensaje en HTML</strong>");
 * Si deseamos enviarlo en texto plano, haremos lo siguiente:
 * $correo->IsHTML(false);
 * $correo->Body = "Mi mensaje en Texto Plano";
 */
$correo->IsHTML(false);
 $correo->Body =$m;
 
//Si deseamos agregar un archivo adjunto utilizamos AddAttachment
$correo->AddAttachment("../phpmailer/examples/images/phpmailer.gif");
 
//Enviamos el correo
if(!$correo->Send()) {
  echo "Hubo un error: " . $correo->ErrorInfo;
} else {
  echo "Mensaje enviado con exito.";
 
}
 
?>