<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(){
        $data = Categories::with('childrenRecursive')->whereNull('parent_id')->get();   
        return view('admin.pages.ecom.categories',['datas' => $data]);
    }
  
    public function addCategory(Request $request){
        // dd($request->parent_id);

        if($request->hasfile('product-image'))
        {
            $file = $request->file('product-image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;           
        }      
        $data = [
            'name' => $request->name,
            'thumbnail' => $filename,
            'parent_id' => $request->parent_id,
        ];
        $category = Categories::create($data);
        $file->move('uploads/category/', $filename);

        return redirect()->back();
    }

    public function deleteCategory(Request $request){
        dd($request->all());
        $id = $request->parent_id;
        Categories::where('id',$id)->delete();
        return redirect()->back();
    }
}
