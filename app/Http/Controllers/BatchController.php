<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\BatchCategory;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BatchController extends Controller
{
    public function batchView()
    {
        if (Auth::user()->userType==1)
        {
            $data = Batch::orderBy('id', 'DESC')->get();
            return view('admin.batch.batchView',compact('data'));
        }
    }
    public function addNewBatchForm()
    {
        if (Auth::user()->userType==1)
        {
            $category = BatchCategory::all();
            $teacher = Teacher::all();
            return view('admin.batch.addNewBatchForm',compact('category','teacher'));
        }
    }

    public function newBatch(Request $request)
    {
      $data = new Batch();
      $data->name= $request->name;
      $data->category= $request->category;
      $teacher= Teacher::find($request->teacherId);
      $data->teacherId= $teacher->id;
      $data->teacherName= $teacher->name;
      $data->teacherImage=$teacher->image;
      $data->price= $request->price;
      $data->date= $request->date;
      $data->time= $request->time;
      $data->student= $request->student;
      $data->description= $request->description;
      $data->curriculum= $request->curriculum;
      $data->feature= $request->feature;

        if($request->image1){
            $imageName1 =$request->name.'1'.'.'.$request->image1->extension();
            $request->image1->move(public_path('BatchImage'), $imageName1);
            $data->image1 = $imageName1;
        }
        if($request->image2){
            $imageName2 =$request->name.'2'.'.'.$request->image2->extension();
            $request->image2->move(public_path('BatchImage'), $imageName2);
            $data->image2 = $imageName2;
        }
        if($request->image3){
            $imageName3 =$request->name.'3'.'.'.$request->image3->extension();
            $request->image3->move(public_path('BatchImage'), $imageName3);
            $data->image3 = $imageName3;
        } if($request->image4){
        $imageName4 =$request->name.'4'.'.'.$request->image4->extension();
        $request->image4->move(public_path('BatchImage'), $imageName4);
        $data->image4 = $imageName4;
    }
      $data->action= 1;
    $data->save();
        return redirect("batchView")->withSuccess('Batch Added Successfully');

    }
    public function deleteBatch($id)
    {
        if (Auth::user()->userType==1)
        {
           $data = Batch::find($id);
           $data->delete();
            return redirect("batchView")->withSuccess('Batch Delete Successfully');
        }
    }
    public function editBatch($id)
    {
        if (Auth::user()->userType==1)
        {
           $data = Batch::find($id);
            $category = BatchCategory::all();
            $teacher = Teacher::all();

            return view('admin.batch.editBatch',compact('data','category','teacher'));
        }
    }

    public function editBatchSubmit(Request $request,$id)
    {


        $data = Batch::find($id);
        $data->name= $request->name;
        $data->category= $request->category;
        $teacher= Teacher::find($request->teacherId);
        $data->teacherId= $teacher->id;
        $data->teacherName= $teacher->name;
        $data->teacherImage=$teacher->image;
        $data->price= $request->price;
        $data->date= $request->date;
        $data->time= $request->time;
        $data->student= $request->student;
        $data->description= $request->description;
        $data->curriculum= $request->curriculum;
        $data->feature= $request->feature;

        if($request->image1){
            $imageName1 =$request->name.'1'.'.'.$request->image1->extension();
            $request->image1->move(public_path('BatchImage'), $imageName1);
            $data->image1 = $imageName1;
        }
        if($request->image2){
            $imageName2 =$request->name.'2'.'.'.$request->image2->extension();
            $request->image2->move(public_path('BatchImage'), $imageName2);
            $data->image2 = $imageName2;
        }
        if($request->image3){
            $imageName3 =$request->name.'3'.'.'.$request->image3->extension();
            $request->image3->move(public_path('BatchImage'), $imageName3);
            $data->image3 = $imageName3;
        } if($request->image4){
        $imageName4 =$request->name.'4'.'.'.$request->image4->extension();
        $request->image4->move(public_path('BatchImage'), $imageName4);
        $data->image4 = $imageName4;
    }
        $data->action= 1;
        $data->save();
        return redirect("batchView")->withSuccess('Batch Edit Successfully');

    }
}
