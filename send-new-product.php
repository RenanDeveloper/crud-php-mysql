<?php 
  include("conection.php");

  $db = mysqli_select_db($conn, 'crud_db');

  $name = $_POST['name'];
  $barcode = $_POST['barcode'];
  $quantity = $_POST['quantity'];

  $query = "INSERT INTO products (name,quantity,barcode) VALUES ('$name','$quantity','$barcode')";
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