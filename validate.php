<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Estoque</title>
  <link rel="stylesheet" href="./css/normalize.css">
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <?php include("navbar.php"); ?>
  <div class="container">
    <?php
    if(!isset($_SESSION)){
      session_start();
    }
    if(!isset($_SESSION['id'])){
      die("Você não está logado.<p><a href='login.php'>Fazer login</a></p>");
    }
    ?>
</body>
</html>