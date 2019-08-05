<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        //$title='welcome to laravel';
        //$name='abdelrhman';
        //return view('pages/about', compact('title'));
        //return view('pages/app')->with('title',$title)->with('name',$name);
        return view('pages/home');
    }

    public function about(){
        return view('pages/about');
    }

    public function services(){
        $data=['web','mobile','android'];
        return view('pages/services')->with('services',$data);
    }
}
