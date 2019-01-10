<link rel="stylesheet" type="text/css" media="screen" href="main.css" />

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="../index.php"><img src="../images/АХАХАХ.png" width="128", height="32"></img></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <?php if (count($_SESSION["login-user"])) : ?>

        <li class="nav-item">
            <a class="nav-link" href="../index.php">Здравствуйте, <?php echo ($_SESSION["login-user"][0]["login"]) ; ?>!</a>
          </li>

        <li class="nav-item">
          <a class="nav-link" href="logout.php">Выход</a>
        </li>

        <?php if($_SESSION["login-user"][0]["rights"]) :  ?>

          <li class="nav-item">
            <a class="nav-link" href="../add_post.php">Создать новый пост</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="../index.php">Главная</a>
          </li>

        <?php else  : ?>
          <li class="nav-item">
            <a class="nav-link" href="../index.php">Главная</a>
          </li>

      <?php endif; ?>

      <?php else : ?>

      <li class="nav-item">
        <a class="nav-link" href="login.php">Вход</a>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="../registration.php">Регистрация</a>
      </li>

      <?php endif; ?>
    </ul>
  </div>
</nav>