<?php
$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    if(isset($_POST['username'])&&isset($_POST['new-password'])&&isset($_POST['re-new-password'])){
        $username = $_POST['username'];
        $password = $_POST['new-password'];
        $rpassword = $_POST['re-new-password'];
        
        if($password != $rpassword){
            $message = "Không trùng mật khẩu mới";
        }
        else{
            include "../../model/nguoidung/Nguoidung.php";
            $result = Nguoidung::findByUsername($username);
            if($result->id != NULL){
                $sql = $sql = "UPDATE NguoiDung
                SET MatKhau = '$password'
                WHERE TenDN = '$username'";
                $db = Database::getInstance();
                $db -> insert($sql);  							
                header("Location:http://127.0.0.1/web_sachtruyen/view/login/index.php");
            } else {
                $message = "Tài khoản không tồn tại";
            }
                                    
        }
    } 
}
?>
<head><title>Login</title></head>
<link href="../../css/bootstrap.css" rel="stylesheet">
<link href="../../css/resetpass.css" rel="stylesheet">
<section class="section-resetPassword">
    <div class="col-xs-3 col-sm-4 col-md-4 col-lg-4"></div>
    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 resetPassword-background">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 resetPassword-form-background">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 control-close">
                <i class="ti-close"></i>
            </div>
            <h3>Đặt lại mật khẩu</h3>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                <div class="row">

                    <form action="resetpass.php" name="login-form" method="post">

                        <div class="form-group">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-item">
                                <input class="form-control" type="text" name="username" id="username"
                                    placeholder="Tên Đăng Nhập">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-item input-pass">
                                <input class="form-control" type="password" name="new-password" id="password"
                                    placeholder="Mật khẩu mới">
                               
                            </div>

                        </div>

                        <div class="form-group">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-item input-pass">
                                <input class="form-control" type="password" name="re-new-password" id="password"
                                    placeholder="Nhập lại mật khẩu mới">
                                
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-item">
                            <?php
                                if ($message == "Tài khoản không tồn tại"){
                                        echo'<div class="login-notifi">
                                                <span><i id="success" class="bi bi-check-lg"></i><span class="mess">Tài khoản không tồn tại</span></span>
                                            </div>';
                                        }elseif ($message == "Không trùng mật khẩu mới") {
                                        echo'<div class="login-notifi">
                                                <span><i id="success" class="bi bi-check-lg"></i><span class="mess">Không trùng mật khẩu mới</span></span>
                                            </div>';
                                        }else echo'<div></div>';
                                ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-btn">
                                <input class="login-btn" type="submit" name="submit" value="Xác nhận">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-item">
                                Quay lại <a id="login-switch-btn" href="login.php">đăng nhập</a>
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