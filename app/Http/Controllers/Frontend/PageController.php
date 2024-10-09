<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function hakkimizda(){
        return view('frontend.pages.about');
    }

    public function iletisim(){
        return view('frontend.pages.contact');
    }

    public function urunler(){
        return view('frontend.pages.product');
    }

    public function urundetay(){
        return view('frontend.pages.products');
    }

    public function cart(){
        return view('frontend.pages.cart');
    }
}
