function initMap() {
        var uluru = {lat: 41.9098149, lng: -87.68682439999998};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }