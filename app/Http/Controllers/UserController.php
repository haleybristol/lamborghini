<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller

{
    public function index() 

	{
		$userNames = \App\User::all()->map->name;

		return view('welcome', compact('userNames'));
	}

	public function create() 

	{
		return view('welcome');
	}


	public function store() 

	{
		$user = new \App\User();

		$user->name = request('name');
		$user->password = request('password');
		$user->email = request('email');

		$user->save();

		return redirect('/');
	}
}
