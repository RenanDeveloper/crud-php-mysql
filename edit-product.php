<?php 
include("validate.php");
include("connection.php");
$id = $_GET['id'];
$query = "SELECT * from tb_products WHERE id='$id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
?>
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
      <h1>Editar Produto</h1>
      <form action="send-edit-product.php" method="POST">
        <input type="int" name="id" value="<?php echo $id; ?>" hidden>
        <label for="name">Nome do produto:</label><br><input type="text" name="name" id="name" value="<?php echo $row['name']; ?>"><br>
        <label for="barcode">Código de barras:</label><br><input type="text" name="barcode" id="barcode" value="<?php echo $row['barcode']; ?>"><br>
        <label for="quantity">Quantidade:</label><br><input type="text" name="quantity" id="quantity" value="<?php echo $row['quantity']; ?>"><br>
        <label for="min_quantity">Mínimo ideal:</label><br><input type="text" name="min_quantity" id="min_quantity" placeholder="quantidade" value="<?php echo $row['min_quantity']; ?>"><br>
        <label for="price">Preço:</label><br><input type="number" step="0.01" name="price" id="price" value="<?php echo $row['price']; ?>"><br>
        <input type="submit" name="alterar" value="Alterar">
      </form>
    </section>
  </div>
</body>
</html>