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

    //reviews page
    public function reviews()
    {
        return view('web.reviews');
    }

    //ourguide page
    public function our_guide()
    {
        return view('web.our-guide');
    }

    //tourist-visa page
    public function tourist_visa()
    {
        return view('web.tourist-visa');
    }

    //listing page
    public function listing()
    {
        return view('web.list');
    }

    //plan page
    public function plan()
    {
        return view('web.plan');
    }

    //why us page
    public function why_us()
    {
        return view('web.why-us');
    }


}
