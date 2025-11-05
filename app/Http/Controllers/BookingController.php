<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request){

        $validated = $request->validate([
            'name' => 'required|string|max:120',
            'emai'=>'required|email',
            'phone'=>'nullable|string|max:20',
            'event_type'=>'required|string|max:100',
            'event_date'=>'nullable|date',
            'location'=>'nullable|string|max:255',
            'budget'=>'nullable|numeric',
            'notes' => 'nullable|string|max:2000'
        ]);

        $booking = Booking::create($validated);

        return response()->json([
            'status'=>'success',
            'message'=> 'Your booking request has been received.',
            'data'=>$booking
        ]);
    }
}
