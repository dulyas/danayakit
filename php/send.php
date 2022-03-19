<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

// Переменные, которые отправляет пользователь
$name = $_POST['name'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Формирование самого письма
$title = "Новый заказ на сайте";
$body = "
<h2>Новое письмо</h2>
<b>Имя:</b> $name<br>
<b>Телефон:</b> $phone<br><br>
<b>Сообщение:</b><br>$message
";

// Настройки PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    //$mail->SMTPDebug = 2;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    // Настройки вашей почты
    $mail->Host       = 'smtp.yandex.ru'; // SMTP сервера вашей почты
    $mail->Username   = 'anime.stepanovna'; // Логин на почте
    $mail->Password   = 'gtcxxezmgcjplfkr'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('anime.stepanovna@yandex.ru', 'Anime'); // Адрес самой почты и имя отправителя

    // Получатель письма
    $mail->addAddress('d.str1ke@yandex.ru');  

// Отправка сообщения
if ($phone) {
    $mail->isHTML(true);
    $mail->Subject = $title;
    $mail->Body = $body;   
}
 

// Проверяем отравленность сообщения
if ($mail->send()) {$res = "success";} 
else {$res = "error";}

} catch (Exception $e) {
    $res = "error";
    $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}

// Отображение результата
echo json_encode(["result" => $res, "resultfile" => $rfile, "status" => $status]);