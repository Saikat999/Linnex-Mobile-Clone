@extends('admin.layout.master-layout')

@section('admin-content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="/">Home</a>
      <span class="breadcrumb-item active">Smart phone</span>
    </nav>

    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Update phone
          <a href="{{route('all.smartphone')}}" class="btn btn-warning btn-sm pull-right">All phones</a>
        </h6>
        {{-- <p class="mg-b-20 mg-sm-b-30">Update phone add form</p> --}}

        <form method="POST" action="{{url('smart-phone/update/'.$data->id)}}" enctype="multipart/form-data">
            @csrf

            <div class="form-layout">
            <div class="row mg-b-25">
                <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label">Phone Name: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="phone_name" value="{{$data->phone_name}}">
                </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label">Code: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="code" value="{{$data->code}}">
                </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label">Quantity: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="number" name="quantity" value="{{$data->quantity}}">
                </div>
                </div><!-- col-4 -->
                <div class="col-lg-12">
                    <div class="form-group">
                    <label class="form-control-label">Android version: <span class="tx-danger">*</span></label>
                    <textarea class="form-control" name="android_version" id="summernote1">
                      {{$data->android_version}}
                    </textarea>
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-12">
                    <div class="form-group">
                    <label class="form-control-label">Processor: <span class="tx-danger">*</span></label>
                    <textarea class="form-control" name="processor" id="summernote2">
                      {{$data->processor}}
                    </textarea>
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-12">
                    <div class="form-group">
                    <label class="form-control-label">Display: <span class="tx-danger">*</span></label>
                    <textarea class="form-control" name="display" id="summernote3">
                      {{$data->display}}
                    </textarea>
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-12">
                    <div class="form-group">
                    <label class="form-control-label">Storage: <span class="tx-danger">*</span></label>
                    <textarea class="form-control" name="storage" id="summernote4">
                      {{$data->storage}}
                    </textarea>
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-12">
                    <div class="form-group">
                    <label class="form-control-label">Camera: <span class="tx-danger">*</span></label>
                    <textarea class="form-control" name="camera" id="summernote5">
                      {{$data->camera}}
                    </textarea>
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-12">
                    <div class="form-group">
                    <label class="form-control-label">Battery: <span class="tx-danger">*</span></label>
                    <textarea class="form-control" name="battery" id="summernote6">
                      {{$data->battery}}
                    </textarea>
                    </div>
                </div><!-- col-4 -->
                
                <div class="col-lg-4">
                    <div class="form-group">
                    <label class="form-control-label">Image: <span class="tx-danger">*</span></label>
                    <label class="custom-file">
                        <input type="file" id="file" name="phone_image" class="form-control custom-file-input" onchange="readURL(this);">
                        <span class="custom-file-control"></span>
                        <img src="#" alt="" id="phone_image">
                    </label>
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                  <div class="form-group">
                  <label class="form-control-label">Old Image: <span class="tx-danger"></span></label>
                  <label class="custom-file">
                      <img src="{{URL::to($data->phone_image)}}" alt="" height="100" width="80">
                      <input type="hidden" name="old_image" class="custom-file-input">
                  </label>
                  </div>
              </div><!-- col-4 -->
            
            
            </div><!-- row -->

            <div class="form-layout-footer">
                <button class="btn btn-info mg-r-5">Update phone</button>
                <button class="btn btn-secondary">Cancel</button>
            </div><!-- form-layout-footer -->
            </div><!-- form-layout -->
        </form>
      </div><!-- card -->

 
  </div>



  <script type="text/javascript">
    function readURL(input){
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#phone_image')
          .attr('src', e.target.result)
          .width(80)
          .height(80);
        };
        reader.readAsDataURL(input.files[0]);
      }
    }
  </script>

@endsection