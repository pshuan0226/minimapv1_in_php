<?php include "header.php"; ?>

<div class="container">
  <form action="add_events.php" method="POST">
    ----------------------------------- <br />
    Event creator (Enter your username): <input type="text" name="event_creator" required/><br />
    New event name: <input type="text" name="event_name" required/><br />
    Event password: <input type="password" name="event_pwd" required/><br />
    Event password check: <input type="password" name="event_pwd_c" required/><br /><br />
    <input class="logout" type="submit" value="Create an Event" />
  </form>
</div>
<?php include "footer.php"; ?>
