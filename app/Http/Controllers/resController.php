<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class resController extends Controller
{
    public function index() {
        return view('reserve.index');
    }
}
