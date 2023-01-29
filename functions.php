<?php 
  
  function decreaseQuantity($id_product, $id_user = $_SESSION['id'], $number_itens = 1) {
    include ("connection.php");
    
    $today = date("Y-m-d");
    $query = "SELECT * FROM tb_output WHERE id_product='$id_product' AND date_output='$today'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $quantity = $row['quantity'];
    if($quantity){
      $quantity -= $number_itens;
      $query2 = "UPDATE tb_output SET quantity_output='$quantity' WHERE id_product='$id_product' AND date_output='$today'";
      $insert = mysqli_query($conn, $query2);
    }else{
      $query2 = "INSERT INTO tb_output (id_product,id_user,quantity_output) VALUES ('$id_product','$id_user','-1')";
      $insert = mysqli_query($conn, $query2);
    }

    if(!$insert){
      echo"<script language='javascript' type='text/javascript'>
      alert('Mão foi possível registrar essa saída em histórico.')</script>";
      header("location: index.php");
    }
  }
?>