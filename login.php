<?php
include "include/db.php";

include "include/users.php";

$data = $_POST;
$login = $data['login'];
$pass = $data['pass'];


if (isset($data['enter'])){

    if ($data['login'] == "" ){
        $errors[] = "Укажите логин";
    }

    if ($data['pass'] == ""){
        $errors[] = "Укажите пароль";
    }

     $validation = get_users($connect, "SELECT * FROM users WHERE login = '$login' AND password = '$pass'");
     if (count($validation) == 0){
         $errors[] = "Неправильный логин или пароль";
     }

     if (count($errors) == 0){
         $_SESSION["login-user"] = $validation;
         header("location:/index.php");
     }
     else{
         echo "<div style='color:red;'>". $errors[0] ."</div>";
     }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Авторизация</title>
</head>
<body>
<?php include "include/menu.php";?>
<form action="login.php" METHOD="POST">
    <div class="form-group">
        <label for="formGroupExampleInput">Логин</label>
        <input type="text" name="login" class="form-control" id="formGroupExampleInput" placeholder="Логин">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Пароль</label>
        <input type="password" name="pass" class="form-control" id="formGroupExampleInput2" placeholder="пароль">
    </div>

    <button type="submit" name="enter">Войти</button>
</form>

</body>
</html>
