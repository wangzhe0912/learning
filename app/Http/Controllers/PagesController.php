<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function about() {
    $people = [];
    return view('about', compact('people'));
}
}
