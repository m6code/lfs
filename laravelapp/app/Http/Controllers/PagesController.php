<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Laravelapp';
        return view('pages.index', compact('title'));
        // or use
        // return view('pages.index')->with('title',$title);
    }

    public function about(){
        $about = 'About Us';
        return view('pages.about')->with('about', $about);
    }

    public function services(){
        $data = array(
                'title' => 'Services',
        );
        return view('pages.services')->with($data);
    }
}
