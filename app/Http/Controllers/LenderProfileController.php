<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LenderProfileController extends Controller
{
    public function store(Request $request) {
        $validated = $request->validate([
            ''
        ])
    }
}
