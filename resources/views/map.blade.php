<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Google Maps API</title>
	<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<script src="/js/index.js"></script>
</head>
<body>

    <input
      id="pac-input"
      class="controls"
      type="text"
      placeholder="Search Box"
    />
    <div id="map"></div>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC4Hns7ZUFLMCxdRg6W_UZRl07Tcgv4h34&callback=initAutocomplete&libraries=places&v=weekly"
      async
    ></script>

    <div>
    	<input type="text" name="" id="lat">
    	<input type="text" name="" id="lng">
    </div>

</body>
</html>