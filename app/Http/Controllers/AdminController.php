<?php

namespace App\Http\Controllers;

use App\Models\BatchCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function adminDashboard()
    {
        if (Auth::user()->userType==1){

            return view('admin.adminDashboard');
        }
    }
    public function batchView()
    {
        if (Auth::user()->userType==1)
        {
            return view('admin.batch.batchView');
        }
    }
    public function addNewBatchForm()
    {
        if (Auth::user()->userType==1)
        {
            $category = BatchCategory::all();
            return view('admin.batch.addNewBatchForm',compact('category'));
        }
    }
    public function addNewCategory()
    {
        if (Auth::user()->userType==1)
        {
            $data = BatchCategory::all();
            return view('admin.batch.category.addNewCategory',compact('data'));
        }
    }
    public function addNewBatchCategoryForm()
    {
        if (Auth::user()->userType==1)
        {


            return view('admin.batch.category.addNewBatchCategoryForm');
        }
    }
    public function newBatchCategory(Request $request)
    {
        $data = new BatchCategory();
        $data->batch_category = $request->catName;
        $data->save();
        return redirect('addNewBatchForm')->withSuccess('Batch Category Add Successfully');
    }
    public function deleteBatchCategory($id)
    {
        $data = BatchCategory::find($id);
        $data->delete();
        return redirect('addNewCategory')->withSuccess('Batch Category Delete Successfully');

    }
}
