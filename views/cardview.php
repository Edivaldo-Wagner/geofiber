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

      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#map_modal">
            + Criar Projecto
            </button>
          <!-- Modals -->

          <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?libraries=places&sensor=false"></script>

<div class="modal hide fade" id="map_modal">
<div class="modal-footer">
    <a href="#" class="btn" data-dismiss="modal">Close</a>
    <a href="#" class="btn btn-primary">Save changes</a>
</div>

<div class="modal-body">
    <button type="button" class="close" data-dismiss="modal">×</button>
    <div id="map_canvas" style="width:530px; height:300px"></div>
    <div class="control-group">
        <label class="control-label" for="keyword">Cari alamat :</label>
        <div class="controls">
            <input type="text" class="span6" name="keyword" id="keyword">
        </div>
    </div>
</div>
<style>
  .pac-container {
    background-color: #FFF;
    z-index: 20;
    position: fixed;
    display: inline-block;
    float: left;
}
.modal{
    z-index: 20;   
}
.modal-backdrop{
    z-index: 10;        
}
  </style>
<script type="text/javascript">
$("#map_modal").modal({
    show: false
}).on("shown", function()
{
    var map_options = {
        center: new google.maps.LatLng(-6.21, 106.84),
        zoom: 11,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    var map = new google.maps.Map(document.getElementById("map_canvas"), map_options);

    var defaultBounds = new google.maps.LatLngBounds(
        new google.maps.LatLng(-6, 106.6),
        new google.maps.LatLng(-6.3, 107)
    );

    var input = document.getElementById("keyword");
    var autocomplete = new google.maps.places.Autocomplete(input);
    autocomplete.bindTo("bounds", map);

    var marker = new google.maps.Marker({map: map});

    google.maps.event.addListener(autocomplete, "place_changed", function()
    {
        var place = autocomplete.getPlace();

        if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
        } else {
            map.setCenter(place.geometry.location);
            map.setZoom(15);
        }

        marker.setPosition(place.geometry.location);
    });

    google.maps.event.addListener(map, "click", function(event)
    {
        marker.setPosition(event.latLng);
    });
});

$("#map_modal").modal('show');
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
