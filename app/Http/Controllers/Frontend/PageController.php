<?php

namespace App\Http\Controllers\Frontend;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function hakkimizda(){

        $about = About::where('id',1)->first();
        return view('frontend.pages.about',compact('about'));
    }

    public function iletisim(){
        return view('frontend.pages.contact');
    }

    public function urunler(){
        return view('frontend.pages.product');
    }

    public function indirimdekiurunler(){
        return view('frontend.pages.product');
    }

    public function urundetay(){
        return view('frontend.pages.products');
    }

    public function cart(){
        return view('frontend.pages.cart');
    }
}
