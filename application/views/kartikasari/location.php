
<!-- GOOGLE MAPS -->
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyA7NtUocoWoPlX7Gf7BL3c4DlTjRt5XK7Y&sensor=true">
</script>

<script type="text/javascript">
		function initialize() {
	    var latlng = new google.maps.LatLng(-6.922337, 107.598724);
			var point = new google.maps.LatLng(-6.922337, 107.558724);
			var marker = new google.maps.Marker({position: point, title:"Kartika Sari!"});
		
	    var myOptions = {
	      zoom: 8,
	      center: latlng,
	      mapTypeId: google.maps.MapTypeId.ROADMAP
	    };
		
	    var map = new google.maps.Map(document.getElementById("map"), myOptions);
			marker.setMap(map);
	  }
		$(document).ready(function(){
			initialize();
		});
</script>

<div class="contentmain">
  <h4>Kartikasari on Google Maps</h4><hr/>
  <div id="map" style="width: 850px; height: 500px; margin: 0px;"></div>
</div>
