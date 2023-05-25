<?php 
require "app/include/db.php";

//якщо сесії немає, то підключаємо
  if (!isset($_SESSION)) {
    session_start();
  }
  require($_SERVER['DOCUMENT_ROOT'] . '/app/reg-log/configs/helpers.php');

  //змінні - якщо існує сесія і кукі
  $is_session = isset($_SESSION["user_id"]) && $_SESSION["user_id"] != null;
  $is_cookie = isset($_COOKIE["user_id"]) && $_COOKIE["user_id"] != null;
  
  //якщо є сесія або кукі
  if($is_session || $is_cookie){
    //то присвоюємо: 1- сесію, 2-кукі
    $userID = $is_session ? $_SESSION["user_id"] : $_COOKIE["user_id"];
    
    $sql = "SELECT * FROM users WHERE id=" . $userID;
    //створюємо з'єднання
    $result = mysqli_query($conn, $sql);
    //перебираємо масив
    $user = $result->fetch_assoc();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- fontawesome CSS -->
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <!-- magnific CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/gijgo.min.css">
    <!-- niceselect CSS -->
    <link rel="stylesheet" href="css/nice-select.css">
    <!-- slick CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/MyStyle.css">
</head>
<body>
    
    <!--::header part start::-->
   <header class="main_menu">
        <div class="sub_menu">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-md-6">
                        <div class="sub_menu_right_content">
                            <span>Top destinations</span>
                            <a href="#">Asia</a>
                            <a href="#">Europe</a>
                            <a href="#">America</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-md-6">
                        <div class="sub_menu_social_icon">
                            <a href="#"><i class="flaticon-facebook"></i></a>
                            <a href="#"><i class="flaticon-twitter"></i></a>
                            <a href="#"><i class="flaticon-skype"></i></a>
                            <a href="#"><i class="flaticon-instagram"></i></a>
                            <span><i class="flaticon-phone-call"></i>+880 356 257 142</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_menu_iner">
            <div class="container">
                <div class="row align-items-center ">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
                            <a class="navbar-brand" href="index.php"> <img src="img/logo.png" alt="logo"> </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse main-menu-item justify-content-center"
                                id="navbarSupportedContent">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="about.php">About</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="top-hotels.php">Top Hotels</a>
                                    </li>


                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.php">Contact</a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" id="link-1" href="register.php">Register</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="link-1" href="login.php">Login</a>
                                    </li>
                                   
                                    <li class="nav-item">
                                       <?php 
                                         //якщо є користувач
                                          if (isAuth()) {
                                            $user = getCurrentUser();
                                          ?>
                                    
                                        <!--//виводимо імя поточного користувача-->
                                            <h4 class="nav-link" id="link-2"> Hello,<?php echo $user['username']; ?> ! </h4> 
                                        <?php 
                                        }
                                        ?>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="link-1" href="logout.php">Logout</a>
                                    </li>

                                </ul>

                            </div>

                                
                    </div>
                </div>
            </div>
        </div>
    </header>

<?php

//якщо сесія існує і не null

if(isset($_SESSION["user_id"]) && $_SESSION["user_id"] != null) {
  ?>
   <!--//змінюємо стилі ел.Li в нав.меню-->
    <style type="text/css">
          .navbar-nav   li:nth-child(5), li:nth-child(6) {
          display: none;
          }


    </style>
   
 <?php

  } else if (isset($_COOKIE["user_id"]) && $_COOKIE["user_id"] != null) {

  ?> 
 <!-- //змінюємо стилі ел.Li в нав.меню-->
      <style type="text/css">
          .navbar-nav  li:nth-child(5), li:nth-child(6) {
          display: none;
          }
      </style>

  <?php
    } else {

    ?>
      <style type="text/css">
          .navbar-nav  li:nth-child(8), li:nth-child(9) {
          display: none;
          }
      </style>
<?php

    } 

?> 


 
 <style type="text/css">
                                              
    #link-1 {
        color: red ;
        text-decoration-line: underline ;
}

    #link-2 {
        
        text-decoration-line: underline ;
}
</style>


