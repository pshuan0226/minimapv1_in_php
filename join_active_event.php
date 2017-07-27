<?php
include "db.ini.php";
session_start();

$stmt = $db->prepare("INSERT INTO `event_members`
  (`member_name`, `member_active`, `event_id`)
  VALUES (:mname, :ma, :eid)");
$stmt->execute(array(
  ":mname" => $_SESSION['username'],
  ":ma" => 1,
  ":eid" => $_SESSION['e_id']
));

header('Location: main.php');
exit;

 ?>
