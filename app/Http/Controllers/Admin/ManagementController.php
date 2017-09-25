<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManagementController extends Controller
{
    public function four_skills_management()
    {
        return view('admin.shared.fourSkillsManagement');
    }

    public function exam_management()
    {
        return view('admin.exam.management');
    }
}
