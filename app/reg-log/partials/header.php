<?php 

/*підключення до db.php */
  require($_SERVER['DOCUMENT_ROOT'] . '/app/include/db.php');
  //якщо сесії немає, то підключаємо
  if (!isset($_SESSION)) {
    session_start();
  }
  require($_SERVER['DOCUMENT_ROOT'] . '/app/reg-log/configs/helpers.php');

/*

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

    if ($user['tip'] != "admin") {
      header("Location: /index.php");
    }

    */

  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Majestic Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="app/reg-log/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="app/reg-log/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="app/reg-log/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="app/reg-log/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="app/reg-log/images/favicon.png" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx" crossorigin="anonymous">

</head>
<body>
<?php
 /* if(isset($_SESSION['user_id']) && $_SESSION['user_id'] != null){
    echo '<a href="logout.php">Logout</a>';
  }else if(isset($_COOKIE['user_id']) && $_COOKIE['user_id'] != null){
    echo '<a href="logout.php" class="logout">Logout</a>';
  }else{*/
?>
  <a href="/index.php">RETURN</a>

<?php
/*}*/
?>