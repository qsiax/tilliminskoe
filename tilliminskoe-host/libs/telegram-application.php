<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];
$q = '';
$token = "5398694051:AAFedGOPYCGahZc69lbzeRwuAcGZsnZzA4Q";
$chat_id = "-679877875";
$arr = array(
  'ЗАЯВКА' => $q,
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Почта: ' => $email,
  'Сообщение: ' => $message
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: /about');
} else {
  echo "Ошибка";
}
?>