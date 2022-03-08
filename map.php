<!DOCTYPE html>
<html>
<head>
 <title>Doganci shuttle tracker</title>
 <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
 <meta charset="utf-8">
 <style>
   /* Always set the map height explicitly to define the size of the div
    * element that contains the map. */
   .map1 {
       height: 400px;
        width: 100%;
       margin-top: 50px;
   }
   /* Optional: Makes the sample page fill the window. */
   body {
     margin: 0;
  padding:0;
  background-color: #174873;
  background-size: cover;
  background-position: center;
  font-family: sans-serif;
   }
 </style>
</head>
<body>
<h2>Doganci shuttle</h2>
<h3>Make sure you have a stable wifi connection, map will show in 13s:</h3>
<p> Click on 'Satellite' to see satellite view</p>
 <button type="submit" class="btn" > <a href="doganci.php">Back to main page</a> </button>
  <div class="map1" id="map"></div>
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDASyy6jvTZLUKbOzv1TP42aPsyi40ZAfI"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <script>
 var map;
var x;
var y;
   function loadmaps() {

       $.getJSON("https://api.thingspeak.com/channels/1387303/fields/1/last.json?api_key=937E03TT6L7RML70", function(result){

         var m = result;
         x=Number(m.field1);
                        //alert(x);

     });
         $.getJSON("https://api.thingspeak.com/channels/1387303/fields/2/last.json?api_key=937E03TT6L7RML70", function(result){

         var n = result;
         y=Number(n.field2);

       }).done(function(){
         initialize();
       });
     }
     window.setInterval(function(){
       loadmaps();
     },9000);

     function initialize(){

     var mapOptions = {
       zoom: 18,
       center: {lat: x, lng: y}
     };

     map = new google.maps.Map(document.getElementById('map'),mapOptions);

     var marker = new google.maps.Marker({
       position: {lat: x, lng: y},
       map: map
     });

     var infowindow = new google.maps.InfoWindow({
       content: '<p>Marker Location:' + marker.getPosition() + '</p>'
     });

     google.maps.event.addListener(marker, 'click', function() {
       infowindow.open(map, marker);
     });
   }

   google.maps.event.addDomListener(window, 'load', initialize);
 </script>
</body>
</html>
