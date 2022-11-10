<?php 
  include("conection.php");

  $id = $_POST['id'];
  $name = $_POST['name'];
  $barcode = $_POST['barcode'];
  $quantity = $_POST['quantity'];
  $min_quantity = $_POST['min_quantity'];

  $query = "UPDATE products SET name='$name', barcode='$barcode', quantity='$quantity', min_quantity='$min_quantity' WHERE id='$id'";
  $edit = mysqli_query($conn, $query);

  if($edit){
    echo"<script language='javascript' type='text/javascript'>
    alert('Produto alterado com sucesso!');window.location.
    href='index.php'</script>";
  }else{
    echo"<script language='javascript' type='text/javascript'>
    alert('Não foi possível alterar esse produto');window.location
    .href='index.php'</script>";
  }
?>