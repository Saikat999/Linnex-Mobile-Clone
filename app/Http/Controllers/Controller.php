<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function landpage()
    {
        return view('main-landingpage');
    }
    
    public function index()
    {
       return view('home');
    }

    public function contactpage()
    {
        return view('pages.contact');
    }
    public function aboutpage()
    {
        return view('pages.about-us');
    }
    public function faqpage()
    {
        return view('pages.faq');
    }
}
