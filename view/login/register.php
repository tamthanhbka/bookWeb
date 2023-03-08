<?php
session_start();
$href_dk = "#";
$usernameErr = $usenameErr = $emailErr = $contactErr = $passwordErr = $repasswordErr = "";
$username = $usename = $email = $contact = $password = $repassword = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["usename"])) {
		$usenameErr = "Please enter your name";
	}else{
		if (empty($_POST["usename"])){
			$usenameErr = "Please enter your Usename";
			$usename = "";
		}else{
			$usename = $_POST['usename'];
			if (empty($_POST["username"])) {
				$usernameErr = "Please enter your Username";
				$username = "";
			}else{
				$username = $_POST['username'];

				if (empty($_POST["password"])) {
					$passwordErr = "Please enter your Password";
					$password = "";
				}else{
					$password = $_POST['password'];

					if (empty($_POST["repassword"])) {
						$repasswordErr = "Please enter your rePassword";
						$repassword = "";
					}else{
                        $repassword = $_POST["repassword"];
						if($password != $repassword)
							echo "<script type='text/javascript'>alert('Khong trung mat khau');</script>";
						else{
							if (empty($_POST["email"])){
								$emailErr = "Please enter your email address";
							}else{
								if (filter_var($email, FILTER_VALIDATE_EMAIL)){
									$emailErr = "Invalid email format";
									$email = "";
								}else{
									$email = $_POST['email'];

									if (empty($_POST["contact"])){
										$contactErr = "Please enter your phone number";
									}else{
										if(!preg_match("/^[0-9 -]*$/", $contact)){
											$contactErr = "Please enter a valid phone number";
											$contact = "";
										}else{
											$contact = $_POST['contact'];

											include "../../db/connectDB.php";
											$sql= "SELECT * FROM NguoiDung WHERE TenDN= '$username'";
											$stmt = $pdo->query($sql);
											if($stmt->rowCount()>0){
												$message = "Username da ton tai";
												echo "<script type='text/javascript'>alert('$message');</script>";
												header("Location:http://127.0.0.1/web_sachtruyen/index.php");
											}
											else{
												$sql = "INSERT INTO NguoiDung(TenDN,MatKhau,Email,SoDienThoai,DiemTichLuy,VaiTro) VALUES('$username', '$password', '$email', '$contact', '0', '1')";
												$pdo -> query($sql);									
												$sql = "SELECT ID FROM NguoiDung WHERE TenDN = '$username'";
												$stmt = $pdo->query($sql);
												while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
													$_SESSION['id']= $row['ID'];
												}
												header("Location:http://127.0.0.1/web_sachtruyen/index.php");
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

                        <div class="form-group">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-item">
                                <input class="form-control" type="text" name="username" id="username"
                                    placeholder="Tên tài khoản">
                                    <span class="error" style="color: red; font-size: 0.8em;"><?php echo $usernameErr;?></span><br>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-item">
                                <input class="form-control" type="text" name="usename" id="username"
                                    placeholder="Tên hiển thị">
                                    <span class="error" style="color: red; font-size: 0.8em;"><?php echo $usenameErr;?></span><br>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-item">
                                <input class="form-control" type="text" name="contact" id="username"
                                    placeholder="Số điện thoại">
                                    <span class="error" style="color: red; font-size: 0.8em;"><?php echo $contactErr;?></span><br>
                            </div>
                        </div>
						<div class="form-group">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-item">
                                <input class="form-control" type="text" name="email" id="username"
                                    placeholder="Email">
                                    <span class="error" style="color: red; font-size: 0.8em;"><?php echo $emailErr;?></span><br>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-item input-pass">
                                <input class="form-control" type="password" name="password" id="password"
                                    placeholder="Mật khẩu">
                                <!-- <div class="show-pass">
                                    <input type="checkbox" onclick="myFunction()">
                                </div> -->
                                <span class="error" style="color: red; font-size: 0.8em;"><?php echo $passwordErr;?></span><br>
                            </div>

                        </div>

                        <div class="form-group">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-item input-pass">
                                <input class="form-control" type="password" name="repassword" id="repassword"
                                    placeholder="Nhập lại mật khẩu">
                                <!-- <div class="show-pass">
                                    <input type="checkbox" onclick="myFunction1()">
                                </div> -->
                                <span class="error" style="color: red; font-size: 0.8em;"><?php echo $repasswordErr;?></span><br>
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