<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Smartphone;
use App\Featurephone;

class PagesController extends Controller
{
    public function smartPhone()
    {
        $smartphone = Smartphone::get();
        return view('partials.smartphone',compact('smartphone'));
    }
    public function featurePhone()
    {
        $featurephone = Featurephone::get();
        return view('partials.feature-phone',compact('featurephone'));
    }
    public function storeLocator()
    {
        return view('partials.store-locator');
    }
    public function Services()
    {
        return view('partials.service');
    }
}
