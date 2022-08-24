@extends('layout.master')

@section('content')
<h1 class="text-center mt-2 mb-2 text-danger">Linnex Feature Phone</h1>
    @foreach($featurephone as $row)
       <div class="featurephone-section">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="featurephone-slider pt-2 mt-5">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">                                
                                <img src="{{URL::to($row->image_one)}}" class="d-block w-100" alt="slider-one">
                            </div>
                            <div class="carousel-item">
                                <img src="{{URL::to($row->image_two)}}" class="d-block w-100" alt="slider-two">
                            </div>
                            <div class="carousel-item">
                                <img src="{{URL::to($row->image_three)}}" class="d-block w-100" alt="slider-three">
                            </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon previous-btn-FP" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon next-btn-FP" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 col-sm-12">
                    <h3 class="text-danger mt-5 ml-5 phone-model">{{$row->phone_name}}</h3>
                    <ul class="ml-5">
                        <li>
                            {{$row->phone_details}}
                        </li>
                    </ul>
                    
                </div>
            </div>
       </div>

    @endforeach
@endsection