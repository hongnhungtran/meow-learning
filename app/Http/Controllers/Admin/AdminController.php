<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function getExerciseAdd () 
    {
    	return  view('admin.home');
    }

    public function postExerciseAdd ()
    {

    }
}
