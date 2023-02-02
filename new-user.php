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
    <section>
      <h1>Novo Usuário</h1>
      <form action="send-new-user.php" method="POST">
        <label for="name">Nome do Usuário:</label><br><input type="text" id="name" name="name"><br>
        <label for="cpf">CPF:</label><br><input type="text" id="cpf" name="cpf"><br>
        <label for="senha">Senha:<br><input type="text" id="senha" name="senha"></label><br>
        Admin:<br><label for="admin">Sim</label><input type="radio" id="admin" name="admin" value="1"><br>
        <label for="admin2">Não</label><input type="radio" id="admin2" name="admin" value="0" checked><br>
        <input type="submit" name="cadastrar" value="Cadastrar"/>
      </form>
    </section>
  </div>
</body>
</html>

