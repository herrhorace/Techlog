
	    <style>
       #map-canvas {
        height: 300px;
		width:500px;
        margin: 0px;
        padding: 0px
      }
    </style>


<div id="map-canvas"></div>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script>
function initialize() {
  var chicago = new google.maps.LatLng(41.875696,-87.624207);
  var mapOptions = {
    zoom: 11,
    center: chicago
  }

  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var ctaLayer = new google.maps.KmlLayer({
    url: '/files/1403113680_messages.kmz'
  });
  ctaLayer.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
