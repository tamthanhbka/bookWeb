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
</header>