<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPagesController extends Controller
{
    // menampilkan Homepage
    public function index(){
        return view ('pages.homepage');
    }

    // menampilkan berita
    public function berita(){
        return view ('pages.berita');
    }

    // menampilkan jajanan
    public function jajanan(){
        return view ('pages.jajanan');
    }

    // menampilkan halaman pakaian
    public function pakaian(){
        return view ('pages.pakaian');
    }

    // menampilkan Halaman blog
    public function blog(){
        return view ('pages.blog');
    }

    // menampilkan Halaman contact
    public function contact(){
        return view ('pages.contact');
    }
}


