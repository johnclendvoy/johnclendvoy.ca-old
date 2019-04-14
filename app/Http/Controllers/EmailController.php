<?php

namespace App\Http\Controllers;

use Mail;
use App\ContactMessage;
use App\Mail\ContactForm;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ContactFormRequest;

class EmailController extends Controller
{
	// send an email containing the data from the contact form
	public function sendContactEmail(ContactFormRequest $request) {

		//save the message in the db
		// ContactMessage::create($request->all());

		// send me the email
		Mail::to('johnclendvoy@gmail.com')->send( new ContactForm($request->all()));

		$sent = true;
		return view('pages.contact', compact('sent'));
	}

	// List of all leather items
	public function admin()
	{
		$messages = ContactMessage::all()->sortByDesc('created_at');
		return view('contact-messages.admin', compact('messages'));
	}

}

