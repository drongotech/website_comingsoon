<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function openIndexPage() {
        return view('layout.indexPage');
    }
}
