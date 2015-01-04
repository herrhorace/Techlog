<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>

    <script>
var map;
function initialize() {
  var mapOptions = {
    zoom: 8,
    center: new google.maps.LatLng(58.33, -98.52),
  };
  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);
	  
    var kmzLayer = new google.maps.KmlLayer('<?php echo $data['Log']['kmz'] ?>');
    kmzLayer.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>



<div style="height:600px; width:100%;" id="map-canvas">
</div>

