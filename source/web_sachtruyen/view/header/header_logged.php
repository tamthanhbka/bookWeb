<!-- Trang chủ sau khi đăng nhập thành công -->
<?php
    // TODO
    // Gán Username cho t nhé
    // $userName = " "
?>
<header>
    <div class="row header">
        <!-- Logo -->
        <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2 logo">
            <img src="http://127.0.0.1/web_sachtruyen/images/logo/main-logo.jpg" alt="main-logo">
        </div>
        <!-- Search -->
        <div class="col-md-6"> 
            <div class="search-box mt-4"> 
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
                <div class=" col mt-4">
                    <a href="#" class="upgrade-author">
                        <img src="http://127.0.0.1/web_sachtruyen/images/header/upgrade-author.png" alt="">
                        Trở thành tác giả
                    </a>
                </div>
                <div class="col mt-4">
                    <a href="" class="header-signin">
                        <img src="http://127.0.0.1/web_sachtruyen/images/header/icon-user.svg" alt="">
                        <?php echo $userName;?>
                    </a>
                </div>
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
</header>