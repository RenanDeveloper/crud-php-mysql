<?php 
  include("connect.php");

  $name = $_POST['name'];
  $barcode = $_POST['barcode'];
  $quantity = $_POST['quantity'];
  $min_quantity = $_POST['min_quantity'];
  $price = $_POST['price'];

  $query = "INSERT INTO tb_products (name,barcode,quantity,min_quantity,price) VALUES ('$name','$barcode','$quantity','$min_quantity','$price')";
  $insert = mysqli_query($conn, $query);

  if($insert){
    echo"<script language='javascript' type='text/javascript'>
    alert('Produto cadastrado com sucesso!');window.location.
    href='index.php'</script>";
  }else{
    echo"<script language='javascript' type='text/javascript'>
    alert('Não foi possível cadastrar esse produto');window.location
    .href='new-product.php'</script>";
  }
?>