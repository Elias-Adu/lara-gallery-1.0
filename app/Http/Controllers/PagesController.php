<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // this function renders the Home page
    public function index()
    {
        return view('index');
    }
    // An About page can be made by
    /*
    public function about()
    {

    }
    */
}