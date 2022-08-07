<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('Home');
    }

    public function about() {
        return view('About', [
            'PageTitle' => 'About Us',
        ]);
    }

    public function shop() {
        return view('Shop', [
            'PageTitle' => 'Our Shop',
        ]);
    }

    public function contact() {
        return view('Contact', [
            'PageTitle' => 'Contact Us',
        ]);
    }

    public function solutions() {
        return view('Solutions', [
            'PageTitle' => 'Solutions',
        ]);
    }
}
