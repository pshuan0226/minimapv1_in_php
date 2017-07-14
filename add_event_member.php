<?php
include "header.php";
include "db.ini.php";

$new_emember = $_POST['add_event_member'];

//check if the added member exists
if($new_emember != ""){
  $stmt = $db->prepare("SELECT * FROM users WHERE user_name=:uname");
  $stmt->execute(array(
    ":uname"=>$new_emember
  ));
}
$result = $stmt->fetch(PDO::FETCH_ASSOC);
if($stmt->rowCount() == 0){
  echo "nonexistent username<br />";
  echo "<a href=\"event_control.php\">back</a>";
  goto end;
}

//add member into member list
$stmt = $db->prepare("INSERT INTO `event_members` (
  `member_name`, `event_id`)
  VALUES (:mname, :eid)");
$stmt->execute(array(
  ":mname" => $new_emember,
  ":eid" => $_SESSION['e_id']
));

header('Location: main.php');
exit();
end:
 ?>
