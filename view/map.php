<!DOCTYPE html>
<html>
  <head>
    <style>
      #map {
        height: 400px;
        width: 84%; 
       }
    </style>
    <?php include("bootstrap.php"); ?>
  </head>
  <body>
  <?php include("menu.php"); ?>
  <div class="container">
        <header class="jumbotron my-4" id="radio">
            <div class="col-lg-4 col-md-6 mb-12">
            <img class="img" class="rounded float-left" src="http://www.fatecpg.com.br/Imagens%20Gerais/logotipo-fatec-pg.png" width="300">
            </div>
            <h1 class="display-4">Projeto LP4 - SITE</h1>
            <p class="lead">Agenda de compromissos</p>
        </header>
    </div>
    <script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat: -24.005126, lng: -46.412200};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 16, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}
    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <!--The div element for the map -->
    <div class="container" id="map">
       <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCpxZkIO7oENowcNG0jqYRGglTEnH0P14k&callback=initMap">
        </script>
    </div><br>
</body>
<footer class="footerRegular">
  <?php include("footer.php"); ?>
</html>