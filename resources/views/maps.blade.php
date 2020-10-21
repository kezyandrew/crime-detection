<?php
    $ip = $_SERVER['REMOTE_ADDR'];
    $url = "http://api.ipstack.com/".$ip."?access_key=bf01f636b7ad6832e3e7a97ba16ccfab";
    $response = Http::get($url);
    $loc = $response->json();
    // return print_r($loc);
?>

@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html>
  <head>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxPyBRZtDj7ssvtYE5_ExKC1aIgfYX_LU&callback=initMap&libraries=places&v=weekly"
      defer
    ></script>
    <style type="text/css">
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
        /* position: absolute; */
        /* z-index: -1; */
      }

      /* Optional: Makes the sample page fill the window. */
      html,
      body {
        /* height: 95%; */
        margin: 0;
        padding: 0;
      }
    </style>
    <script>
      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
      let map;
      let service;
      let infowindow;

      function initMap() {
        const sydney = new google.maps.LatLng("<?php echo $loc['latitude'] ?>", "<?php echo $loc['longitude'] ?>");
        infowindow = new google.maps.InfoWindow();
        map = new google.maps.Map(document.getElementById("map"), {
          center: sydney,
          zoom: 15,
        });
        const request = {
          query: "Museum of Contemporary Art Australia",
          fields: ["name", "geometry"],
        };
        service = new google.maps.places.PlacesService(map);
        service.findPlaceFromQuery(request, (results, status) => {
          if (status === google.maps.places.PlacesServiceStatus.OK) {
            for (let i = 0; i < results.length; i++) {
              createMarker(results[i]);
            }
            map.setCenter(results[0].geometry.location);
          }
        });
      }

      function createMarker(place) {
        const marker = new google.maps.Marker({
          map,
          position: place.geometry.location,
        });
        google.maps.event.addListener(marker, "click", () => {
          infowindow.setContent(place.name);
          infowindow.open(map);
        });
      }
    </script>
  </head>
  <body>
    <div id="map"></div>
  </body>
</html>
@endsection