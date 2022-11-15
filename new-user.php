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
      <?php include("navbar.php"); ?>
      <h1>Novo Usuário</h1>
      <form action="send-new-user.php" method="POST">
        <label for="name">Nome do Usuário: <input type="text" id="name" name="name"></label><br>
        <label for="cpf">CPF: <input type="text" id="cpf" name="cpf"><br>
        <label for="senha">Senha: <input type="text" id="senha" name="senha"><br>
        <label for="admin">Admin: Sim<input type="radio" id="admin" name="admin" value="1">
        <label for="admin2">Não<input type="radio" id="admin2" name="admin" value="0" checked><br>
        <input type="submit" name="cadastrar" value="Cadastrar">
      </form>
    </section>
  </div>
</body>
</html>

