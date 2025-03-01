<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use Illuminate\Http\Request;

class DirectController extends Controller
{
    public function directFormOne($visit_id)
    {
        $visit = Visit::findOrFail($visit_id);
        return view('admin.direct.directFormOne', compact('visit'));
    }
    public function directFormTwo()
    {
        return view('admin.direct.directFormTwo');
    }
    public function directFormThree()
    {
        return view('admin.direct.directFormThree');
    }
}
