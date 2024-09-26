<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index () {
        $data =["nama" =>"shera amelia"];
        return view("home", $data);
    }
}
