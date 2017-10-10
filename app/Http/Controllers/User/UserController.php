<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
	public function index()
	{
		return User::all();
	}

	public function home()
	{
		return view('user.shared.home');
	}
}
