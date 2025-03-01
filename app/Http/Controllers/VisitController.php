<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VisitController extends Controller
{
    public function index()
    {
        return view('admin.visit');
    }

    public function store(Request $request)
{
    // Create a new visit entry with all boolean fields set to false
    $visit = Visit::create([
        'user_id' => Auth::id(),
        'visit_code' => $request->visit_code,
        'company_details' => false,
        'directformone' => false,
        'directformtwo' => false,
        'directformthree' => false,
        'indirectfirstformone' => false,
        'indirectfirstformtwo' => false,
        'indirectsecondformone' => false,
        'indirectsecondformtwo' => false,
        'indirectsecondformthree' => false,
    ]);

    // Redirect to Direct Form One with the visit ID
    return redirect()->route('admin.organisation', ['visit_id' => $visit->id]);
}

    public function sidebar()
{
    // Get the latest visit of the logged-in user
    $visit = Visit::where('user_id', Auth::id())->latest()->first();

    return view('layouts.sidebar', compact('visit'));
}
}
