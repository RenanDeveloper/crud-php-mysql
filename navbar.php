<nav>
    <a href="index.php">Home</a>
    <a href="new-product.php">+Produto</a>
    <?php
      if(!isset($_SESSION)){
        session_start();
        if(isset($_SESSION['id'])){
          if($_SESSION['admin']){
            echo "<a href='new-user.php'>+Usuário</a>";
          }
          echo "<a href='logout.php'>Sair</a>";
        }else{
          echo "<a href='login.php'>Login</a>";
        }
      }
    ?>
</nav>