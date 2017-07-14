<?php
session_start();

include "db.ini.php";

$stmt = $db->prepare("UPDATE events SET event_active=:eact WHERE event_id=:eid");
$stmt->execute(array(
  ":eact"=>FALSE,
  ":eid"=> $_SESSION['e_id']
));

unset($_SESSION['e_id']);
session_destroy();
setcookie(session_name(), '', time()-3600);

header('Location: main.php');
exit();
 ?>
