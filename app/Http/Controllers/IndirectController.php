<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndirectController extends Controller
{
    public function index(){
        return view('admin.indirect.indirectghg');
    }
}
