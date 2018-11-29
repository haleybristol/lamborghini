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

        $dealerShips = Dealership::all();

        $data = [
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

        $lead = new Lead();

        $lead->fill($validatedFormData)->save();

        $dealerObj = Dealership::where('store_name', $validatedFormData['dealer'])->first();

        Mail::to($validatedFormData['email'])->send(new ContactMail($validatedFormData));

        $selectedDealership = Dealership::find('dealer');
        $selectedWebsite = Dealership::find('website');

        $data = [
            'thanks'                => trans('app.thanks'),
            'copy'                  => trans('app.thanksCopy'),
            'button'                => trans('app.dealerButton'),
            'selectedDealership'    => $selectedDealership,
            'website'               => $dealerObj->website,
        ];

        return redirect('/')->with($data);  // Redeirect thank you view rathar then home view.
	}
}
