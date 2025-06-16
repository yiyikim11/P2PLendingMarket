<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\LenderProfile;

class LenderProfileController extends Controller
{
    /**
     * Display the lender information form.
     */
    public function create()
    {
        return view('pages.lender-info-form');
    }

    /**
     * Store a newly created lender profile.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'occupation' => 'required|string|max:255',
            'salary' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phonenb' => 'required|string|max:20',
            'id_document' => 'required|file|mimes:jpeg,png,jpg,pdf|max:2048',
        ]);
        //todo: pel successful login as lender hz trov redirect tv lender dashboard not the existing dashboard file
        try {
            // Get the authenticated user
            $user = request()->user();

            if (!$user) {
                return redirect()->back()->with('error', 'You must be logged in to complete this action.');
            }

            // Handle the file upload
            $idPath = null;
            if ($request->hasFile('id_document')) {
                $idPath = $request->file('id_document')->store('id-documents', 'public');
            }

            // Create the lender profile
            $lenderProfile = new LenderProfile([
                'occupation' => $validated['occupation'],
                'salary_range' => $validated['salary'],
                'address' => $validated['address'],
                'phone_number' => $validated['phonenb'],
                'id_card' => $idPath,
            ]);

            // Associate with the registered user
            $user->lenderProfile()->save($lenderProfile);

            return redirect()->route('dashboard.lender')->with('success', 'Lender profile created successfully!');
        } catch (\Exception $e) {
            Log::error('Error creating lender profile: ' . $e->getMessage());
            return redirect()->back()->withInput()->with('error', 'Something went wrong. Please try again.');
        }
    }
}
