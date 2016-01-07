   <div id="map" data-url="<?=$actividad->direccion?>"></div>
   <style>      #map {
        height: 100%;
      }</style>
    <script>
      var map;
      var marker;
      var address = escape($('#map').data('url'));
      alert(address)
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          street_address: $(map).data('url'),
          zoom: 8
        });

        marker = new google.maps.Marker({
            map:map,
            draggable:false,
            animation: google.maps.Animation.DROP,
            center: address
        });
         marker.addListener('click', toggleBounce);
      }

      function toggleBounce() {
          if (marker.getAnimation() !== null) {
            marker.setAnimation(null);
          } else {
            marker.setAnimation(google.maps.Animation.BOUNCE);
          }
        }
    </script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC6vVqUMviw0jKHC4tqWmEd1o4vDlz1WAU&callback=initMap"> </script>