AOS.init({
    once: true,
});

$('.collapse').collapse()
$('.carousel').carousel()


// Configuration Map
mapboxgl.accessToken = 'pk.eyJ1IjoieXVkYXNldHlvMDciLCJhIjoiY2tpbmc2Znp5MG1hNjJ0bGlmaXVma2JkNyJ9.jDtDI2HxWLa8jr0WEwEStw';
const map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v11', // stylesheet location
    center: [106.737, -6.2107], // starting position [lng, lat]
    zoom: 9 // starting zoom
});
// Set options
const marker = new mapboxgl.Marker({
    color: "#FFFFFF",
    draggable: false
    }).setLngLat([106.738, -6.2106])
    .addTo(map);

// Change color when scrolled
$(_=> {
    $(document).scroll(_=> {
      const $nav = $(".bg-purple");
      const $textNav = $(".nav-link");
      $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
      $textNav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    });
  });
