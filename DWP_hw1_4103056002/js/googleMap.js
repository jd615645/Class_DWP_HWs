function initialize() {
  var map = {
    center: new google.maps.LatLng(24.121555, 120.675938),
    zoom: 17,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    disableDefaultUI: true
  };
  
  var map = new google.maps.Map(document.getElementById("googleMap"),map);

  var marker=new google.maps.Marker({
    position: new google.maps.LatLng(24.120889, 120.677579),
    animation:google.maps.Animation.BOUNCE
  });

  marker.setMap(map);
}
google.maps.event.addDomListener(window, 'load', initialize);