<?php
//Принимаем постовые данные из формы на странице html
$whatever=$_POST['whatever'];
$username=$_POST['username'];
$email=$_POST['email'];
$user_message=$_POST['user_message'];

//Тут указываем на какой ящик посылать письмо
$to = "79991570874@yandex.ru";

//Далее идет тема письма и само сообщение
// Тема письма
$subject = "Заявка с моего первого сайта";
// Сообщение письма
$message = "
Форма, которую заполнил клиент: ".htmlspecialchars($whatever)."<br/>
Имя пользователя: ".htmlspecialchars($username)."<br/>
Email: ".htmlspecialchars($email)."<br/>;
Сообщение: ".htmlspecialchars($user_message);

// Пишем служебную информацию для передачи письма;
$headers = "From: Lesson 20 <mail@stastroi.ru>\r\nContent-type: text/html; charset=UTF-8 \r\n";
// Отправляем письмо при помощи функции mail();
mail ($to, $subject, $message, $headers);
// Перенаправляем человека на страницу благодарности и завершаем скрипт
header('Location: thanks.html');
exit();
?>