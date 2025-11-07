<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    //
    public function index(){
        return response()->json([
            'data'=>Message::orderByDesc('created_at')->get()
        ]);
    }
}
