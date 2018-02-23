<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHome(){
        return view('home');
    }

    public function getNews(){
        return view('news');
    }

    public function getCompas(){
        return view('compas');
    }

    public function getZouk(){
        return view('/zouk');
    }

    public function getRapkreyol(){
        return view('rapkreyol');
    }

    public function getVoodoo(){
        return view('voodoo');
    }

    public function getGallery(){
        return view('gallery');
    }

    public function getPlus(){
        return view('plus');
    }

    public function getAbout(){
        return view('about');
    }

    public function getContact(){
        return view('contact');
    }
}
