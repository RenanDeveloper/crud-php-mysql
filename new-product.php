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
        <label for="name">Nome do produto:</label><br><input type="text" id="name" name="name"><br>
        <label for="barcode">Código de barras:</label><br><input type="text" id="barcode" name="barcode"><br>
        <label for="quantity">Quantidade atual:</label><br><input type="text" id="quantity" name="quantity"><br>
        <label for="min_quantity">Mínimo ideal:</label><br><input type="text" id="min_quantity" name="min_quantity" placeholder="quantidade"><br>
        <label for="price">Preço:</label><br><input type="number" step="0.01" id="price" name="price"><br>
        <input type="submit" name="cadastrar" value="Cadastrar">
      </form>
    </section>
  </div>
</body>
</html>

