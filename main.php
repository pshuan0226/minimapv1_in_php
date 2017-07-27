<?php include "header.php"; ?>
<?php include "db.ini.php"; ?>
<?php if(!isset($_SESSION['id'])){
  header("Location: index.php");
  exit();
} ?>

<div class="container">
  <!--user logout-->
  <a class="logout" href="logout.php">Log out</a>

  <!--event control-->
  <?php if(isset($_SESSION['e_id'])){ ?>
  <a class="logout" href="event_control.php">Enter Event Control</a>
  <?php } ?>

  <!--create event-->
  <a class="logout" href="event_create.php">Create an Event</a><br>

  <!--user info-->
  <?php
  if(!$_SESSION['new']){
    echo "<br />Welcome back, ".$_SESSION['username'];
  }
  else{
    echo "<br />Welcome, ".$_SESSION['username'].". Create an event to get started.";
  }
  ?>
</div>


<!--map-->
<?php if(isset($_SESSION['e_id'])){ ?>
<div class="box">
  <div class="container">
    <div id="map"></div>
  </div>
</div>
<?php }?>


<script>
var map, infoWindow;
     function initMap() {
       map = new google.maps.Map(document.getElementById('map'), {
         center: {lat: -34.397, lng: 150.644},
         zoom: 14
       });
       infoWindow = new google.maps.InfoWindow;

       if (navigator.geolocation) {
         navigator.geolocation.getCurrentPosition(function(position) {
           var pos = {
             lat: position.coords.latitude,
             lng: position.coords.longitude
           };

           infoWindow.setPosition(pos);
           infoWindow.setContent('You\'re here.');
           infoWindow.open(map);
           map.setCenter(pos);
         }, function() {
           handleLocationError(true, infoWindow, map.getCenter());
         });
       } else {

         handleLocationError(false, infoWindow, map.getCenter());
       }
     }

     function handleLocationError(browserHasGeolocation, infoWindow, pos) {
       infoWindow.setPosition(pos);
       infoWindow.setContent(browserHasGeolocation ?
                             'Error: The Geolocation service failed.' :
                             'Error: Your browser doesn\'t support geolocation.');
       infoWindow.open(map);
     }
</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmzQF077C2iT6uASmN9QuiAejTN4-VZxY&callback=initMap">
</script>

<?php include "footer.php"; ?>
