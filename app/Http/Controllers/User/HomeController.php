<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Course;

class HomeController extends Controller
{
    public function home()
    {
    	//人気コース
    	$popularity_course = Course::take(5)->get();

        return view('user.shared.home', compact('popularity_course'));
    }
}
