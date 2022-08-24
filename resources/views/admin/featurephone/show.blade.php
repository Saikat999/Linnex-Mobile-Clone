@extends('admin.layout.master-layout')

@section('admin-content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="/">Home</a>
      <span class="breadcrumb-item active">Feature phone</span>
    </nav>

        <div class="sl-pagebody">
          <div class="sl-page-title">
            <h5>Feature Table</h5>
           
          </div><!-- sl-page-title -->
  
          <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Phone List
                <a href="{{route('add.featurephone')}}" class="btn btn-sm btn-success pull-right">Add New</a>
            </h6>
            
  
            <div class="table-wrapper">
              <table id="datatable1" class="table display responsive nowrap">
                <thead>
                  <tr>
                    <th class="wd-5p">ID</th>
                    <th class="wd-5p">Phone name</th>
                    {{-- <th class="wd-5p">Code</th>
                    <th class="wd-5p">Quantity</th> --}}
                    <th class="wd-15p">Phone deatils</th>
                    <th class="wd-5p">Image One</th>
                    <th class="wd-5p">Image Two</th>
                    <th class="wd-5p">Image Three</th>
                    <th class="wd-10p">Action</th>
                  
                  </tr>
                </thead>
                <tbody>
                  @foreach ($featurephone as $key=>$row)
                    <tr>
                      <td>{{$key +1}}</td>
                      <td>{{$row->phone_name}}</td>
                      {{-- <td>{{$row->code}}</td>
                      <td>{{$row->quantity}}</td> --}}
                      <td>{{$row->phone_details}}</td>
                      <td><img src="{{URL::to($row->image_one)}}" height="70" width="80" alt=""></td>
                      <td><img src="{{URL::to($row->image_two)}}" height="70" width="80" alt=""></td>
                      <td><img src="{{URL::to($row->image_three)}}" height="70" width="80" alt=""></td>
                      <td>
                          <a href="" class="btn btn-sm btn-info">Edit</a>
                          <a href="" class="btn btn-sm btn-danger" id="delete">Delete</a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div><!-- table-wrapper -->
          </div><!-- card -->
  
  
        </div><!-- sl-pagebody -->

 
  </div>


@endsection