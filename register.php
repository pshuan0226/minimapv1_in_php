<?php if(isset($_SESSION['id'])){
  header('Location: main.php');
  exit();
} ?>
<?php include "header.php"; ?>

<div class="container">
  <div class="box">
    <form action="add_users.php" method="POST">
      create an username: <input type="text" name="user_name" required/><br />
      create a password: <input type="password" name="user_password" required/><br />
      retype your password: <input type="password" name="user_password_check" /><br />
      <input id="long" type="hidden" name="user_long" />
      <input id="lat" type="hidden" name="user_lat" /><br />
      <input class="logout" type="submit" value="register" />
    </form>
  </div>
</div>
<script type="text/javascript">
    // function initMap(){
    //   var map = new google.maps.Map(document.getElementById('map'), {
    //     center: new google.maps.LatLng(-33.863276, 151.207977),
    //     zoom: 12
    //   });
    //   var infoWindow = new google.maps.infoWindow;
      navigator.geolocation.getCurrentPosition(showPosition);
      function showPosition(position){
        var lat = position.coords.latitude;
        var long = position.coords.longitude;
        document.getElementById("lat").setAttribute("value", lat);
        document.getElementById("long").setAttribute("value", long);
      }

</script>
<?php include "footer.php"; ?>
