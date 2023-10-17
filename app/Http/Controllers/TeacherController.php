<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    public function teacherView()
    {
        if (Auth::user()->userType==1)
        {
            return view('admin.teacher.teacherView');
        }
    }
    public function addNewTeacherForm()
    {
        if (Auth::user()->userType==1)
        {
            return view('admin.teacher.addNewTeacherForm');
        }
    }
}
