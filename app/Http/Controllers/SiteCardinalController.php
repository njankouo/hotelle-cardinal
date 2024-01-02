<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteCardinalController extends Controller
{
    //

    public function about(){
        return view('about');
    }
    public function blog(){
        return view('blog');
    }
    public function contact(){
        return view('contact');
    }
    public function gallery(){
        return view('gallery');
    }
    public function room(){
        return view('room');
    }
}
