<div class="row add-book-comment">
    <h3 id="cmt"><i class="bi bi-chat-quote icon-title"></i>Bình luận</h3>
    <div class="input-comment">
        <form class="row" action="../../controller/addCmt.php?id=<?= $_GET['id'] ?><?php if (isset($_GET['chapId'])) echo "&chapId=" . $_GET['chapId']; ?>" method="post">
            <textarea class=" form-control" name="comment" id="comment" rows="5" placeholder="Nhập nội dung tối thiểu 10 chữ cái, tối đã 500 chữ cái"></textarea>
            <input class=" submit-cmt-btn" type="submit" value="Gửi bình luận">
        </form>
    </div>
</div>