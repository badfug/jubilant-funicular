<?php if($_SESSION["login-user"][0]) : ?>

    <div class="card" style="width: 18rem;" align="center"> 
    <img class="card-img-top" src="<?php echo $post["img"];?>" alt="Card image cap"> 
    <div class="card-body"> 
    <h5 class="card-title"><?php echo $post["title"]; ?></h5> 
    <h6 class="card-title"><?php echo $post["tags"]; ?></h6> 
    <p class="card-text"><?php echo $post["text"]; ?></p>
        <?php if($_SESSION["login-user"][0][rights]) : ?>
            <a href="../del_post.php?id=<?php echo $post['id']; ?>">
            <button type="button" class="btn btn-danger">Удалить</button>
            </a>
            <a href="../edit_post.php?id=<?php echo $post['id'];?>&title=<?php echo $post['title']; ?>&tags=<?php echo $post['tags']; ?>&text=<?php echo $post['text'];?>">
            <button type="button" class="btn btn-primary">Редактировать</button>
            </a>
            


            <?php if (count(show_status($connect, $_SESSION["login-user"][0][id], $post[id]))): ?>
            `   <a href="dis_post.php?post_id=<?php echo $post['id'];?>&user_id=<?php echo $_SESSION["login-user"][0][id]; ?>&likes=<?php echo $post[likes]; ?>">
                    <button type='button' class='btn btn-danger'><?php echo $post[likes] ?></button>
                </a>

            <?php else : ?>
                <a href="like_post.php?post_id=<?php echo $post['id'];?>&user_id=<?php echo $_SESSION["login-user"][0][id]; ?>&likes=<?php echo $post[likes]; ?>">
                    <button type='button' class='btn btn-light'><?php echo $post[likes]; ?></button>
                </a>
            <?php endif; ?>
        <?php endif; ?>
    </div>
<?php endif; ?>
