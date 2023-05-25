<?php 
//підключення до  header.php
  require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');

//якщо сесія існує і не null
  if(isset($_SESSION["user_id"]) && $_SESSION["user_id"] != null) {
//присвоїти null + перехід на початкову сторінку
  	$_SESSION["user_id"] = null;
  		header("Location: /");
  }
//якщо кукі існує і не null
  if(isset($_COOKIE["user_id"]) && $_COOKIE["user_id"] != null) {

    //обнуляємо кукі
     setcookie('user_id', '', 0, '/');
      header("Location: /");
  }
?>