<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view( view: 'main.index');
    }
    public function contact(){
        return view( view: 'main.contact');
    }
}
