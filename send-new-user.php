<?php 
  include("connection.php");

  $name = $_POST['name'];
  $cpf = $_POST['cpf'];
  $senha = $_POST['senha'];
  $admin = $_POST['admin'];


  $query = "INSERT INTO tb_users (name,cpf,admin,senha) VALUES ('$name','$cpf','$admin','$senha')";
  $insert = mysqli_query($conn, $query);

  if($insert){
    echo"<script language='javascript' type='text/javascript'>
    alert('Usuário cadastrado com sucesso!');window.location.
    href='index.php'</script>";
  }else{
    echo"<script language='javascript' type='text/javascript'>
    alert('Não foi possível cadastrar esse Usuário');window.location
    .href='new-product.php'</script>";
  }
?>