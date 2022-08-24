<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link href="{{asset('../images/branding/Linnex-32x32.png')}}" rel="icon" sizes="32x32" type="image/png" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="{{asset('css/home-style.css')}}">

    <title>Linnex Mobile</title>
</head>
<body>
    @include('include.topbar')
    <div class="container">
        @include('include.navbar')
        
       @yield('content')

       
    </div>
    @include('include.footer')



    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- Google map -->
    {{-- <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYUCoAUsDnAo_U_4mAZuVcWoy5Dq2HtiM&callback=initMap"></script>  --}}
</body>
</html>