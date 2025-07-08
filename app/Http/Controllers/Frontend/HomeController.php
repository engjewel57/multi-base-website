<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function index()
    {
        return view('frontend.home');
    }
     public function about()
    {
        return view('frontend.about');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function product()
    {
        return view('frontend.product');
    }

    public function detail()
    {
        return view('frontend.detail');
    }

    public function shippingAddress()
    {
        return view('frontend.shippingAddress');
    }
}
