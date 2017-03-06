<?php
$recepient = 'divup.sup@gmail.com';
$sitename = "divup.ru";
$name = trim($_POST["fio"]);
$contact = trim($_POST["connection"]);
$g1 = trim($_POST["ch"]);
$message = "Имя: $name \nКонтактные данные: $contact \nТип проекта: $g1";
$pagetitle = "Заказ на разработку проекта с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");