<?php

namespace App\Http\Controllers;

use App\Models\GuestMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuestMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = GuestMessage::all();

        return view('guestbook', ["messages" => $messages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // new message
        return view('message');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $message = new GuestMessage();

        $message->message = $request->input('message');
        $message->user_ref = Auth::user()->id;

        $message->save();

        return redirect('/dashboard');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GuestMessage  $guestMessage
     * @return \Illuminate\Http\Response
     */
    public function edit(GuestMessage $guestMessage)
    {
        // edit message page
        return view('message', ['message' => $guestMessage]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GuestMessage  $guestMessage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GuestMessage $guestMessage)
    {
        // update message

        $guestMessage->message = $request->input('message');

        $guestMessage->save();

        return redirect('/dashboard');
    }


    public function delete(GuestMessage $guestMessage)
    {
        // delete message page
        return view('message-delete', ['message' => $guestMessage]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GuestMessage  $guestMessage
     * @return \Illuminate\Http\Response
     */
    public function destroy(GuestMessage $guestMessage)
    {
        //
        if($guestMessage->user_ref == Auth::user()->id)
        {
            $guestMessage->delete();

            return redirect('/dashboard');
        } else
        {
            abort(403);
        }
    }
}
