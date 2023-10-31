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
            $otherCourse = Batch::orderBy('id', 'DESC')->limit(4)->get();
            $relatedCourse = Batch::where('teacherId','=',$data->teacherId)->orWhere('category','=',$data->category)->orderBy('id', 'DESC')->limit(2)->get();
            return view('user.course.courseView',compact('data','teacher','category','otherCourse','relatedCourse'));
        }

        public function allCourse()
        {
            $data = Batch::orderBy('id', 'DESC')->get();
            return view('user.course.allCourse', compact('data'));
        }



}
