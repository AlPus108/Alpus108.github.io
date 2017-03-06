<!--  Этот скрипт использовать после загрузки файлов на хостинг
Он заходит на указанный ящик и с него отправляет письма по указанным адресам
Этот скрипт прикреплен к форме отсыла сообщений на сайте. Сообщение попадает в этот обработчик, который будет отсылать нам это письмо  -->

<?php 
/* Принимаем постовые данные */
$whatever = $_POST ['whatever'];
$username = $_POST ['username'];
$email = $_POST ['email'];
$user_message = $_POST ['user_message'];

/* Подключаем файл из папки phpmailer */
require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8'; /* кодировка */

/* Раздел "куда заходим, откуда будем отправлять письмо" */
//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  // адрес сервера
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'tunerauto@inbox.ru';   // SMTP логин
$mail->Password = 'iddqdidkfa00';         // SMTP пароль
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

/* Раздел "оформление письма" */
$mail->setFrom('tunerauto@inbox.ru', 'Ildar S. Zhiganshin'); // Автор, кто отправляет письмо и его адрес
$mail->addAddress('111970@mail.ru', 'Joe User');     // Кому отправляется письмо и его адрес
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Это сабджект сообщения'; // Тема письма
$mail->Body    = 'Это тело сообщения дальше жирное <b>блаблабла</b>'; // Тело сообщения. Можно использовать html-коды
$mail->AltBody = 'Это сообщение в формате plain text'; // Тело сообщения в формате plain text

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    header('location: thanks.html');
}

?>cho 'Message has been sent';
}

?>een sent';
}

?>