<nav class="no-outline">
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="new-product.php">+Produto</a></li>
    <?php
      if(!isset($_SESSION)){
        session_start();
        if(isset($_SESSION['id'])){
          if($_SESSION['admin']){
            echo "<li><a href='new-user.php'>+Usuário</a></li>
            <li><a href='report.php'>Relatório</a></li>";
          }
          echo "<li><a href='logout.php'>Sair</a></li>";
        }else{
          echo "<li><a href='login.php'>Login</a></li>";
        }
      }
    ?>
  </ul>
</nav>