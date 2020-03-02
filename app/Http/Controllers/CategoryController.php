<?php

namespace App\Http\Controllers;

use App\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
class CategoryController extends Controller
{
    public function addCategory(Request $request){
        if ($request->isMethod('post')) {
            $data=$request->all();
            $category = new category();
            $category->name=$data['name'];
            $category->description=$data['description'];
            $category->save();
            return redirect('/admin/viewCategory')->with('flash_message_success','Category Has been added successfully');

        }
        return view('admin.category.add_category');
    }

    public function viewCategory(){
        $category=category::get();
        return view('admin.category.view_category')->with(compact('category'));
    }

}
