<?php
  require "../../config/connection.php";

  if(isset($_SESSION['login'])) {
      header("Location: admin_kontak.php");
      exit;
  }

  // $password = password_hash("kpkantikorupsi123", PASSWORD_DEFAULT);
  // mysqli_query($conn, "INSERT INTO users SET username='kpk12345', password='$password'");
  // exit;

  if(isset($_POST['login']))
  {
      $username = mysqli_real_escape_string( $conn, stripslashes( htmlspecialchars($_POST['username']) ));
      $password = mysqli_real_escape_string( $conn, stripslashes( htmlspecialchars($_POST['password']) ));

      $res = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");

      if (mysqli_num_rows($res) === 1) {
        //cek password
        $row = mysqli_fetch_assoc($res);
        if (password_verify($password, $row["password"])) {
          //set session
          $_SESSION['login'] = true;
          $_SESSION['data'] = $row;
          header("Location: ./admin_kontak.php");
          exit;
        }
      }
      $error = true;
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Login Admin</title>
    <!-- favicon  -->
    <link rel="shortcut icon" href="../images/Logo KPK/icon.png">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Costume Css -->
    <link rel="stylesheet" href="css/index.css">
    <!-- icon -->
    <link rel="stylesheet" href="../css/fontawesome/css/all.min.css">
  </head>
  <body>

    <!-- Alert Error -->
    <?php if(isset($error)) :?>
    <div class="container">
      <div class="alert alert-danger" role="alert">
        <strong>Username / Password Salah</strong>
        <p>Perhatikan huruf besar dan kecil</p>
      </div>
    </div>
    <?php endif;?>
    <!-- End Of Alaert Error -->


    <div class="container h-100">
      <div class="d-flex justify-content-center h-100">
        <div class="user_card">
          <div class="d-flex justify-content-center">
            <div class="brand_logo_container">
              <img src="../images/KPK_Logo.svg" class="brand_logo" alt="Logo">
            </div>
          </div>
          <div class="d-flex justify-content-center form_container">
            <form method="post">
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
              <div class="d-flex justify-content-center mt-3 login_containe">
                <button type="submit" name="login" class="btn login_btn">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>
