<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show(string $id){
        return view('welcome', compact('id'));
    }
}
