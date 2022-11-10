<?php 
include("conection.php");

$barcode = $_GET['baixa'];

$query = "SELECT quantity FROM products WHERE barcode='$barcode'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$quantity = $row['quantity'];
if($quantity > 0){
  $quantity-= 1;
  $query2 = "UPDATE products SET quantity='$quantity' WHERE barcode='$barcode'";
  $result2 = mysqli_query($conn, $query2);

  if($result2){
    echo"<script language='javascript' type='text/javascript'>window.location.href='index.php'</script>";
  }else{
    echo"<script language='javascript' type='text/javascript'>
    alert('Não foi possível fazer baixa desse produto');window.location
    .href='index.php'</script>";
  }
}else{
  echo"<script language='javascript' type='text/javascript'>
  alert('Produto com zero unidades, dê entrada antes de dar baixa.');window.location
  .href='index.php'</script>";
}

?>