<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['about', 'services', 'contact_page']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.dashboard.home');
    }

    public function about(){

        return view('website.about');
    }

    public function services(){

        return view('website.services');
    }

    public function contact_page(){

        return view('website.contact');
    }


}
