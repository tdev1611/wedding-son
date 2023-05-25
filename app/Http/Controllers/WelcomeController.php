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
        // $personal_1 = $personal[0];
        // if ($personal[1]) {
        //     $personal_2 = $personal[1];
        // }else {
        //     $personal_2 = $personal[0];
        // }
        return view('welcome', compact('personal', ));
    }
}
