<?php
session_start();
$href_dk = "#";
$usernameErr =  $emailErr = $contactErr = $passwordErr = $repasswordErr = "";
$username = $email = $contact = $password = $repassword = "";
$c = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
    if (empty($_POST["username"])) {
        $usernameErr = "Vui lòng nhâp tên đăng nhập";
        $username = "";
    }else{
        $username = $_POST['username'];
        if (empty($_POST["contact"])){
            $contactErr = "Vui lòng nhâp số điện thoại";
        }else{
            if(!preg_match("/^[0-9 -]*$/",$_POST["contact"])){
                $contactErr = "Số điện thoại không hợp lệ";
                $contact = "";
            }else{
                $contact = $_POST['contact'];
                if (empty($_POST["email"])){
                    $emailErr = "Vui lòng nhâp email";
                }else{
                    if (!preg_match('/^(([^<>()[\]\\.,;:\s@"\']+(\.[^<>()[\]\\.,;:\s@"\']+)*)|("[^"\']+"))@((\[\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}\])|(([a-zA-Z\d\-]+\.)+[a-zA-Z]{2,}))$/', $_POST["email"])){
                        $emailErr = "Email không hợp lệ";
                        $email = "";
                    }else{
                        $email = $_POST['email'];
                        if (empty($_POST["password"])){
                            $passwordErr = "Vui lòng nhâp mật khẩu";
                            $password = "";
                        }else{
                            $password = $_POST['password'];

                            if (empty($_POST["repassword"])) {
                                $repasswordErr = "Vui lòng nhâp nhập lại mật khẩu";
                                $repassword = "";
                            }else{
                                $repassword = $_POST["repassword"];
                                if($password != $repassword)
                                    $repasswordErr = "Không trùng mật khẩu";
                                else{
                        
                                    include "../../model/nguoidung/Nguoidung.php";

                                    $result = Nguoidung::findByUsername($username);
                                    if($result->id == NULL){
                                        $sql = "INSERT INTO NguoiDung(TenDN,MatKhau,Email,SoDienThoai,DiemTichLuy,VaiTro) VALUES('$username', '$password', '$email', '$contact', '0', '1')";
                                        $db = Database::getInstance();
                                        $db -> insert($sql);  							
                                        header("Location:http://127.0.0.1/web_sachtruyen/view/login/index.php");
                                    } else {
                                        $c = "error";
                                    }
                                    
                                }
                                
                            }
                        }
                    }
                }
            }
        }
    }
}
									
?>
<link href="../../css/bootstrap.css" rel="stylesheet">
<link href="../../css/register.css" rel="stylesheet">
<section class="section-register">
<div class="col-xs-3 col-sm-4 col-md-4 col-lg-4"></div>
    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 register-background">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 register-form-background">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 control-close">
                <i class="ti-close"></i>
            </div>

            <h3>Đăng ký</h3>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                <div class="row">

                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="register-form" method="post">
                            <?php 
                                if($c == "error")
                                    echo '<span class="error " style="color: red; font-size: 0.8em;">Tài khoản đã tồn tại</span><br>';
                            ?>
                        <div class="form-group">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-item">
                                <input class="form-control" type="text" name="username" id="username"
                                    placeholder="Tên tài khoản">
                                    <span class="error w-100" style="color: red; font-size: 0.8em;"><?php if($usernameErr!=NULL) echo "<br>"; echo $usernameErr;?></span><br>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-item">
                                <input class="form-control" type="text" name="contact" id="username"
                                    placeholder="Số điện thoại">
                                    <span class="error w-100" style="color: red; font-size: 0.8em;"><?php if($contactErr!=NULL) echo "<br>";echo $contactErr;?></span><br>
                            </div>
                        </div>
						<div class="form-group">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-item">
                                <input class="form-control" type="text" name="email" id="username"
                                    placeholder="Email">
                                    <span class="error w-100" style="color: red; font-size: 0.8em;"><?php if($emailErr!=NULL) echo "<br>";echo $emailErr;?></span><br>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-item input-pass">
                                <input class="form-control" type="password" name="password" id="password"
                                    placeholder="Mật khẩu">
                                <!-- <div class="show-pass">
                                    <input type="checkbox" onclick="myFunction()">
                                </div> -->
                                <span class="error w-100" style="color: red; font-size: 0.8em;"><?php if($passwordErr!=NULL) echo "<br>";echo $passwordErr;?></span><br>
                            </div>

                        </div>

                        <div class="form-group">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-item input-pass">
                                <input class="form-control" type="password" name="repassword" id="repassword"
                                    placeholder="Nhập lại mật khẩu">
                                <!-- <div class="show-pass">
                                    <input type="checkbox" onclick="myFunction1()">
                                </div> -->
                                <span class="error w-100" style="color: red; font-size: 0.8em;"><?php if($repasswordErr!=NULL) echo "<br>";echo $repasswordErr;?></span><br>
                            </div>

                        </div>

                        <div class="form-group">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-item">
                                <input type="checkbox" name="dk" id="">
                                Tôi đồng ý với các <a href="<?php echo $href_dk;?>">điều khoản</a> sử dụng
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-item">
                                <!-- Show message -->
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-btn">
                                <input class="register-btn" type="submit" name="submit" value="Đăng ký">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-item">
                                Bạn đã có tài khoản? <a id="login-switch-btn" href="login.php">Đăng nhập</a>
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