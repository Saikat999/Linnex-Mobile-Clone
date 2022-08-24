@extends('layout.master')

@section('content')
<h1 class="text-center mt-2 mb-5 text-danger">Services Point</h1>
<div class="storelocator-section mt-5">
    <div class="row">
        <div class="col-lg-4 col-sm-12 scrollspy">
            <a href="#" class="text-danger"><h6>Dhaka</h6></a>
            <p>Bengal Square,RTV Studio Building,Plot-437,Road-14,Tejgaon,Dhaka</p>
            <p>phone:  01844057751</p>

            <a href="#" class="text-danger"><h6>Mirpur</h6></a>
            <p>Capital tower,2nd floor,shop 5&6 Mirpur-1, Dhaka</p>
            <p>phone:  01844057752</p>

        </div>
        <div class="col-lg-8 col-sm-12">
            <div id="map">

            </div>

        </div>
    </div>
</div>

<script>
    function initMap() {
        var center = {lat: 23.822655590200288, lng: 90.42883801308571};
        var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 10,
        center: center
        });
        var marker = new google.maps.Marker({
        position: center,
        map: map
        });
    }
</script>
<script async defer
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYUCoAUsDnAo_U_4mAZuVcWoy5Dq2HtiM&callback=initMap">
  </script>
@endsection