<?php

header("Location: index.php"); 
include "include/db.php"; 
include "include/posts.php"; 
include "include/likes.php";

$get = $_GET; 
like_post($connect, $get[user_id], $get[post_id], $post[like]);
exit;

?>