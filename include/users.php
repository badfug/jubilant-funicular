<?php

include "db.php";

function add_user($link, $login, $pass) {
    $sql = "INSERT INTO users (login, password) VALUES ('$login', '$pass')";

    $result = mysqli_query($link, $sql);
}

function get_users($link, $sql){

    $result = mysqli_query($link, $sql);

    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $users; 
}