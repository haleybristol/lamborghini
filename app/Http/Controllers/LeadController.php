<?php

namespace App\Http\Controllers;

use App\Lead;
use App\Http\Requests\LeadCapture;
use Illuminate\Http\Request;

class LeadController extends Controller

{
  public function index()
	{
		$firstNames = \App\Lead::all()->map->firstname;

		return view('pages.welcome', compact('firstNames'));
	}

	public function store(LeadCapture $request)
  {
      $formData = $request->validated();
      $lead = new Lead();
      $lead->fill($formData)->save();

  		return redirect('/')->withSuccess('Yay, welcome to the party!');
	}
}
