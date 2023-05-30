<?php

namespace App\Http\Controllers;

use App\Models\personal;

use Illuminate\Http\Request;

class StoryController extends Controller
{
    //
    function index()
    {

        $personal = personal::where('status', 1)->get();

        return view('story.index', compact('personal',));
    }
}
