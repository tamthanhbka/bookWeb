<?php
    // TODO $href_loggin = "link Login"
    $href_loggin = "#"
?>
<header>
    <div class="row header">
        <!-- Logo -->
        <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2 logo mt-3">
            <a href="index.php">
                <img class="col-10" src="images/logo/main-logo.jpg" alt="main-logo">
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
                        <img src="images/header/upgrade-author.png" alt="">
                        Trở thành tác giả
                    </a>
                </div>
                <div class="col mt-5">
                    <a href="<?php echo $href_loggin?>" class="header-signin name">
                        <img src="images/header/icon-user.svg" alt="">
                        Đăng nhập
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>