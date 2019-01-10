<?php

header("Location: index.php"); 
include "include/db.php"; 
include "include/posts.php"; 

$id = $_GET; 
del_posts($connect, $id["id"]); 

exit;

?>