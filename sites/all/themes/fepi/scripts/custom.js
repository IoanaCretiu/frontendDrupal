(function ($) {
  $(document).ready(function () {
    function initialize() {
      var markerBounds = new google.maps.LatLngBounds();
      var mcOptions = {gridSize: 50, maxZoom: 15};
      var mapOptions = {
        center:new google.maps.LatLng(-34.397, 150.644),
        zoom:8,
        mapTypeId:google.maps.MapTypeId.ROADMAP
      };
      var map = new google.maps.Map(document.getElementById("map-canvas"),
        mapOptions);

      $.each(Drupal.settings.coords, function(index, item) {
        var myLatlng = new google.maps.LatLng(item.lat, item.long);
        var marker = new google.maps.Marker({
          position: myLatlng,
          map: map
        });
        window.google.maps.event.addListener(marker, 'click', function () {
          window.location = item.path;
        });
        markerBounds.extend(myLatlng);
      });
      map.fitBounds(markerBounds);
    }

    google.maps.event.addDomListener(window, 'load', initialize);
  });
})(jQuery);
