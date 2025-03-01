<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndirectController extends Controller
{
    public function index(){
        return view('admin.indirect.indirectghg');
    }
    public function indirectFirstFormOne(){
        return view('admin.indirect.indirectFirstFormOne');
    }
    public function indirectFirstFormTwo(){
        return view('admin.indirect.indirectFirstFormTwo');
    }
    public function indirectSecondFormOne(){
        return view('admin.indirect.indirectSecondFormOne');
    }
    public function indirectSecondFormTwo(){
        return view('admin.indirect.indirectSecondFormTwo');
    }
    public function indirectSecondFormThree(){
        return view('admin.indirect.indirectSecondFormThree');
    }
}
