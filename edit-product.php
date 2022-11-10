<?php 
  include("conection.php");

  $id = $_GET['id'];

  $query = "SELECT * from products WHERE id='$id'";
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
        Nome do produto: <input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
        Código de barras: <input type="text" name="barcode" value="<?php echo $row['barcode']; ?>"><br>
        Quantidade: <input type="text" name="quantity" value="<?php echo $row['quantity']; ?>"><br>
        Mínimo ideal: <input type="text" name="min_quantity" placeholder="quantidade" value="<?php echo $row['min_quantity']; ?>"><br>
        <input type="submit" name="alterar" value="Alterar">
      </form>

    </section>
  </div>
</body>
</html>