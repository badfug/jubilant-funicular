<?php include "include/db.php";?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Добавить пост</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
     integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="main.js"></script>
</head>
<body>
<?php
    include "include/menu.php";
    include "include/posts.php";
    $data = $_POST;
    $file = $_FILES['img'];

    if (isset($file)) {
      $name = $file['name'];
      $size = $file['size'];
      $name = $file['name'];
      $tmp_name = $file['tmp_name'];
      $type = $file['type'];

      move_uploaded_file($tmp_name, "images/".$name);

      
  }
 if (isset($data['add'])){
  $path = "images/".$name;
 add_posts ($connect, $data['title'], $data ['tags'], $data ['text'], $path);
 }
    ?>
    <form action="add_post.php" METHOD="POST" enctype="multipart/form-data">
 
  <div class="form-group">
    <label for="formGroupExampleInput">Название</label>
    <input type="text" name="title" class="form-control" id="formGroupExampleInput" placeholder="Название">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Тэги</label>
    <input type="text" name="tags" class="form-control" id="formGroupExampleInput2" placeholder="Тэги">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Текст</label>
    <input type="text" name="text" class="form-control" id="formGroupExampleInput2" placeholder="Текст">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Фото</label>
    <input type="file" name="img" class="form-control" id="formGroupExampleInput2" placeholder="Текст">
  </div>
  <button type="submit" name="add">Создать новый пост</button>

</form>
</body>
</html>