<?php 
  include("connect.php");
  date_default_timezone_set('America/Sao_Paulo');
  if(!empty($_POST)){
    if($_POST['init_date'] != "" && $_POST['end_date'] != ""){
      $theInitDate = $_POST['init_date'];
      $theEndDate = $_POST['end_date'];
      $query = "SELECT * from tb_products INNER JOIN tb_output ON tb_products.id = tb_output.id_product WHERE tb_output.date_output BETWEEN '$theInitDate' and '$theEndDate'";
      $result = mysqli_query($conn, $query);
    }else{
      if($_POST['init_date'] != "" && $_POST['end_date'] == "" ){
        $theDate = $_POST['init_date'];
      }else if($_POST['init_date'] == "" && $_POST['end_date'] != ""){
        $theDate = $_POST['end_date'];
      }else if($_POST['init_date'] == "" && $_POST['end_date'] == ""){
        $theDate = date("Y-m-d");
      }
      $query = "SELECT * from tb_products INNER JOIN tb_output ON tb_products.id = tb_output.id_product WHERE tb_output.date_output='$theDate'";
      $result = mysqli_query($conn, $query);
    }
  }

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
    <main>
      <?php include("navbar.php"); ?>
      <h1>Relatório</h1>
        <form action="" method="POST">
         <label for="init_date">Data inicial:</label><br><input type="date" id="init_date" name="init_date"><br>
         <label for="end_date">Data final:</label><br><input type="date" id="end_date" name="end_date"><br>
          <input type="submit" id="gerar" value="Gerar relatório">
        </form> 
        <table>
        <thead>
          <tr>
            <th>Nome</th>
            <th>Quant.</th>
            <th>Preço</th>
            <th>Cod. barras</th>
            <th>Baixa</th>
          </tr>
        </thead>
        <tbody>
        <?php
          if(!empty($_POST)){
            while($row = mysqli_fetch_array($result)){
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
                <td>'.$row['quantity_output'].'</td>
              </tr>';
            }
          }
        ?>
        </tbody>
      </table>
    </main>
  </div>
</body>
</html>