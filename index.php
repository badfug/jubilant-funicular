<?php include "include/db.php"; ?>


<!DOCTYPE html>
<html>
<head>
    <?php

include "include/posts.php";

    ?>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>АХАХАХХАХ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
     integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="main.js"></script>
</head>
<body>
<style>
   body {
    background-image: url(images/background.jpg);
   }
  </style>

    <?php
    include "include/menu.php";
    include "include/likes.php";

    ?>

    <?php
    foreach($posts as $post){
        include "include/post.php";
    }
    ?>
</body>
</html>