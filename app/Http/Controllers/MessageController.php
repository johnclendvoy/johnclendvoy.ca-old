<?php

namespace App\Http\Controllers;

use App\ContactMessage;

use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;
use App\Http\Requests\MessageFormRequest;

class MessageController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function admin()
    {
    	$messages = ContactMessage::all();
		return view('messages.admin', compact( 'messages'));
    }

	// remove object from db
	public function destroy(ContactMessage $message)
	{
		$message->delete();
		return back();
	}
}
