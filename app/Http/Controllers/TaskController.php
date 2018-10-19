<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

class TaskController extends Controller
{
    public function index() 

	{
		$tasks = Task::all();

		return view('tasks', compact('tasks'));
	}

	public function create() 
	{
		return view('welcome');
	}

	public function store() 
	{
		$user = new User();

		$user->name = request('name');
		$user->password = request('password');
		$user->email = request('email');

		$user->save();

		return redirect('welcome');
	}
}
