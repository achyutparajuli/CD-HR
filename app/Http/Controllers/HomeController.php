<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('web.site.index');
    }

    public function about()
    {
        return view('web.site.about');
    }

    public function history()
    {
        return view('web.site.history');
    }

    public function partners()
    {
        return view('web.site.partners');
    }

    public function career()
    {
        return view('web.site.career');
    }

    public function contact()
    {
        return view('web.site.contact');
    }
}
