<?php include "header.php"; ?>

<?php if(!isset($_SESSION['id'])){
  header("Location: index.php");
  exit();
} ?>


<div class="container">
  <form action="add_events.php" method="POST">
    ----------------------------------- <br />
    Event creator (Enter your username): <input type="text" name="event_creator" required/><br />
    New event name: <input type="text" name="event_name" required/><br />
    Event password: <input type="password" name="event_pwd" required/><br />
    Event password check: <input type="password" name="event_pwd_c" required/><br /><br />
    <input class="logout" type="submit" value="Create an Event" />
    <a class="logout" href="main.php">Back</a>
  </form>
</div>
<?php include "footer.php"; ?>
