<?php
  require "../config/connection.php";
  use voku\helper\AntiXSS;
  require_once __DIR__ . '/vendor/xss/autoload.php';
  $antiXss = new AntiXSS();

  if(isset($_SESSION['login'])) {
      header("Location: ./home");
      exit;
  }

  if(isset($_POST['login']))
  {
    $username_xss = mysqli_real_escape_string( $conn, stripslashes( htmlspecialchars($_POST['username']) ));
    $password_xss = mysqli_real_escape_string( $conn, stripslashes( htmlspecialchars($_POST['password']) ));
    $captcha_xss = mysqli_real_escape_string( $conn, stripslashes( htmlspecialchars($_POST['captcha']) ));
    //xss clear
    $username = $antiXss->xss_clean($username_xss);
    $password = $antiXss->xss_clean($password_xss);
    $captcha = $antiXss->xss_clean($captcha_xss);

    if (isset($_SESSION["code"])) {
      $true_captcha_xss = mysqli_real_escape_string( $conn, stripslashes( htmlspecialchars($_SESSION["code"]) ));
      $true_captcha = $antiXss->xss_clean($true_captcha_xss);
      if ($true_captcha != $captcha) {
        echo "
    			<script>
    				alert('Kode Captha Salah');
    				document.location.href='login';
    			</script>
    		";
        exit;
      } else {
        $res = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");

        if (mysqli_num_rows($res) === 1) {
          //cek password
          $row = mysqli_fetch_assoc($res);
          if (password_verify($password, $row["password"])) {
            //set session
            $_SESSION['login'] = true;
            $_SESSION['data'] = $row;
            header("Location: ./home");
            exit;
          }
        }
        $error = true;
      }
    }
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Buku Antikorupsi | Login Admin</title>
  <!-- favicon  -->
  <link rel="shortcut icon" href="../images/Logo KPK/favicon.png">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">
  <link href="css/login.css" rel="stylesheet">

</head>

<body class="bg-light">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-md-5 mt-5">

        <!-- Alert Error -->
        <?php if(isset($error)) :?>
        <div class="alert alert-danger" role="alert">
          <strong>Username / Password Salah</strong>
          <p>Perhatikan huruf besar dan kecil</p>
        </div>
        <?php endif;?>
        <!-- End Of Alaert Error -->

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>
                  <form class="user" method="post">
                    <div class="input-group mb-3">
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                      </div>
                      <input type="text" name="username" class="form-control input_user validate" placeholder="username" required>
                    </div>
                    <div class="input-group mb-2">
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                      </div>
                      <input type="password" name="password" class="form-control input_pass" placeholder="password">
                    </div>
                    <img class="w-100" src="vendor/captcha/captcha.php" alt="captcha" />
                    <div class="input-group my-2">
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-shield-alt"></i></span>
                      </div>
                      <input type="text" name="captcha" class="form-control input_pass" placeholder="captcha code" maxlength="5">
                    </div>
                    <div class="d-flex justify-content-center mt-3 login_container">
                      <button type="submit" name="login" class="btn login_btn">Login</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
