<?php if (isAuth()): ?>
    <div class="comments-area">
        <h4>Comments</h4>
        <div class="comment-list">
            <div class="single-comment justify-content-between d-flex">
                <div class="user justify-content-between d-flex">
                    <div class="thumb">
                        <img src="img/comment/comment_1.png" alt="">
                    </div>
                    <div class="desc">
                        <div class="comment">
                            <?php
                            $twits = getAllTwitsByUser(getUserID());
                            ?>
                            <ul id="listTwits">
                                <?php while ($row = $twits->fetch_assoc()): ?>
                                    <li>
                                        <?php echo $row['coment']; ?>
                                        <p class="date">
                                            <?php echo $row['created']; ?>
                                        </p>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <h5>
                                    <span><?php echo $user['username'] ?></span>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<div class="comment-form">
    <h4>Leave a comment</h4>
    <?php
    require "app/include/db.php";
    if ($_POST != null) {
        $user_id = $_POST['user_id'];
        $text = $_POST['coment'];
        $created = $_POST['created'];

        $sql = "INSERT INTO coments (coment, user_id, created) VALUES ('" . $text . "', '" . $user_id . "', '" . $created . "')";

        if (mysqli_query($conn, $sql)) {
            echo "Thank you!";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    ?>

    <?php
    if (isAuth()) {
        ?>
        <form class="form-contact comment_form" method="POST" action="#" id="commentForm">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <input type="hidden" name="user_id" value="<?php echo getUserID(); ?>">
                        <textarea class="form-control w-100" name="coment" id="coment" cols="30" rows="9"
                                  placeholder="Write Comment"></textarea>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="button button-contactForm btn_1">Send Comment</button>
            </div>
        </form>
    <?php } else { ?>
        <p>You need to <a href="register.php">register</a> or <a href="login.php">login</a> to leave a comment.</p>
    <?php } ?>
</div>

<style type="text/css">
    .comments-area,
    .comment-form {
        padding-left: 30%;
        width: 70%;
    }

    .section_padding {
        padding-top: 0px;
    }
</style>
