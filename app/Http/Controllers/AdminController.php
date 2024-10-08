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
        return view('admin.category');
    }

    public function add_category(Request $request){

        $category = new Category();
        $category->category_name = $request->category;
        $category->save();
        toastr()
            ->closeButton()
            ->timeOut(5000)
            ->addSuccess('Category added Successfully');
        return redirect()->back();

    }
}
