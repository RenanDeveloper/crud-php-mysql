<?php 

include("conection.php");

$id = $_GET['id'];

$query = "DELETE FROM products WHERE id='$id'";

$del = mysqli_query($conn, $query);

  if($del){
    echo"<script language='javascript' type='text/javascript'>
    alert('Produto apagado com sucesso!');window.location.
    href='index.php'</script>";
  }else{
    echo"<script language='javascript' type='text/javascript'>
    alert('Não foi possível apagar esse produto');window.location
    .href='index.php'</script>";
  }
?>