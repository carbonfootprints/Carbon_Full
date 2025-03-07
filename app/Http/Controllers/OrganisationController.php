<?php

namespace App\Http\Controllers;

use App\Models\CompanyDetail;
use App\Models\Visit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class OrganisationController extends Controller
{
    public function index($visit_id)
    {
        return view('admin.organisation', compact('visit_id'));
    }

    public function store(Request $request, $visit_id)
    {
        // Validate the incoming data
        $validatedData = $request->validate([
            'organisation_name' => 'required|string|max:255',
            'site_name' => 'required|string|max:255',
            'company_registration_number' => 'nullable|string|max:255',
            'geographical_coordinates' => 'nullable|string|max:255',
            'address' => 'required|string|max:255',
            'contact_person' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:company_details,email',
            'telephone_number' => 'required|string|max:15',
            'number_of_employees' => 'nullable|integer',
            'facility_description' => 'nullable|string|max:255',
        ]);

        // Create the company detail entry for the visit
        $companyDetail = CompanyDetail::create([
            'visit_id' => $visit_id,
            'organisation_name' => $validatedData['organisation_name'],
            'site_name' => $validatedData['site_name'],
            'company_registration_number' => $validatedData['company_registration_number'],
            'geographical_coordinates' => $validatedData['geographical_coordinates'],
            'address' => $validatedData['address'],
            'contact_person' => $validatedData['contact_person'],
            'email' => $validatedData['email'],
            'telephone_number' => $validatedData['telephone_number'],
            'number_of_employees' => $validatedData['number_of_employees'],
            'facility_description' => $validatedData['facility_description'],
        ]);

        Log::info($visit_id);
        $visit = Visit::find($visit_id);
        Log::info($visit);
        if ($visit) {
            $visit->update(['company_details' => '1']);
        } else {
            return redirect()->back()->with('error', 'Visit not found.');
        }

        // Redirect to the form-one route with the visit_id
        return redirect()->route('admin.directFormOne', ['visit_id' => $visit_id])
            ->with('success', 'Organisation details saved successfully.');
    }
}
