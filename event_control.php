<?php include "header.php"; ?>
<?php include "db.ini.php"; ?>

<div class="container">
<a class="logout" href="delete_event.php">Delete Event</a>
<a class="logout" href="main.php">Back to Home</a><br />
<br />
<form method="POST" action="add_event_member.php">
  Add event member: <input type="text" name="add_event_member" />
  <input class="logout" type="submit" value="add" />
</form>
----------------------------------------------------------<br />
Active Event Members: <br /><br />

<?php
//這部分QQ
$stmt = $db->prepare("SELECT member_name FROM event_members WHERE event_id=:evid");
$stmt->execute(array(
  ":evid" => $_SESSION['e_id']
));
$result = $stmt->fetchALL();
$size = $stmt->rowCount();
while($size > 0){
  echo $result[$size - 1]['member_name']."<br><hr>";
  $size--;
}
?>

</div>

<?php include "footer.php"; ?>
