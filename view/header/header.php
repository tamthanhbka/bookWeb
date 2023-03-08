<?php
    // // TODO $href_loggin = "link Login"
    // include "../../model/nguoidung/Nguoidung.php";
    //      $id = NULL;
    //     if($id != NULL) $user = Nguoidung::findById($id);
$user = NULL;
$href_loggin = "http://127.0.0.1/web_sachtruyen/view/login/log_in.php";
$href_profile = "http://127.0.0.1/web_sachtruyen/view/profile/profile.php"
?>
<header>
    <div class="row header">
        <!-- Logo -->
        <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2 logo mt-3">
            <a href="http://127.0.0.1/web_sachtruyen/index.php">
                <img class="col-10" src="http://127.0.0.1/web_sachtruyen/images/logo/main-logo.jpg" alt="main-logo">
            </a>
        </div>

        <!-- Search -->
        <div class="col-md-6">
            <div class="search-box mt-5">
                <div class="row">
                    <form class="search-form" action="#">
                        <input class="form-control input col-5" placeholder="Nhập tên sách, tác giả.." type="text">
                        <button class="btn btn-link search-btn col-1">
                            <i class="bi bi-search"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Đăng nhập -->
        <div class="header-button col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div class="row">
                <div class=" col mt-5">
                    <a href="#" class="upgrade-author name">
                        <img src="http://127.0.0.1/web_sachtruyen/images/header/upgrade-author.png" alt="">
                        Trở thành tác giả
                    </a>
                </div>
                <div class="col mt-5">
                    <a href="<?php /*if($user == NULL)echo $href_loggin;else */echo $href_profile ?>" class="header-signin name">
                        <img src="http://127.0.0.1/web_sachtruyen/images/header/icon-user.svg" alt="">
                        <?php if($user == NULL) echo "Đăng Nhập";else echo $user->TenDN;?>Đăng nhập
                    </a>
                </div>
            </div>
        </div>
        <!-- Nav bar -->
    <div class="header-nav">
        <ul class="nav nav-tabs border border-success border-end-0 border-bottom-0 border-start-0 border-2">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Thể loại</a>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Truyện dài</a></li>
                    <li><a class="dropdown-item" href="#">Truyện ngắn</a></li>
                    <li><a class="dropdown-item" href="#">Truyện chữa lành</a></li>
                    <!-- <li><hr class="dropdown-divider"></li> -->
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="index1.php">Tất cả các truyện</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Truyện dài</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Truyện ngắn</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Truyện chữa lành</a>
            </li>
        </ul>
    </div>
    </div>
</header>