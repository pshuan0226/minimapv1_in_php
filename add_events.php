<?php
session_start();
include "db.ini.php";

$event_creator = $_POST['event_creator'];
$event_name = $_POST['event_name'];
$event_pwd = $_POST['event_pwd'];
$event_pwd_c = $_POST['event_pwd_c'];

$stmt = $db->prepare("SELECT * FROM `users` WHERE user_name=:uname");
$stmt->execute(array(":uname" => $event_creator));
$result = $stmt->fetch(PDO::FETCH_ASSOC);

//password check
if(($event_pwd != $event_pwd_c) || $event_pwd == ""){
  echo "Password check incorrect <br />";
  echo "<a href=\"main.php\">back</a>";
  goto end;
}

//creator check
if($event_creator == "" || $stmt->rowCount() == 0){
  echo "Creator incorrect <br />";
  echo "<a href=\"main.php\">Back</a>";
  goto end;
}

//event existence check
$stmt = $db->prepare("SELECT * FROM events WHERE event_name=:ename");
$stmt->execute(array(
  ":ename"=>$event_name
));
$result = $stmt->fetch(PDO::FETCH_ASSOC);
if($stmt->rowCount() > 0){
  echo "event name already registered.";
  echo "<a href=\"main.php\">back</a>";
  goto end;
}

//add event
$stmt = $db->prepare("INSERT INTO `events`
  (`event_name`, `event_pwd`, `event_creator`)
  VALUES (:ename, :epwd, :ecreator)");
$stmt->execute(array(
  ":ename" => $event_name,
  ":epwd" => password_hash($event_pwd, PASSWORD_DEFAULT),
  ":ecreator" => $event_creator
));

//set session e_id
$stmt = $db->prepare("SELECT * FROM `events` WHERE event_name=:ename");
$stmt->execute(array(":ename" => $event_name));
$result2 = $stmt->fetch(PDO::FETCH_ASSOC);

$_SESSION['e_id'] = $result2['event_id'];

header('Location: main.php');
exit();

end:
?>
