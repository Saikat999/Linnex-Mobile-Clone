<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('../images/branding/Linnex-32x32.png')}}" rel="icon" sizes="32x32" type="image/png" />
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{asset('css/landing-page-styles.css')}}">



    <title>Linnex - (Global) Electronics & Home Appliences</title>
</head>
<body>
    <div class="landingpage">
        <img class="banner-img d-none d-sm-none d-md-none d-lg-block d-xl-block" src={{asset('../images/Landingpage/Landingpage-banner1.png')}}
          alt="banner" />
        <img class="banner-img d-sm-block d-md-block d-lg-none d-xl-none" src={{asset('../images/Landingpage/banner_mobile.jpg')}}
          alt="banner" />

        <div class="banner-content">
            <div class="landingpage-logo">
                <img src="{{asset('../images/Landingpage/logo-linnex.png')}}" alt="logo">
            </div>
            <div class="brands">
                <h2 class="text-uppercase">Our</h2>
                <h1 class="text-uppercase text-danger ml-4">Brands</h1>
            </div>
            <div class="bengal-mobile-btn">
                <a href="#"><img src="{{asset('../images/Landingpage/bengalmobile-logo.png')}}" alt="Bengal mobile" title="Bengal mobile"></a>
                
            </div>
            <div class="linnex-mobile-btn mt-4">
                <a href="/mobile" target="_blank"><img src="{{asset('../images/Landingpage/linnexmobile-logo.png')}}" alt="Linnex mobile" title="Linnex mobile"></a>
            </div>
        </div>
       
    </div>

</body>
</html>