<?php
// TODO $href_loggin = "link Login"
// $href_loggin = "http://127.0.0.1/web_sachtruyen/view/login/login.php";
// $href_profile = "http://127.0.0.1/web_sachtruyen/view/profile/profile.php";
session_start();
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
                    <form class="search-form" action="http://127.0.0.1/web_sachtruyen/search.php" method="GET">
                        <input class="form-control input col-5" name="searchInfo" placeholder="Nhập tên sách, tác giả.." type="text" value="<?php echo (isset($_GET['searchInfo'])) ? $_GET['searchInfo'] : ''; ?>">
                        <button class="btn btn-link search-btn col-1" type="submit">
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
                    <?php
                        if($_SESSION['id'] == NULL || !isset($_SESSION['id'])){
                            echo'<a href="http://127.0.0.1/web_sachtruyen/view/login/login.php"class="header-signin name">
                                <img src="http://127.0.0.1/web_sachtruyen/images/header/icon-user.svg" alt="">
                                Đăng nhập
                            </a>';
                        } else {        
                            echo'
                            <div>
                                <span><img src="http://127.0.0.1/web_sachtruyen/images/header/icon-avt.png" alt=""></span>
                            <div
                            <div class="dropdown">
                                <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        '.$_SESSION['username'].'
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="http://127.0.0.1/web_sachtruyen/view/profile/profile.php">Profile</a></li>
                                    <li><a class="dropdown-item" href="http://127.0.0.1/web_sachtruyen/view/login/logout.php">Logout</a></li>
            
                                </ul>
                                </div>';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</header>