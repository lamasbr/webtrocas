<?php

namespace webtrocas\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['only' => ['home']]);
    }

    public function home(){
        return view('pages.home');
    }
}
