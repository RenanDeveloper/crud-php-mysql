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
      <form action="cad-new-product.php" method="POST">
        Nome do produto: <input type="text" name="name"><br>
        codBarras: <input type="text" name="codBarras"><br>
        Quantidade: <input type="text" name="quantity"><br>
        <input type="submit" name="Cadastrar">
      </form>

    </section>
  </div>
</body>
</html>

