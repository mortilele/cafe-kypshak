 function initMap() {
        var uluru = {lat: 44.8438566, lng: 65.4978577}; //set coordinates in uluru variable//
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 18, //zoom level//
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru, //set marker//
          map: map
        });
      }