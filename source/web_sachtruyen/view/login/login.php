<?php
include "../../model/nguoidung/Nguoidung.php";
$str = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $str = Nguoidung::checklogin($username, $password);

    // if($stmt->rowCount()>0){
    //     while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
    //         $_SESSION['id']=$row[0];
    //     }

    //     header("Location:http://127.0.0.1/web_sachtruyen/index.php");
    // }else{
    //     echo "login faild";
    //     header("Location:http://127.0.0.1/web_sachtruyen/index.php");
    // }
  }
}
?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
  <link href="../../css/bootstrap.css" rel="stylesheet">

  <link href="../../css/resetpass.css" rel="stylesheet">
  <link href="../../css/login.css" rel="stylesheet">
  <link href="./fonts/themify-icons-font/themify-icons/themify-icons.css" rel="stylesheet">
</head>
<!-- Header -->

<section class="section-login">
  <div class="col-xs-3 col-sm-4 col-md-4 col-lg-4"></div>
  <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 login-background">
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 login-form-background">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 control-close">
        <i class="ti-close"></i>
      </div>

      <h3>Đăng nhập</h3>

      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

        <div class="row">

          <form action="login.php" name="login-form" method="post">

            <div class="form-group">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-item">
                <input class="form-control" type="text" name="username" id="username" placeholder="Tên đăng nhập">
              </div>
            </div>

            <div class="form-group">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-item input-pass">
                <input class="form-control" type="password" name="password" id="password" placeholder="Mật khẩu">
                <!-- <div class="show-pass">
                  <input type="checkbox" onclick="myFunction()">
                </div> -->
              </div>
            </div>



            <div class="form-group">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-item">
                <?php
                if ($str == "Đăng nhập thành công") {
                  $user = Nguoidung::findByUsername($username);
                  session_start();
                  $_SESSION['id'] = $user->id;
                  $_SESSION['username'] = $user->tenDN;
                  $_SESSION['user'] = $user;
                  header("Location:http://127.0.0.1/web_sachtruyen/index.php");
                } elseif ($str == "Tài khoản không tồn tại") {
                  echo '<div class="login-notifi">
                        <span><i id="success" class="bi bi-check-lg"></i><span class="mess">Tài khoản không tồn tại</span></span>
                      </div>';
                } elseif ($str == "Mật khẩu không đúng") {
                  echo '<div class="login-notifi">
                        <span><i id="success" class="bi bi-check-lg"></i><span class="mess">Mật khẩu không đúng</span></span>
                      </div>';
                } else echo '<div></div>';

                ?>
              </div>
            </div>

            <div class="form-group">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-btn">
                <input class="login-btn" type="submit" name="submit" value="Đăng nhập">
              </div>
            </div>

            <div class="form-group">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 form-item">
                <a id="register-switch-btn" href="register.php">Đăng ký ngay</a>
              </div>

              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 form-item">
                <a id="reset-pass-switch-btn" href="resetpass.php">Quên mật khẩu</a>
              </div>
            </div>

          </form>

        </div>

      </div>

    </div>
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
  </div>
  <div class="col-xs-3 col-sm-4 col-md-4 col-lg-4"></div>
</section>