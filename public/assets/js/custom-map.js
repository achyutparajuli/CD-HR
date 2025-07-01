function initMap() {
  var styleArray = [
    {
      featureType: "all",
      stylers: [{ saturation: 0 }],
    },
    {
      featureType: "road.arterial",
      elementType: "geometry",
      stylers: [{ hue: "#000" }, { saturation: 0 }],
    },
    {
      featureType: "poi.business",
      elementType: "labels",
      stylers: [{ visibility: "off" }],
    },
  ];

  var latlng = new google.maps.LatLng(27.6994, 85.349);

  var map = new google.maps.Map(document.getElementById("map"), {
    center: latlng,
    scrollwheel: false,
    styles: styleArray,
    zoom: 13,
  });

  // Add red marker
  new google.maps.Marker({
    position: latlng,
    map: map,
    title: "Sinamangal - Near Panchakumari Mandir",
    icon: "http://maps.google.com/mapfiles/ms/icons/red-dot.png",
  });

  // Try to hide the warning banner after map loads
  setTimeout(function () {
    const banners = document.querySelectorAll(
      'div[style*="background-color: white"]'
    );
    banners.forEach(function (el) {
      if (
        el.innerText.includes("This page can't load Google Maps correctly.")
      ) {
        el.style.display = "none";
      }
    });
  }, 1000); // Delay to allow Google to inject the banner
}
