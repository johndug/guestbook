<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\GuestMessage;

class DashboardController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if(Auth::user()->UserLevel->Level->name == "Admin")
        {
            $messages = GuestMessage::all();
            //return $messages[0]->Reply;
            return view('admin-messages', ['messages' => $messages]);
        } else
        {
            $messages = Auth::user()->Messages;

            return view('messages', ['messages' => $messages]);
        }

        
    }
}
