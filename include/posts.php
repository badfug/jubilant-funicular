<?php

include "db.php"; 

function get_posts($con){ 
    $sql = "SELECT * FROM Posts"; 

    $result = mysqli_query($con, $sql); 

    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC); 
    return $posts; 
} 

$posts = get_posts($connect);

function add_posts($link, $title, $tags, $text, $path) { 
    $sql = "INSERT INTO `Posts` (`title`, `tags`, `img`, `text`) VALUES ('".$title."', '".$tags."', '$path', '".$text."');"; 
    
    $result = mysqli_query($link, $sql); 
}

function del_posts($link, $id){ 
    $sql = "DELETE FROM `Posts` WHERE id=".$id.";"; 
    
    $result = mysqli_query($link, $sql); 
} 

function edit_posts($link, $id, $title, $tags, $text){ 
    $sql = "UPDATE `Posts` SET `title` = '$title', `tags` = '$tags', `img` = '-', `text` = '$text' WHERE `posts`.`id` = $id";

    $result = mysqli_query($link, $sql); 
}
?>

