<?php
  session_start();
  include "db.ini.php";

  $username = $_POST['user_name'];
  $password = $_POST['user_password'];
  $password_check = $_POST['user_password_check'];
  $latitude = $_POST['user_lat'];
  $longitude = $_POST['user_long'];
  $_SESSION['id'] = session_id();

  if($password != $password_check){
    echo "password check incorrect";
    echo "<a href=\"index.php\">Back</a>";
    goto end;
  }

  $stmt = $db->prepare("SELECT * FROM `users` WHERE user_name=:uname");
  $stmt->execute(array(":uname" => $username));
  $result = $stmt->fetch(PDO::FETCH_ASSOC);

  if($result['user_name'] == $username){
    echo "username already registered";
    echo "<a href=\"index.php\">Back</a>";
    goto end;
  }

  $stmt = $db->prepare("INSERT INTO `users`
    (`user_name`, `user_pwd`, `user_lat`, `user_long`)
    VALUES (:uname, :upwd, :ulat, :ulong)");
  $stmt->execute(array(
    ":uname" => $username,
    ":upwd" => password_hash($password, PASSWORD_DEFAULT),
    ":ulat" => $latitude,
    ":ulong" => $longitude
  ));


  header('Location: main.php');
  exit();
  end:
 ?>
