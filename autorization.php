<?php
require "app/include/db.php";


$username = filter_var(trim( $_POST['username']), FILTER_SANITIZE_STRING) ;
$email = filter_var(trim( $_POST['email']), FILTER_SANITIZE_STRING) ;
$phone = filter_var(trim( $_POST['phone']), FILTER_SANITIZE_STRING) ;
$password = filter_var(trim( $_POST['password']), FILTER_SANITIZE_STRING) ;
if(mb_strlen($password) < 3 )
{
    echo "Недопустимая длянна";
    exit();
}

echo $username;

$sql="SELECT * FROM `users` WHERE `email` = '" . $_POST['email'] . "' AND `password` = '" . $_POST['password'] . "'";

$result = mysqli_query($conn, $sql);
$user = $result->fetch_assoc();
 setcookie('user_id', $user['id'], time() + 3600,'/');
 if($_COOKIE["user_id"] == 0){
    echo "Нет пользователя";
    exit();
 }


echo $_COOKIE["user_id"];
echo $user;