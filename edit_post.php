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
    $data = $_GET;
    $new_data = $_POST;
    if (isset($new_data['edit'])){
        edit_posts ($connect, $data['id'], $new_data['title'], $new_data['tags'], $new_data['text']);
    }
    ?>
    <form action="edit_post.php?id=<?php echo $data['id']; ?>" METHOD="POST">
  <div class="form-group">
    <label for="formGroupExampleInput">Название</label>
    <input value="<?php echo $data['title']; ?>" type="text" name="title" class="form-control" id="formGroupExampleInput" placeholder="Название">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Тэги</label>
    <input  value="<?php echo $data['tags']; ?>" type="text" name="tags" class="form-control" id="formGroupExampleInput2" placeholder="Тэги">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Текст</label>
    <input value="<?php echo $data['text']; ?>"  type="text" name="text" class="form-control" id="formGroupExampleInput2" placeholder="Текст">
    <button type="submit" name="edit">Редактировать</button>
  </div>
</form>
</body>
</html>