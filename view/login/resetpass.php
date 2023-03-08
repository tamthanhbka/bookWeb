<link href="../../css/bootstrap.css" rel="stylesheet">
    <link href="../../css/register.css" rel="stylesheet">
    <link href="../../css/resetpass.css" rel="stylesheet">
    <link href="../../css/login.css" rel="stylesheet">
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

                    <form action="index.php" name="login-form" method="post">

                        <div class="form-group">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-item">
                                <input class="form-control" type="text" name="username" id="username"
                                    placeholder="Email">
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
                                <!-- Show message -->
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