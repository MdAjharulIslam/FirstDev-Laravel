<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function showHome(){
        return view('pages.home');
    }
    public function showUser($id){
        return view('pages.header',compact('id'));
    }
    public function showBolg(){
        return view('pages.blog');
    }
}
