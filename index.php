<?php 
  include("conection.php");

  $query = "SELECT * from products";
  $result = mysqli_query($conn, $query);
  
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
      <h1>Tela Inicial</h1>
      <table>
        <thead>
          <tr>
            <th>Nome</th>
            <th>Quantidade</th>
            <th>Código de barras</th>
            <th>Editar</th>
            <th>Apagar</th>
          </tr>
        </thead>
        <tbody>
        <?php
          while($row = mysqli_fetch_array($result)){
            echo '<tr>
              <td>'.$row['name'].'</td>
              <td>'.$row['quantity'].'</td>
              <td>'.$row['barcode'].'</td>
              <td><a href="edit-product.php?id='.$row['id'].'"><img src="./img/editSmall.png"></a></td>
              <td><a href="del-product.php?id='.$row['id'].'"><img src="./img/deleteSmall.png"></a></td>
            </tr>';
          }
        ?>
        </tbody>
      </table>

    </section>
  </div>
</body>
</html>