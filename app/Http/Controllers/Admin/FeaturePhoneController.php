<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Featurephone;
use Image;

class FeaturePhoneController extends Controller
{
    public function index()
    {
        $featurephone = Featurephone::all();
        return view('admin.featurephone.show',compact('featurephone'));
    }
    public function create()
    {
        return view('admin.featurephone.create');
    }
    public function store(Request $request)
    {
        $data = new Featurephone();
        $data->phone_name = $request->phone_name;
        $data->code = $request->code;
        $data->quantity = $request->quantity;
        $data->phone_details = $request->phone_details;

        // $data->image_one= $request->image_one;
        // $data->image_two= $request->image_two;
        // $data->image_three= $request->image_three;

        $image_one = $request->file('image_one');
        $image_two = $request->file('image_two');
        $image_three = $request->file('image_three');

        if($image_one && $image_two && $image_three){
            $image_one_name = hexdec(uniqid()).'.'.$image_one->getClientOriginalExtension();
            Image::make($image_one)->resize(800,800)->save('media/featurephone/'.$image_one_name);
            $data['image_one'] = 'media/featurephone/'.$image_one_name;

            $image_two_name = hexdec(uniqid()).'.'.$image_two->getClientOriginalExtension();
            Image::make($image_two)->resize(800,800)->save('media/featurephone/'.$image_two_name);
            $data['image_two'] = 'media/featurephone/'.$image_two_name;

            $image_three_name = hexdec(uniqid()).'.'.$image_three->getClientOriginalExtension();
            Image::make($image_three)->resize(800,800)->save('media/featurephone/'.$image_three_name);
            $data['image_three'] = 'media/featurephone/'.$image_three_name;
        }


        $data->save();
        return back();




        // return response()->json($data);
        // 
        // 

    }

}
