<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\MessageReply;
use App\Models\GuestMessage;
use Illuminate\Http\Request;

class MessageReplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(GuestMessage $guestMessage)
    {
        // new reply page
        return view('reply', ["message" => $guestMessage]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // save new reply
        $reply = new MessageReply();

        if(Auth::user()->UserLevel->Level->name == "Admin")
        {
            $reply->user_ref = Auth::user()->id;
            $reply->message_ref = $request->input('message_ref');
            $reply->message = $request->input('message');

            $reply->save();

            return redirect('/dashboard');
        } else{
            abort(403);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MessageReply  $messageReply
     * @return \Illuminate\Http\Response
     */
    public function show(MessageReply $messageReply)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MessageReply  $messageReply
     * @return \Illuminate\Http\Response
     */
    public function edit(MessageReply $messageReply)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MessageReply  $messageReply
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MessageReply $messageReply)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MessageReply  $messageReply
     * @return \Illuminate\Http\Response
     */
    public function destroy(MessageReply $messageReply)
    {
        //
    }
}
