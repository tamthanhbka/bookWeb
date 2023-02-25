<div class="row content <?php if (isset($_GET["activeTab"]) && $_GET['activeTab'] != "intro") echo "disable" ?>">
    <p><?= str_replace("\n", "</p><p>", $sach->moTa) ?></p>
</div>