<?php

namespace App\Http\Controllers;

use App\Models\LenderProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BorrowerProfileController extends Controller
{
    public function create()
    {
        return view('pages.borrower-info-form');
    }

//    store newly created borrower profile
    public function store(Request $request)
    {
        $validated = $request->validate([
            'occupation'=> 'required|string|max:255',
            'salary' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phonenb' => 'required|string|max:20',
            'id_card' => 'required|file|mimes:jpeg,png,jpg,pdf|max:2048',
            'bank_statement' => 'required|file|mimes:jpeg,png,jpg,pdf|max:2048',
            'facebook'=> 'required|string|max:255',
            'telegram'=> 'required|string|max:255',
            ]);

        try {
            $user = request()->user();

            if(!$user){
                return redirect()->back()->with('error', 'You must be logged in to complete this action.');

            }
            $idPath = null;
            if ($request->hasFile('id_document')) {
                $idPath = $request->file('id_document')->store('id-documents', 'public');
            }

            $borrowerProfile = new LenderProfile([
                'occupation' => $validated['occupation'],
                'salary_range' => $validated['salary'],
                'address' => $validated['address'],
                'phone_number' => $validated['phonenb'],
                'id_card' => $idPath,
                'bank_statement' => $validated['bank_statement'],
                'facebook'=>$validated['facebook'],
                'telegram'=> $validated['telegram'],
            ]);

            $user->borrowerProfile()->save($borrowerProfile);

            return redirect()->route('dashboard/borrower/index')->with('success', 'Borrower profile created successfully!');
        }catch (\Exception $e){
            Log::error('Error creating lender profile: '.$e->getMessage());
            return redirect()->back()->withInput()->with('error', 'Something went wrong. Please try again.');
        }
    }
}
