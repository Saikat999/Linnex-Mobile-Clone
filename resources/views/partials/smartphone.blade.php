@extends('layout.master')

@section('content')
<h1 class="text-center mt-2 mb-2 text-danger">Linnex Smart Phone</h1>
 @foreach($smartphone as $row)
<div class="smartphone-section">
    <div class="row mt-5 mb-5">
        <div class="col-lg-4 col-sm-12">
            <img src="{{URL::to($row->phone_image)}}" height="360" width="320" alt="phone-image">
        </div>
        <div class="col-lg-8 col-sm-12">
            <h1 class="">{{$row->phone_name}}</h1>
            <div class="row">
                <div class="col-lg-6 col-sm-12 d-flex flex-column">
                    <div class="d-flex justify-content-start mb-3">
                        <span><img class="pt-2 pb-2" src="{{asset('../images/smartphone-icon/android.png')}}" height="60" width="50" alt="android"/> </span> 
                        <p class="ml-2  mt-2">{{$row->android_version}}</p>
                    </div>
                    <div class="d-flex justify-content-start mb-3">
                        <span><img class="pt-2 pb-2" src="{{asset('../images/smartphone-icon/processor.jpg')}}" height="60" width="50" alt="android"/></span> <p class="ml-2  mt-3">{{$row->processor}}</p>
                    </div>
                    <div class="d-flex justify-content-start">
                        <span><img class="pt-2 pb-2" src="{{asset('../images/smartphone-icon/ram.jpg')}}" height="60" width="50" alt="android"></span> <p class="ml-2  mt-3">{{$row->storage}}</p>
                    </div>

                </div>
                <div class="col-lg-6 col-sm-12 d-flex flex-column">
                    <div class="d-flex justify-content-start mb-3">
                        <span><img class="pt-2 pb-2" src="{{asset('../images/smartphone-icon/display.png')}}" height="60" width="50" alt="android"></span> 
                        <p class="ml-2  mt-2">{{$row->display}}</p>
                    </div>
                    <div class="d-flex justify-content-start mb-3">
                        <span><img class="pt-2 pb-2" src="{{asset('../images/smartphone-icon/Mobile-camera.png')}}" height="60" width="50" alt="android"></span> 
                        <p class="ml-2  mt-3">{{$row->camera}}</p>
                    </div>
                    <div class="d-flex justify-content-start">
                        <span><img class="pt-2 pb-2" src="{{asset('../images/smartphone-icon/battery.png')}}" height="60" width="50" alt="android"></span> 
                        <p class="ml-2  mt-3">{{$row->battery}}</p>
                    </div>
                </div>
            </div>
        </div>
      </div>
</div>


 @endforeach
    
   
   
@endsection