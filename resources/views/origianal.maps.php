@extends('layouts.app')
@section('content')
      <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxPyBRZtDj7ssvtYE5_ExKC1aIgfYX_LU&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
    <style type="text/css">
      /* Set the size of the div element that contains the map */
      #map {
        height: 100%;
        /* The height is 400 pixels */
        width: 100%;
        /* The width is the width of the web page */
      }
    </style>
    <script>
      // Initialize and add the map
      var _lat = "<?php echo session('latitude'); ?>";
      var _lng = "<?php echo session('longitude'); ?>";

      function initMap() {
        // The location of Uluru
        const pos = { lat: _lng, lng: _lat };
        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 4,
          center: pos,
        });
        // The marker, positioned at Uluru
        const marker = new google.maps.Marker({
          position: pos,
          map: map,
        });
      }

      function check(){
        alert(`${_lng} and ${_lat}`)
      }

    </script>

    <button class="btn btn-primary" onclick="check()">
      Clik me
    </button>
    longitudes: {{ session('longitude') }} || latitudes: {{ session('latitude') }}

    <div id="map"></div>

@endsection

