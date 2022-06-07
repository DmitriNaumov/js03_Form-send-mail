<?php
$recepient = "nd.webdev008@gmail.com";
$sitename = "PortfolioND";

$name = $_POST['name'];
$phone = $_POST['tel'];
$mail = $_POST['mail'];
$option = $_POST['option'];
$mess = $_POST['mess'];

$name = trim($name);
$phone = trim($phone);
$mail = trim($mail);
$option = trim($option);
$mess = trim($mess);

$name = htmlspecialchars($name);
$phone = htmlspecialchars($phone);
$mail = htmlspecialchars($mail);
$option = htmlspecialchars($option);
$mess = htmlspecialchars($mess);

$name = urldecode($name);
$phone = urldecode($phone);
$mail = urldecode($mail);
$option = urldecode($option);
$mess = urldecode($mess);

$message = "Name: $name \nTel: $phone \nEmail: $mail \nOption: $option \nMess: $mess";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
