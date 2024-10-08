<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;

class AdminController extends Controller
{
    //
    public function view_category()
    {
        $categories = Category::all();
        return view('admin.category',compact('categories'));
    }

    public function add_category(Request $request){

        $category = new Category();
        $category->category_name = $request->category;
        $category->save();
        toastr()
            ->closeButton()
            ->timeOut(10000)
            ->addSuccess('Category added Successfully');
        return redirect()->back();

    }

    public function delete_category($id){

        $category = Category::find($id);
        $category->delete();
        toastr()
            ->closeButton()
            ->timeOut(10000)
            ->addSuccess('Category deleted Successfully');
        return redirect()->back();

    }
}
