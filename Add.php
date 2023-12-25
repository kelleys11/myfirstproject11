<?php
require_once ('config/connect.php');
$FIO = $_POST['FIO'];
$DATE = $_POST['DATE'];
$OCH = $_POST['OCH'];

$sql = "INSERT INTO `goods` (`ФИО`, `Дата рождения`, `Очередь`) VALUES ('$FIO','$DATE','$OCH')";

$connect -> query ($sql);





header ('location: index.php');
?>

