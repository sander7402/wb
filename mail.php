<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['fName'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$product = $_POST['product'];



$mail->isSMTP();                                      
$mail->Host = 'smtp.mail.ru';  																							
$mail->SMTPAuth = true;                              
$mail->Username = ''; // логин от почты с которой будут отправляться письма
$mail->Password = ''; // пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';
$mail->Port = 465; // TCP port to connect to / 

$mail->setFrom(''); // от кого будет уходить письмо?
$mail->addAddress('');     // Кому будет уходить письмо 

$mail->isHTML(true);                                  

$mail->Subject = 'Заявка';
$mail->Body    = '' .$name . ' оставил заявку, его телефон ' .$phone. ' Почта этого пользователя: ' .$email. ' продукт: ' .$product;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: thank-you.html');
}
?>