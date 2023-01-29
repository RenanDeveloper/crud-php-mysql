<?php 
  include("connection.php");

  $query = "SELECT * from tb_products";
  $result = mysqli_query($conn, $query);
  
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Estoque</title>
  <script>
    function darBaixa(){
      document.getElementById('baixar').click();
    }

    function verifyDel($id_del) {
      let text = "Tem CERTEZA que quer APAGAR o item?";
      if (confirm(text) == true) {
        window.location.href="del-product.php?id="+$id_del;
      }
    }
  </script>
</head>
<body>
  <div class="container">
    <main>
      <?php include("navbar.php"); ?>
      <h1>Tela Inicial</h1>
      <div>
        <form action="redux.php" method="GET">
          <label for="baixa">Código de barras para baixa de produto:</label><br><input type="text" id="baixa" name="baixa" onchange="darBaixa()" autofocus></div><br>
          <input type="submit" id="baixar" value="Dar baixa" hidden>
        </form> 
        <table>
        <thead>
          <tr>
            <th>Nome</th>
            <th>Qnt.</th>
            <th>Preço</th>
            <th>Cod. barras</th>
            <th>Editar</th>
            <th>Apagar</th>
          </tr>
        </thead>
        <tbody>
        <?php
          while($row = mysqli_fetch_array($result)){
            $id_del = $row['id'];
            if($row['quantity'] > $row['min_quantity']){
              echo '<tr>';
            }else if($row['quantity'] == $row['min_quantity']){
              echo '<tr style="Background-color: orange">';
            }else{
              echo '<tr style="Background-color: red">';
            }
            echo '
              <td>'.$row['name'].'</td>
              <td>'.$row['quantity'].'</td>
              <td>'.$row['price'].'</td>
              <td>'.$row['barcode'].'</td>
              <td><a href="edit-product.php?id='.$row['id'].'"><img src="./img/editSmall.png"></a></td>
              <td><button onclick="verifyDel('.$row['id'].')" ><img src="./img/deleteSmall.png"></button></td>
            </tr>';
          }
        ?>
        </tbody>
      </table>
    </main>
  </div>
</body>
</html>