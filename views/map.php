<?php

date_default_timezone_set("Asia/Kolkata");

error_reporting(0);
session_start();

if (!isset($_SESSION['adm_Id'])) {
  header('Location: login.php');
}
include 'header.php';
?>

<body id="page-top">

  <?php include 'navbar.php';?>

  <div id="wrapper">

  <?php include 'sidebar.php';?>

    <div id="content-wrapper">

      <div class="container-fluid">

      <div id='map'></div>

      <style>
		
		.leaflet-container {
			height: 1000px;
			width: 100%;
			max-width: 100%;
			max-height: 100%;
		}
	</style>

<script>
	var cities = L.layerGroup();

	var mLittleton = L.marker([39.61, -105.02]).bindPopup('This is Littleton, CO.').addTo(cities);
	var mDenver = L.marker([39.74, -104.99]).bindPopup('This is Denver, CO.').addTo(cities);
	var mAurora = L.marker([39.73, -104.8]).bindPopup('This is Aurora, CO.').addTo(cities);
	var mGolden = L.marker([39.77, -105.23]).bindPopup('This is Golden, CO.').addTo(cities);

    var l = L.layerGroup();

var mLittleton = L.marker([39.60, -105.02]).bindPopup('This is Littleton, CO.').addTo(l);
var mDenver = L.marker([39.71, -104.99]).bindPopup('This is Denver, CO.').addTo(l);
var mAurora = L.marker([39.72, -104.8]).bindPopup('This is Aurora, CO.').addTo(l);
var mGolden = L.marker([39.75, -105.23]).bindPopup('This is Golden, CO.').addTo(l);

	var mbAttr = 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>';
	var mbUrl = 'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';
 
	var streets = L.tileLayer(mbUrl, {id: 'mapbox/streets-v11', tileSize: 512, zoomOffset: -1, attribution: mbAttr});

	var osm = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 19,
		attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	});

	var map = L.map('map', {
		center: [39.73, -104.99],
		zoom: 10,
		layers: [osm, cities, l]
	});

	var baseLayers = {
		'OpenStreetMap': osm,
		'Streets': streets
	};

	var overlays = {
		'Cities': cities
	};

    var ola = {
		'L': l
	};

    
	var layerControl = L.control.layers(baseLayers, overlays, l).addTo(map);
	var crownHill = L.marker([39.75, -105.09]).bindPopup('This is Crown Hill Park.');
	var rubyHill = L.marker([39.68, -105.00]).bindPopup('This is Ruby Hill Park.');

	var parks = L.layerGroup([crownHill, rubyHill]);

	var satellite = L.tileLayer(mbUrl, {id: 'mapbox/satellite-v9', tileSize: 512, zoomOffset: -1, attribution: mbAttr});
	layerControl.addBaseLayer(satellite, 'Satellite');
	layerControl.addOverlay(parks, 'Parks');
    layerControl.addOverlay(l, 'l');

	//map.pm.addControls({  
  //position: 'topleft',  
  //drawCircle: false,  
   //}); 
   
</script>


      </div>
    <!-- /.container-fluid -->

      <?php include 'footer.php';?>


    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  

  <?php include 'scripts.php';?>

</body>

</html>
