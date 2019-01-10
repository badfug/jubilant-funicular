<?php include "include/db.php";?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Регистрация</title>
</head>
<body>
<?php

include "include/menu.php";
include "include/users.php";

$data = $_POST;
$login = $data['login'];

if (isset($data['reg'])){
    
    $errors = [];

    if ($data["pass"] != $data["re_pass"]){
        $errors[] = "Пароли не совпадают";
    }

    if ($data["login"] == ""){
        $errors[] = "Поле логин пустое";

    }

    if ($data["pass"] == ""){
        $errors[] = "Поле пароль пустое";

    }

    if ($data["re_pass"] == ""){
        $errors[] = "Поле повторите пароль пустое";

    }

    $count_users = count(get_users($connect, "SELECT * FROM users WHERE login = '$login'"));

    if ($count_users != 0){
        $errors[] = "Пользователь с таким логином существует";
    }

    if (count($errors) == 0){
        echo "<div style='color:green;'>Вы зарегистрированы, <a href='login.php'>авторизуйтесь</a></div>";
        add_user($connect, $data['login'], $data['pass']);
    }
    else{
        echo "<div style='color:red;'>";
        echo $errors[0];
        echo "</div>";
    }



}


?>
<form action="registration.php" METHOD="POST">
    <div class="form-group">
        <label for="formGroupExampleInput">Логин</label>
        <input type="text" name="login" class="form-control" id="formGroupExampleInput" placeholder="Логин">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Пароль</label>
        <input type="password" name="pass" class="form-control" id="formGroupExampleInput2" placeholder="пароль">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Повторите пароль</label>
        <input type="password" name="re_pass" class="form-control" id="formGroupExampleInput2" placeholder="повторите пароль">
    </div>

    <button type="submit" name="reg">Зарегистрироваться</button>
</form>

</body>
</html>
