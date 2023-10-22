<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\User;
use Faker\Provider\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{
    public function teacherView()
    {
        if (Auth::user()->userType==1)
        {
            $data = Teacher::all();
            return view('admin.teacher.teacherView',compact('data'));
        }
    }
    public function addNewTeacherForm()
    {
        if (Auth::user()->userType==1)
        {
            return view('admin.teacher.addNewTeacherForm');
        }
    }
    public function addNewTeacher(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->userType = 2;
        $user->batch = 'Teacher';
        $user->password =Hash::make($user->phone);
        $user->regNo = User::generateRegistrationNumber('Teacher');
        $user->save();
        $data = new Teacher();
        $data->regNo= User::generateRegistrationNumber('Teacher');
        $data->name= $request->name;
        $data->phone= $request->phone;
        $data->email= $request->email;
        if($request->image){
            $imageName =$request->name.'.'.$request->image->extension();
            $request->image->move(public_path('TeacherImage'), $imageName);
            $data->image = $imageName;
        }
        $data->description= $request->description;
        $data->description= $request->description;
        $data->department= $request->department;
        $data->experience= $request->experience;
        $data->language= $request->language;
        $data->qualification= $request->qualification;
        $data->save();
        return redirect("teacherView")->withSuccess('Great! Teacher Add Successfully');
    }
    public function editTeacherFrom($id)
    {
        if (Auth::user()->userType==1)
        {
            $data= Teacher::find($id);
            return view('admin.teacher.editTeacherFrom',compact('data'));
        }
    }
    public function deleteTeacherFrom($id)
    {
        if (Auth::user()->userType==1)
        {
            $data = Teacher::find($id);
            $data->delete();
            return redirect("teacherView")->withSuccess('Teacher Delete Successfully');

        }
    }
    public function detailsTeacher($id)
    {
        if (Auth::user()->userType==1)
        {
            $data = Teacher::find($id);
            return view('admin.teacher.detailsTeacher',compact('data'));

        }
    }
    public function editNewTeacher(Request $request,$id)
    {

            $data = Teacher::find($id);
            $data->name= $request->name;
            $data->phone= $request->phone;
            $data->email= $request->email;
            if($request->image){
                $imageName =$request->name.'.'.$request->image->extension();
                $imagePath = public_path('TeacherImage/'.$imageName);
                if(\Illuminate\Support\Facades\File::exists($imagePath)){
                    unlink($imagePath);
                }
                $request->image->move(public_path('TeacherImage'), $imageName);
                $data->image = $imageName;
            }

            $data->save();

            return redirect("teacherView")->withSuccess('Teacher Edit Successfully');

    }
}
