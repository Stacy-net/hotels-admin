<?php
// Підключення до бази даних
  $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hotel_bd";

    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn->set_charset("utf8mb4");
    $count = 0;

    // Перевірка підключення
  if ($conn->connect_error) {
    die("Помилка підключення: " . $conn->connect_error);
  }

?>