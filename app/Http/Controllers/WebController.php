<?php

namespace dpt\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    //home(landing) page
    public function index()
    {
        return view('web.index');
    }

    //about page
    public function about()
    {
        return view('web.about');
    }

    //contact page
    public function contact()
    {
        return view('web.contact');
    }

    //gallery page
    public function gallery()
    {
        return view('web.gallery');
    }
}
