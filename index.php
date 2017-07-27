<?php

include "header.php";
if(isset($_SESSION['id'])){
  header('Location: main.php');
  exit();
}
?>
  <div class="container">
    <div class="box">
      <h1 style="text-align: center">Minimap_v1</h1>
      <form action="check_pwd.php" method="POST">
        username: <input type="text" name="user_name"required/><br />
        password: <input type="password" name="user_password"required/><br /><br />
        <input class="logout" type="submit" value="login" />
        <a class="logout" href="register.php">Register</a>
      </form>
    </div>
  </div>
<?php include "footer.php"; ?>
