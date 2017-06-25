function initialize() {
      var mapOptions = {
    zoom: 13,
    scrollwheel: false,
    center: new google.maps.LatLng(40.740178, -74.190194)
  };

  var map = new google.maps.Map(document.getElementById('googleMap-2'),
      mapOptions);


  var marker = new google.maps.Marker({
    position: map.getCenter(),
    icon: 'img/map-marker-2.png',
    map: map
  });

}
google.maps.event.addDomListener(window, 'load', initialize);














