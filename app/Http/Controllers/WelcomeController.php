<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\personal;

class WelcomeController extends Controller
{
    //

    function index()
    {
        $personal = personal::where('status', 1)->get();
        return view('welcome', compact('personal',));
    }

    // function layout()
    // {
    //     $personal = personal::where('status', 1)->get();
    //     return view('layout-client.layout', compact('personal',));
    // }
}
