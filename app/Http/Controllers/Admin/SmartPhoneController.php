<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Smartphone;
;

class SmartPhoneController extends Controller
{
    public function index()
    {
        $smartphone = Smartphone::all();
        return view('admin.smartphone.show',compact('smartphone'));
    }

    public function create()
    {
        return view('admin.smartphone.create');
    }

    public function store(Request $request)
    {
        $data = new Smartphone();
        $data->phone_name = $request->phone_name;
        $data->code = $request->code;
        $data->quantity = $request->quantity;
        $data->android_version = $request->android_version;
        $data->processor = $request->processor;
        $data->display= $request->display;
        $data->storage = $request->storage;
        $data->camera = $request->camera;
        $data->battery = $request->battery;

        $image = $request->file('phone_image');
        if($image){
            $image_name = date('dmy_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'media/smartphone/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path,$image_full_name);

            $data->phone_image = $image_url;
        }

        // return response()->json($data);
        $data->save();
        return back();

    }
    public function DeleteSmartphone($id)
    {
        $data = Smartphone::where('id',$id)->first();
        $image = $data->phone_image;
        unlink($image);
        $data->delete();
        $notification=array(
                        'messege'=>'Smartphone Deleted Successfully !!!',
                        'alert-type'=>'success'
                         );
            return Redirect()->back()->with($notification);
    }

    public function EditSmartphone($id)
    {
        $data = Smartphone::where('id',$id)->first();
        return view('admin.smartphone.edit',compact('data'));
    }
    public function UpdateSmartphone(Request $request,$id)
    {
        $oldimage = $request->old_image;

        $data = Smartphone::find($request->id);
        $data->phone_name = $request->phone_name;
        $data->code = $request->code;
        $data->quantity = $request->quantity;
        $data->android_version = $request->android_version;
        $data->processor = $request->processor;
        $data->display= $request->display;
        $data->storage = $request->storage;
        $data->camera = $request->camera;
        $data->battery = $request->battery;

        $image = $request->file('phone_image');
        if($image){
            // unlink($oldimage);
            $image_name = date('dmy_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'media/smartphone/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path,$image_full_name);

            $data->phone_image = $image_url;
        }

        // return response()->json($data);
        $data->save();
        return redirect()->route('all.smartphone');
    }






}
