<?php

?>
<div class="row content <?php if (!isset($_GET['activeTab']) || $_GET['activeTab'] != "listchapter") echo "disable" ?>">
    <ul>
        <?php
        foreach ($chuongs as $chuong) { ?>
            <li class="" chapter-item>
                <a href="/web_sachtruyen/view/chapter?id=<?= $_GET['id'] ?>&chapId=<?= $chuong->chiSo ?>"><?= $chuong->tenChuong; ?></a>
                <span><?php echo (int)(strlen($chuong->noiDung) / 6) . " chữ"; ?></span>
            </li>
        <?php
        }
        ?>
    </ul>
</div>