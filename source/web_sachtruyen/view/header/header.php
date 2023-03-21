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
                    if (!isset($_SESSION['id'])) {
                        echo '<a href="http://127.0.0.1/web_sachtruyen/view/login/login.php"class="header-signin name">
                                <img src="http://127.0.0.1/web_sachtruyen/images/header/icon-user.svg" alt="">
                                Đăng nhập
                            </a>';
                    } else {
                    ?>
                        <!-- <div class="user-dropdown cursor-pointer">
                            <div class="el-dropdown">
                                <span class="el-dropdown-link el-dropdown-selfdefine " aria-haspopup="list" aria-controls="dropdown-menu-5472" role="button" tabindex="0">
                                    <div class="w-max flex-row-center">
                                        <div class="w-9 h-9 mr-1-5 rounded-full overflow-hidden">
                                            <div class="overflow-hidden wh-full rounded-full">
                                                <img src="https://cdn.vegaid.vn/cU0spbfh3B/20230308012518/204/d1a/c67/204d1ac678502b88ad53f1c1e103d8ac.jpg" alt="" class="object-cover wh-full lazyLoad isLoaded">
                                            </div>
                                        </div> 
                                        <div class="w-max max-w-30">
                                            <p class="text-sm-14-18 fm-t-ellipsis-1 text-black-222">Thái Nguyễn Bá</p>
                                        </div></div> <i class="el-icon-caret-bottom el-icon--right el-icon-caret-bottom-cdv-color"></i></span> </div></div>
                         <div> -->
                        <div class="user-dropdown cursor-pointer">
                            <img src="http://127.0.0.1/web_sachtruyen/images/icon/icon-avt.png" alt="" style="width: 15%;">
                            <button class="el-dropdown-link el-dropdown-selfdefine " aria-haspopup="list" aria-controls="dropdown-menu-5472" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <?= $_SESSION['username'] ?>
                            </button>
                            <ul class="dropdown-menu overflow-hidden" webkit-appearance: none; tabindex="0" aria-expanded="false" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="http://127.0.0.1/web_sachtruyen/view/profile/profile.php">Profile</a></li>
                                <li><a class="dropdown-item" href="http://127.0.0.1/web_sachtruyen/view/login/logout.php">Logout</a></li>
                            </ul>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</header>