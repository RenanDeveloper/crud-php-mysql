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
      <h1>Novo Produto</h1>
      <form action="post">
        Nome do produto: <input type="text"><br>
        codBarras: <input type="text"><br>
        Quantidade: <input type="text">
        <input type="submit" name="Cadastrar">
      </form>

    </section>
  </div>
</body>
</html>