<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UIFituresController extends Controller
{
    //
    public function general()
    {
        return view('pages.general');
    }
    public function buttons()
    {
        return view('pages.buttons');
    }
    public function grids()
    {
        return view('pages.grids');
    }
}
