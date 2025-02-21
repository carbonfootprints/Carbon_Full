<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoundaryController extends Controller
{
    public function index(){
        return view('admin.boundary');
    }
}
