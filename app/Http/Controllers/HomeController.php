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
            'TitleBg' => 'about.jpg',
        ]);
    }

    public function shop() {
        return view('Shop', [
            'PageTitle' => 'Our Shop',
            'TitleBg' => 'shop.jpg',
        ]);
    }

    public function contact() {
        return view('Contact', [
            'PageTitle' => 'Contact Us',
            'TitleBg' => 'contact.jpg',
        ]);
    }

    public function solutions() {
        return view('Solutions', [
            'PageTitle' => 'Solutions',
            'TitleBg' => 'solutions.jpg',
        ]);
    }
}
