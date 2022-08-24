@extends('admin.layout.master-layout')

@section('admin-content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="/">Home</a>
      <span class="breadcrumb-item active">Smart phone</span>
    </nav>

    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Add new phone
          <a href="{{route('all.smartphone')}}" class="btn btn-warning btn-sm pull-right">All phones</a>
        </h6>
        <p class="mg-b-20 mg-sm-b-30">New phone add form</p>

        <form method="POST" action="{{route('store.smartphone')}}" enctype="multipart/form-data">
            @csrf

            <div class="form-layout">
            <div class="row mg-b-25">
                <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label">Phone Name: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="phone_name" placeholder="Phone name">
                </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label">Code: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="code" placeholder="Code">
                </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label">Quantity: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="number" name="quantity" value="quantity" placeholder="quantity">
                </div>
                </div><!-- col-4 -->
                <div class="col-lg-12">
                    <div class="form-group">
                    <label class="form-control-label">Android version: <span class="tx-danger">*</span></label>
                    <textarea class="form-control" name="android_version" id="summernote1">

                    </textarea>
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-12">
                    <div class="form-group">
                    <label class="form-control-label">Processor: <span class="tx-danger">*</span></label>
                    <textarea class="form-control" name="processor" id="summernote2">

                    </textarea>
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-12">
                    <div class="form-group">
                    <label class="form-control-label">Display: <span class="tx-danger">*</span></label>
                    <textarea class="form-control" name="display" id="summernote3">

                    </textarea>
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-12">
                    <div class="form-group">
                    <label class="form-control-label">Storage: <span class="tx-danger">*</span></label>
                    <textarea class="form-control" name="storage" id="summernote4">

                    </textarea>
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-12">
                    <div class="form-group">
                    <label class="form-control-label">Camera: <span class="tx-danger">*</span></label>
                    <textarea class="form-control" name="camera" id="summernote5">

                    </textarea>
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-12">
                    <div class="form-group">
                    <label class="form-control-label">Battery: <span class="tx-danger">*</span></label>
                    <textarea class="form-control" name="battery" id="summernote6">

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
            
            
            </div><!-- row -->

            <div class="form-layout-footer">
                <button class="btn btn-info mg-r-5">Add phone</button>
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