<?php session_start()?>
<?php include "db.ini.php"; ?>
<?php

$username = $_POST['user_name'];
$password = $_POST['user_password'];

//check if account exists
$stmt = $db->prepare("SELECT * FROM users
  WHERE user_name=:uname");
$stmt->execute(array(':uname'=> $username));
if($stmt->rowCount() == 0){
  echo "帳號不存在<br />";
  echo "<a href=\"index.php\">返回</a>";
  goto end;
}

//check if password matches the hash in sql
$result = $stmt->fetch(PDO::FETCH_ASSOC);
if(!password_verify($password, $result['user_pwd'])){
  echo "帳號密碼不正確<br />";
  echo "<a href=\"index.php\">返回</a>";
  goto end;
}

$_SESSION['id'] = $result['user_id'];
$_SESSION['username'] = $result['user_name'];
$_SESSION['new'] = false;

header('Location: index.php');
exit();
end:
 ?>
