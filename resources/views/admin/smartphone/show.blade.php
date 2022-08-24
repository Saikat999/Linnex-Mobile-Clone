@extends('admin.layout.master-layout')

@section('admin-content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="/">Home</a>
      <span class="breadcrumb-item active">Smart phone</span>
    </nav>

        <div class="sl-pagebody">
          <div class="sl-page-title">
            <h5>Smartphone Table</h5>
           
          </div><!-- sl-page-title -->
  
          <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Phone List
                <a href="{{route('add.smartphone')}}" class="btn btn-sm btn-success pull-right">Add New</a>
            </h6>
            
  
            <div class="table-wrapper">
              <table id="datatable1" class="table display responsive nowrap">
                <thead>
                  <tr>
                    <th class="wd-5p">ID</th>
                    <th class="wd-5p">Phone name</th>
                    {{-- <th class="wd-5p">Code</th>
                    <th class="wd-5p">Quantity</th> --}}
                    <th class="wd-5p">Android version</th>
                    <th class="wd-5p">Processor</th>
                    <th class="wd-5p">Display</th>
                    <th class="wd-5p">Storage</th>
                    <th class="wd-5p">Camera</th>
                    <th class="wd-5p">Battery</th>
                    <th class="wd-5p">Phone Image</th>
                    <th class="wd-10p">Action</th>
                  
                  </tr>
                </thead>
                <tbody>
                  @foreach ($smartphone as $key=>$row)
                    <tr>
                      <td>{{$key +1}}</td>
                      <td>{{$row->phone_name}}</td>
                      {{-- <td>{{$row->code}}</td>
                      <td>{{$row->quantity}}</td> --}}
                      <td>{{$row->android_version}}</td>
                      <td>{{$row->processor}}</td>
                      <td>{{$row->display}}</td>
                      <td>{{$row->storage}}</td>
                      <td>{{$row->camera}}</td>
                      <td>{{$row->battery}}</td>
                      <td><img src="{{URL::to($row->phone_image)}}" height="70" width="80" alt=""></td>
                      <td>
                          <a href="{{URL::to('smart-phone/edit/'.$row->id)}}" class="btn btn-sm btn-info">Edit</a>
                          <a href="{{URL::to('smart-phone/delete/'.$row->id)}}" class="btn btn-sm btn-danger" id="delete">Delete</a>
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