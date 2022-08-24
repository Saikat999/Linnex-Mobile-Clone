@extends('admin.layout.master-layout')

@section('admin-content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="/">Home</a>
      <span class="breadcrumb-item active">Feature phone</span>
    </nav>

    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Add new phone
          <a href="{{route('all.featurephone')}}" class="btn btn-warning btn-sm pull-right">All phones</a>
        </h6>
        <p class="mg-b-20 mg-sm-b-30">New phone add form</p>

        <form method="POST" action="{{route('store.featurephone')}}" enctype="multipart/form-data">
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
                    <label class="form-control-label">Phone Details: <span class="tx-danger">*</span></label>
                    <textarea class="form-control" name="phone_details" id="summernote1">

                    </textarea>
                    </div>
                </div><!-- col-4 -->
                
                <div class="col-lg-4">
                    <div class="form-group">
                    <label class="form-control-label">Image: <span class="tx-danger">*</span></label>
                    <label class="custom-file">
                        <input type="file" id="file" name="image_one" class="form-control custom-file-input" onchange="readURL1(this);">
                        <span class="custom-file-control"></span>
                        <img src="#" alt="" id="image_one">
                    </label>
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group">
                    <label class="form-control-label">Image: <span class="tx-danger">*</span></label>
                    <label class="custom-file">
                        <input type="file" id="file" name="image_two" class="form-control custom-file-input" onchange="readURL2(this);">
                        <span class="custom-file-control"></span>
                        <img src="#" alt="" id="image_two">
                    </label>
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group">
                    <label class="form-control-label">Image: <span class="tx-danger">*</span></label>
                    <label class="custom-file">
                        <input type="file" id="file" name="image_three" class="form-control custom-file-input" onchange="readURL3(this);">
                        <span class="custom-file-control"></span>
                        <img src="#" alt="" id="image_three">
                    </label>
                    </div>
                </div><!-- col-4 -->
            
            
            </div><!-- row -->

            <div class="form-layout-footer">
                <button type="submit" class="btn btn-info mg-r-5">Add phone</button>
                <button class="btn btn-secondary">Cancel</button>
            </div><!-- form-layout-footer -->
            </div><!-- form-layout -->
        </form>
      </div><!-- card -->

 
  </div>



  <script type="text/javascript">
    function readURL1(input){
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#image_one')
          .attr('src', e.target.result)
          .width(80)
          .height(80);
        };
        reader.readAsDataURL(input.files[0]);
      }
    }
    function readURL2(input){
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#image_two')
          .attr('src', e.target.result)
          .width(80)
          .height(80);
        };
        reader.readAsDataURL(input.files[0]);
      }
    }
    function readURL3(input){
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#image_three')
          .attr('src', e.target.result)
          .width(80)
          .height(80);
        };
        reader.readAsDataURL(input.files[0]);
      }
    }
  </script>

@endsection