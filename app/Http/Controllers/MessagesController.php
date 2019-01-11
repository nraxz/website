<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(request $request){

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required'
        ]);
        //Create New Message
        $message = new Message;
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');
        // Save Message
        $message->save();

        return redirect('/message')->with('success', 'Message Sent');
    }

    /**
     * @return $this
     */
    public function getMessages(){

        $messages = Message::all();

        return view('message')->with('messages', $messages);
    }





}
