<?php

// $link = mysqli_connect('localhost','root','','hotel_bd');

// if(mysqli_connect_errno()){
// echo "Errors connect to BD... " . mysqli_connect_error();
// exit();
// }



$servername = "localhost";
$database = "hotel_bd";
$username = "root";
$password = "";
// Создаем соединение
$conn = mysqli_connect($servername, $username, $password, $database);
$conn->set_charset("utf8mb4");
// Проверяем соединение
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


?>