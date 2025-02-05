<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapageController extends Controller
{
    public function regarde_page(){
        return view('mapage.main');
    }
}
