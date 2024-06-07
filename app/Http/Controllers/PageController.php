<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about(Request $request)  {
        return view('about');
    }
    public function blog(Request $request)  {
        return view('blog');
    }
    public function coming(Request $request)  {
        return view('coming');
    }
    public function contact(Request $request)  {
        return view('contact');
    }
    public function destination(Request $request)  {
        return view('destionation');
    }
    public function faq(Request $request)  {
        return view('faq');
    }
    public function service(Request $request)  {
        return view('service');
    }
    public function team(Request $request)  {
        return view('team');
    }
    public function testimonial(Request $request)  {
        return view('testimonial');
    }
    
}
