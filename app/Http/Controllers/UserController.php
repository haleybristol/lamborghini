<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller

{
    public function index()

	{
		$firstNames = \App\User::all()->map->firstname;

		return view('welcome', compact('firstNames'));
	}

	public function create()

	{
		return view('welcome');
	}


	public function store()

	{
      request()->validate([
        'firstname'             => 'required|max:255|string',
        'lastname'              => 'required|max:255|string',
        'email'                 => 'required|max:255|email',
        'phone'                 => 'required|numeric|nullable',
        'country'               => 'required|max:255|string'
      ]);

		  $user = new \App\User();

  		$user->firstname = request('firstname');
      $user->lastname = request('lastname');
      $user->phone = request('phone');
  		$user->email = request('email');
      $user->country = request('country');

  		$user->save();

  		return redirect('/');
	}
}
