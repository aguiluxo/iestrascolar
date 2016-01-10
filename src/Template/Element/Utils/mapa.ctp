<?php if(!empty($actividad->direccion)) {?>
   <div id="map" data-address="<?=$actividad->direccion?>" data-lat="<?=$coordenadas['lat']?>" data-lng="<?=$coordenadas['lng']?>"></div>
   <script>
   	$('#map').html(' ');
      var map;
      var marker;
      var address= {lat: $('#map').data('lat'), lng: $('#map').data('lng')};
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: address,
          zoom: 16
        });

        marker = new google.maps.Marker({
            map:map,
            draggable:false,
            animation: google.maps.Animation.DROP,
            position: address,
            title: $('#map').data('address')
        });
         marker.addListener('click', toggleBounce);
         marker.setMap(map);
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

<?php } ?>

