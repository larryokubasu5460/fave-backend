<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|max:120',
            'email' => 'required|email',
            'message' => 'required|string|max:1000',
        ]);

        Mail::raw($validated['message'], function($mail) use ($validated){
            $mail->to('events@faveevents.com')
                ->subject('New Inquiry from '. $validated['name'])
                ->replyTo($validated['email']);
        });

        return response()->json([
            'status'=>'success',
            'message' => 'Your message has been sent successfully'
        ]);
    }
}
