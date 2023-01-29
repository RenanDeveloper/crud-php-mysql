<?php 
include("connection.php");

$barcode = $_GET['baixa'];
//$id_user = $_GET['id_user'];
//$quantity_output = $_GET['quantity_output'];

$queryRow = "SELECT id FROM tb_products WHERE barcode='$barcode'";
$queryRowResult = mysqli_query($conn, $queryRow);
$rowResult = mysqli_fetch_assoc($queryRowResult);
$id_product =  $rowResult['id'];
//$queryInsertion = "INSERT INTO tb_output (id_product,id_user,quantity_output) VALUES ('$id_product','$id_user','$quantity_output')";
$queryInsertion = "INSERT INTO tb_output (id_product) VALUES ('$id_product')";
$insert = mysqli_query($conn, $queryInsertion);

$query = "SELECT quantity FROM tb_products WHERE barcode='$barcode'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$quantity = $row['quantity'];
if($quantity > 0){
  $quantity-= 1;
  $query2 = "UPDATE tb_products SET quantity='$quantity' WHERE barcode='$barcode'";
  $result2 = mysqli_query($conn, $query2);

  if($result2){
    header("location: index.php");
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