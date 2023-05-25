<?php
require "app/reg-log/partials/header.php";

 if(!empty($_POST)){
    echo $_POST['name'] . " - " . $_POST['email'];
  
    $sql = "INSERT INTO users (`username`, `email`, `phone`, `password`) VALUES ('" . $_POST['name'] . "', '" . $_POST['email'] . "', '" . $_POST['phone'] . "', '" . $_POST['password'] . "');";

    if(mysqli_query($conn, $sql)){
      echo "INSERT";
      header("Location: /login.php");
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
  }

?>

<div class="container-scroller">
  <div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
      <div class="row flex-grow">
        <div class="col-lg-6 d-flex align-items-center justify-content-center">
          <div class="auth-form-transparent text-left p-3">
            <div class="brand-logo">
              <img src="../../img/logo.png" alt="logo">
            </div>
            <h4>New here?</h4>
            <h6 class="font-weight-light">Join us today! It takes only few steps</h6>
            <form class="pt-3" method="POST" action="#">
              <div class="form-group">
                <label>Username</label>
                <div class="input-group">
                  <div class="input-group-prepend bg-transparent">
                    <span class="input-group-text bg-transparent border-right-0">
                      <i class="mdi mdi-account-outline text-primary"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control form-control-lg border-left-0" placeholder="Username" name="name">
                </div>
              </div>
              <div class="form-group">
                <label>Email</label>
                <div class="input-group">
                  <div class="input-group-prepend bg-transparent">
                    <span class="input-group-text bg-transparent border-right-0">
                      <i class="mdi mdi-email-outline text-primary"></i>
                    </span>
                  </div>
                  <input type="email" class="form-control form-control-lg border-left-0" placeholder="Email" name="email">
                </div>
              </div>
              <div class="form-group">
                <label>Phone</label>
                <div class="input-group">
                  <div class="input-group-prepend bg-transparent">
                    <span class="input-group-text bg-transparent border-right-0">
                      <i class="mdi mdi-phone text-primary"></i>
                    </span>
                  </div>
                  <input type="phone" class="form-control form-control-lg border-left-0" id="exampleInputPassword"
                    placeholder="Phone" name="phone">
                </div>
              </div>

              <div class="form-group">
                <label>Password</label>
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
              <div class="mb-4">
                <div class="form-check">
                  <label class="form-check-label text-muted">
                    <input type="checkbox" class="form-check-input">
                    I agree to all Terms & Conditions
                  </label>
                </div>
              </div>
              <div class="mt-3">
                <button  type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"
                  href="../../">SIGN UP</button>
              </div>
              <div class="text-center mt-4 font-weight-light">
                Already have an account? <a href="login.php" class="text-primary">Login</a>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-6 register-half-bg d-flex flex-row">
          <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2023 All rights
            reserved.</p>
        </div>
      </div>
    </div>

  </div>

</div>


<?php
require "app/reg-log/partials/footer.php";

?>


<style type="text/css">

 .auth .register-half-bg {
    background: url("../app/reg-log/images/auth/register-bg.jpg");
    background-size: cover;
  }

</style>