<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'welcome to laravel index!';
        return view ('index')->with('title', $title);
    }
    public function about(){
        $title = 'About Us';
        return view ('about')->with('title', $title);
    }
    public function services(){

        $data = array(

            'title' => 'Services!!',
            'services' => ['web design','seo']
        );
        return view ('services')->with($data);
    }
}
