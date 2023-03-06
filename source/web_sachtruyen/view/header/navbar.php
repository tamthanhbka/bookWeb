<div class="header-nav">
        <ul class="nav nav-tabs border border-success border-end-0 border-bottom-0 border-start-0 border-2">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle color-black" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Thể loại</a>
                    <ul class="dropdown-menu">
                    <?php
                        $categories = Sach::getAllCategory();
                        foreach ($categories as $category) {
                            echo"
                                <li><a class=\"dropdown-item color-waka\" href=\"index1.php?TL=$category\">$category</a></li>
                            ";
                        }
                    ?>
                    <!-- <li><hr class="dropdown-divider"></li> -->
                </ul>
            </li>
            
            <li class="nav-item">
                <a class="nav-link color-black" href="index1.php">Tất cả các truyện</a>
            </li>
            <?php
                $categories = Sach::getAllCategory();
                foreach ($categories as $category) {
                    echo"
                        <li class=\"nav-item\">
                            <a class=\"nav-link color-black\" href=\"index1.php?TL=$category\">$category</a>
                        </li>
                    ";
                }
            ?>  
        </ul>
    </div>