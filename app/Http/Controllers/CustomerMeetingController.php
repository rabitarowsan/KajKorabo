<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerMeeting;

class CustomerMeetingController extends Controller
{
    public function store(Request $request, $id)
    {
        $validated = $request->validate([
            'fullName' => 'required|string|max:255',
            'email' => 'required|email',
            'phoneNumber' => 'required|regex:/^[0-9]+$/',
            'meetingTime' => 'required|date',
        ]);

        CustomerMeeting::create([
            'full_name' => $validated['fullName'],
            'email' => $validated['email'],
            'phone_number' => $validated['phoneNumber'],
            'meeting_time' => $validated['meetingTime'],
            'product_id' => $id,
        ]);

        return back()->with('success', 'Meeting request submitted successfully.');
    }
}
