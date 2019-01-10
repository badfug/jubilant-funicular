<?php
function show_status($link, $user_id, $post_id){
    $sql = "SELECT * FROM likes WHERE user_id = '$user_id' AND post_id = '$post_id'"; 

    $result = mysqli_query($link, $sql); 

    return mysqli_fetch_all($result, MYSQLI_ASSOC); 
}

function like_post($link, $user_id, $post_id, $count_like){
    $add_like = "INSERT INTO `likes` (`user_id`, `post_id`) VALUES ('$user_id', '$post_id');"; 

    $count_like = (int)$count_like;

    $count_like = $count_like + 1;


    $set_like = "UPDATE `Posts` SET `likes` = '$count_like'";
    
    mysqli_query($link, $add_like);
    mysqli_query($link, $set_like);


}
 
function dislike_post($link, $user_id, $post_id, $count_like){
    $del_like = "DELETE FROM `likes` WHERE user_id = '$user_id' AND post_id = '$post_id'"; 

    $count_like = (int)$count_like;

    $count_like = $count_like - 1;

    $set_like = "UPDATE `Posts` SET `likes` = '$count_like'";
    
    mysqli_query($link, $del_like);
    mysqli_query($link, $set_like); 

}
?>

