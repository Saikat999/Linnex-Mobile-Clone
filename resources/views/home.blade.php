@extends('layout.master')

@section('content')
    <div class="slider-banner pt-2">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">                                
                <img src="{{asset('../images/banner/slider-image-one.jpg')}}" class="d-block w-100" alt="slider-one">
            </div>
            <div class="carousel-item">
                <img src="{{asset('../images/banner/slider-image-two.jpg')}}" class="d-block w-100" alt="slider-two">
            </div>
            <div class="carousel-item">
                <img src="{{asset('../images/banner/slider-image-three.jpg')}}" class="d-block w-100" alt="slider-three">
            </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon previous-btn" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon next-btn" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="feature-section mt-4">
        <div class="feature-image">
            <img src="{{asset('../images/feature/Li-22.png')}}" alt="Li-22"/>
        </div>
        <div class="feature-image">
            <img src="{{asset('../images/feature/LX-50.png')}}" alt="LX-50"/>
        </div>
        <div class="feature-image">
            <img src="{{asset('../images/feature/LX-55.jpg')}}" alt="LX-55"/>
        </div>
    </div>
    <div class="video-section mt-5">
        <div class="video-left">
            <h5 class="text-uppercase text-bold pl-2">Explore Linnex mobile</h5>
            {{-- <video height="280" width="500" controls>
                <source src="https://video.fdac7-1.fna.fbcdn.net/v/t66.36240-2/167330420_563472865456760_3756594043714178982_n.mp4?_nc_cat=109&ccb=1-7&_nc_sid=985c63&efg=eyJybHIiOjE1MDAsInJsYSI6MTAyNCwidmVuY29kZV90YWciOiJvZXBfaGQifQ%3D%3D&_nc_ohc=J3vMFuaIyCQAX8QW4kK&_nc_oc=AQmoBZo8ZjqkCXTbmxBLw7fBPzsRmA3xz3aWR-mc_qUrDSiZfLAyAFlJ99uM1o9ITMo&rl=1500&vabr=267&_nc_ht=video.fdac7-1.fna&edm=AGo2L-IEAAAA&oh=00_AT_BHXsRop-4psIGiNActltJlPew--YSaqqrxtduo-296Q&oe=62F85595" type="video/mp4">
            </video> --}}
            <iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FLinnexMobile%2Fvideos%2F1509469432405104%2F&show_text=0&width=560" width="100%" height="420px" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>

        </div>
        <div class="video-right">
            <h5 class="text-uppercase text-bold pl-2">Follow us on Facebook</h5>


            <iframe name="fe247132c23124" width="400px" height="405px" data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.10/plugins/page.php?adapt_container_width=true&amp;app_id=1415861135132631&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df36b82a3dc51998%26domain%3Dwww.linnex.com%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fwww.linnex.com%252Ff3164c90cc381%26relation%3Dparent.parent&amp;container_width=360&amp;height=420&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FLinnexMobile%2F&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline&amp;width=400" style="border: none; visibility: visible; width: 100%; height: 405px"></iframe>

        </div>
    </div>
    <div class="service-section pt-3">
        <h5 class="text-uppercase text-center">Care That Makes a Difference</h5>
        <div class="service-images-section">
            <div class="service-image">
                <img src="{{asset('../images/services/30-yr-Customer-care-1.jpg')}}" alt=""/>
            </div>
            <div class="service-image">
                <img src="{{asset('../images/services/mobile-worrenty2.png')}}" alt=""/>
            </div>
            <div class="service-image">
                <img src="{{asset('../images/services/contact_us.jpg')}}" alt=""/>
            </div>
        </div>
    </div>
@endsection