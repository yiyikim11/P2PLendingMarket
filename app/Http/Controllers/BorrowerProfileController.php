<?php

namespace App\Http\Controllers;

use App\Models\BorrowerProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BorrowerProfileController extends Controller
{
    public function create()
    {
        return view('pages.borrower-info-form');
    }

    // store newly created borrower profile
    public function store(Request $request)
    {

        Log::info('Borrower profile store request received', $request->all());

        Log::info('Request all input:', $request->all());
        Log::info('Request has files:', [
            'id_document' => $request->hasFile('id_document'),
            'bank_statement' => $request->hasFile('bank_statement'),
            'profile_picture' => $request->hasFile('profile_picture'),
        ]);


        $validated = $request->validate([
            'occupation' => 'required|string|max:255',
            'salary' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phonenb' => 'required|string|max:20',
            'id_document' => 'required|file|mimes:jpeg,png,jpg,pdf|max:2048',
            'bank_statement' => 'required|file|mimes:jpeg,png,jpg,pdf|max:2048',
            'facebook' => 'required|string|max:255',
            'telegram' => 'required|string|max:255',
            'profile_picture' => 'nullable|file|mimes:jpeg,png,jpg|max:2048',
        ]);

        try {
            $user = request()->user();

            if (!$user) {
                return redirect()->back()->with('error', 'You must be logged in to complete this action.');
            }

            // Store uploaded files
            $idPath = null;
            if ($request->hasFile('id_document')) {
                $idPath = $request->file('id_document')->store('id-documents', 'public');
            }

            $bankStatementPath = null;
            if ($request->hasFile('bank_statement')) {
                $bankStatementPath = $request->file('bank_statement')->store('bank-statements', 'public');
            }

            $profilePicPath = null;
            if ($request->hasFile('profile_picture')) {
                $profilePicPath = $request->file('profile_picture')->store('profile-pictures', 'public');
            }

            $borrowerProfile = new BorrowerProfile([
                'user_id' => $user->id,
                'occupation' => $validated['occupation'],
                'salary_range' => $validated['salary'],
                'address' => $validated['address'],
                'phone_number' => $validated['phonenb'],
                'id_card' => $idPath,
                'bank_statement' => $bankStatementPath,
                'facebook' => $validated['facebook'],
                'telegram' => $validated['telegram'],
                'profile_pic' => $profilePicPath,
            ]);

            $borrowerProfile->save();

            return redirect()->route('dashboard.borrower')->with('success', 'Borrower profile created successfully!');
        } catch (\Exception $e) {
            Log::error('Error creating borrower profile: ' . $e->getMessage());
            return redirect()->back()->withInput()->with('error', 'Something went wrong: ' . $e->getMessage());
        }
    }
}
