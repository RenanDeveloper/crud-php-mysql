<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Estoque</title>
</head>
<body>
  <div class="container">
    <section>
      <nav>
        <a href="index.php">Home</a>
        <a href="new-product.php">+Produto</a>
      </nav>
      <form action="" method="POST">
        <label for="cpf">Login:</label><br><input type="text" name="cpf" id="cpf" placeholder="CPF" required><br>
        <label for="senha">Senha:</label><br><input type="password" name="senha" id="senha" required><br>
        <input type="submit" name="enter" value="Entrar">
      </form>
    </section>
  </div>
</body>
</html>
<?php
include("connect.php");
if(isset($_POST['cpf']) && isset($_POST['senha'])){
  $cpf = $conn->real_escape_string($_POST['cpf']);
  $senha = $conn->real_escape_string($_POST['senha']);

  $query = "SELECT * FROM tb_users WHERE cpf='$cpf' AND senha='$senha'";
  $result = $conn->query($query);
  $row = $result->num_rows;

  if($row == 1){
    $user = $result->fetch_assoc();
    if(!isset($_SESSION)){
      session_start();
      $_SESSION['admin'] = $user['admin'];
      $_SESSION['id'] = $user['id'];

      header("location: index.php");
    }
  }else{
    echo "Falha de login, usuário e/ou senha inválidos.";
  }
}
?>