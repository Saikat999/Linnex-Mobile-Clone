@extends('layout.master')

@section('content')
    <h1 class="text-center mt-2 mb-5 text-danger">Store Location</h1>
    <div class="storelocator-section mt-5">
        <div class="row">
            <div class="col-lg-4 col-sm-12 scrollspy">
                <a href="#" class="text-danger"><h6>Zam Zam International</h6></a>
                <p>Mohakhali Warless Gate, Banani,Dhaka</p>
                <p>phone:  01635116180, 01881487388</p>

                <a href="#" class="text-danger"><h6>JDNS Trade</h6></a>
                <p>Shop # 15, (4th Floor), Shah Ali Plaza, Mirpur 10, Dhaka 1216</p>
                <p>phone:  01935453022</p>

                <a href="#" class="text-danger"><h6>Fabiha Telecom</h6></a>
                <p>505 (5th floor) Shamoli Square, Dhaka 1207</p>
                <p>phone:  01719488198</p>

            </div>
            <div class="col-lg-8 col-sm-12">
                <div id="map">

                </div>
                {{-- <iframe src="https://www.google.com/maps/d/embed?mid=1iTeEvGrLmItq3bT10TMJteow0RAIGN0&ehbc=2E312F" width="640" height="480"></iframe> --}}

            </div>
        </div>
    </div>



    {{-- <script>
        let map;

        //     function initMap() {
        //     map = new google.maps.Map(document.getElementById("map"), {
        //         center: { lat: 23.822655590200288, lng: 90.42883801308571 },
        //         zoom: 8,
        //     });
        //     }

        //     window.initMap = initMap;
        function initMap() {
  const myLatLng = { lat: 23.822655590200288, lng: 90.42883801308571 };
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 4,
    center: myLatLng,
  });


  new google.maps.Marker({
    position: { lat:23.817126805949993, lng:90.42560140423993},
    map,
    title: "NSU!",
  });
  
}


window.initMap = initMap; --}}


{{-- var locations = [
    ['JDNS Trade', 23.806686843454955, 90.36920192278127, 3],
    ['Fabiha Telecom', 23.774811128104943, 90.36548024890782, 2],
    ['Zam Zam International', 23.733191100670467, 90.41563726800453, 1]
  ]; --}}
<script>

    function initMap() {
      var myLatLng = {lat: 23.733191100670467, lng: 90.41563726800453};
  
      var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 8,
            center: myLatLng
      });
      
      var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Zam Zam International'
      });
  
      var marker2 = new google.maps.Marker({
          position: {lat: 23.774811128104943, lng: 90.36548024890782},
          map: map,
          title: 'Fabiha Telecom'
      });
  
      var marker3 = new google.maps.Marker({
          position: {lat: 23.806686843454955, lng: 90.36920192278127},
          map: map,
          title: 'JDNS Trade'
      });
      
      var infoWindow = new google.maps.InfoWindow({map: map});
      
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
          var pos = {
            lat: position.coords.latitude,
            lng: position.coords.longitude
          };
  
          infoWindow.setPosition(pos);
        //   infoWindow.setContent('Your Location.');
          map.setCenter(pos);
        }, function() {
          handleLocationError(true, infoWindow, map.getCenter());
        });
      } else {
        // Browser doesn't support Geolocation
        handleLocationError(false, infoWindow, map.getCenter());
      }
    }
    
      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
           infoWindow.setPosition(pos);
              infoWindow.setContent(browserHasGeolocation ?
                            'Error: The Geolocation service failed.' :
                            'Error: Your browser doesn\'t support geolocation.');
    }
  
  </script>
  <script async defer
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYUCoAUsDnAo_U_4mAZuVcWoy5Dq2HtiM&callback=initMap">
  </script>


{{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYUCoAUsDnAo_U_4mAZuVcWoy5Dq2HtiM"></script>  --}}
@endsection