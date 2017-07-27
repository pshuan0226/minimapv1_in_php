<?php include "header.php"; ?>
<?php include "db.ini.php"; ?>
<?php if(!isset($_SESSION['id'])){
  header("Location: index.php");
  exit();
} ?>

<div class="container">
  <a class="logout" href="main.php">Back</a><br />
  <a class="join" href="join_active_event.php">join</a><br /><br />
  List of Active Events: <br />
  -------------------------------------------------<br />
  <div class="list">
    <?php
      #printing current list of events that are active
      $stmt = $db->query("SELECT event_name FROM events WHERE event_active=1");
      $result = $stmt->fetchALL();
      $size = $stmt->rowCount();
      if($size > 0){
        while($size > 0){
          echo $result[$size - 1]['event_name']."<br /><hr class=\"short_hr\"/>";
          $size--;
        }
      }
      else{}
    ?>
  </div>
</div>


<?php include "db.ini.php"; ?>
