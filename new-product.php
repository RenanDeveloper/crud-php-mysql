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
      <form action="send-new-product.php" method="POST">
        Nome do produto: <input type="text" name="name"><br>
        Código de barras: <input type="text" name="barcode"><br>
        Quantidade atual: <input type="text" name="quantity"><br>
        Mínimo ideal: <input type="text" name="min_quantity" placeholder="quantidade"><br>
        <input type="submit" name="cadastrar" value="Cadastrar">
      </form>

    </section>
  </div>
</body>
</html>

