<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\BatchCategory;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dashboard()
    {
        if(Auth::check()){

            $batch = Batch::orderBy('id', 'DESC')->get();
            $teacher = Teacher::orderBy('id', 'DESC')->get();
            return view('dashboard',compact('batch','teacher'));
        }

            $batch = Batch::orderBy('id', 'DESC')->get();
            $teacher = Teacher::orderBy('id', 'DESC')->get();
            return view('dashboard',compact('batch','teacher'));

        }

        public function courseView($id)
        {
            $data= Batch::find($id);
            $teacher = Teacher::find($data->teacherId);
            $category = BatchCategory::all();
            return view('user.course.courseView',compact('data','teacher','category'));
        }
}
