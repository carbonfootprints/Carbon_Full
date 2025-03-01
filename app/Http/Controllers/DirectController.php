<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DirectController extends Controller
{
    public function directFormOne(){
        return view('admin.direct.directFormOne');
    }
    public function directFormTwo(){
        return view('admin.direct.directFormTwo');
    }
    public function directFormThree(){
        return view('admin.direct.directFormThree');
    }
}
