<?php
require ("app/reg-log/partials/header.php");

if(!empty($_POST)){
  $sql="SELECT * FROM `users` WHERE `username` = '" . $_POST['name'] . "' AND `password` = '" . $_POST['password'] . "'";

  $result = mysqli_query($conn, $sql);
  $user = $result->fetch_assoc();
  if($user){
    if(isset($_POST['remember'])){
      setcookie('user_id', $user['id'], time()+60*60*24*30,'/');

      echo "<h2>" . $_COOKIE["user_id"] . "</h2>";
    } else {
      $_SESSION['user_id']=$user['id'];
    }

    header("Location: /");  
  } else {
    $_SESSION['user_id'] = null;
      setcookie('user_id', '', 0,'/');

  }
}
?>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
              <div class="brand-logo">
                <img src="/img/logo.png" alt="logo">
              </div>
              <h4>Welcome back!</h4>
              <h6 class="font-weight-light">Happy to see you again!</h6>
              <form class="pt-3" action="#" method="POST">
                <div class="form-group">
                  <label for="exampleInputEmail">Username</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control form-control-lg border-left-0" id="exampleInputEmail"
                      placeholder="Username" name="name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword">Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="password" class="form-control form-control-lg border-left-0" id="exampleInputPassword"
                      placeholder="Password" name="password">
                  </div>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input" name="remember">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="my-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"
                    >LOGIN</button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="register.php" class="text-primary">Create</a>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-6 login-half-bg d-flex flex-row">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2023 All
              rights reserved.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php
require "app/reg-log/partials/footer.php";
?>

<style type="text/css">

 .auth .login-half-bg {
    background: url("../app/reg-log/images/auth/login-bg.jpg");
    background-size: cover;
  }

</style>