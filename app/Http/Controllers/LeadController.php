<?php

namespace App\Http\Controllers;

use App\Lead;
use App\Dealership;
use App\Mail\ContactMail;
use App\Http\Requests\LeadCapture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class LeadController extends Controller
{
    /**
     * Show the app homepage
     *
     * @return Response
     */
    public function index()
	{
		$firstNames = \App\Lead::all()->map->firstname;

        $dealerShips = Dealership::all();

        $data = [
            'firstNames'    => $firstNames,
            'dealerShips'   => $dealerShips,
        ];

		return view('pages.welcome', $data);
	}

    /**
     * Method to process and store a new lead.
     *
     * @param  LeadCapture $request
     * @return Response
     */
	public function processLead(LeadCapture $request)
    {
        $validatedFormData = $request->validated();

        $emailRecipient = 'jeremy.kenedy@sq1.com';  // <- This will received from the form.

        $lead = new Lead();
        $lead->fill($validatedFormData)->save();

        Mail::to($emailRecipient)->send(new ContactMail($validatedFormData));

        return redirect('/')->withSuccess('Yay, welcome to the party!');
	}
}
