<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\str;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function index(){
        $categories=Category::all();
        return view('admin.category.index', compact('categories'));
    }
    public function create(){
        return view('admin.category.create');
    }
    public function store(Request $request){

        $newCategory=new Category;
        $newCategory->title=$request->title;
        $newCategory->description=$request->description;
        $newCategory->slug=Str::slug($request->slug);

        if($request->hasFile('image')){
        $file=$request->file('image');
        $filename=time().'.'.$file->getClientOriginalExtension();
        $file->move('uploads/category/',$filename);
        $newCategory->image=$filename;
    }
        $newCategory->meta_title=$request->meta_title;
        $newCategory->meta_description=$request->meta_description;
        $newCategory->save();
       return redirect()->back()->with('success','Category created successfully');
    }

    public function edit($id){
        $category=Category::find($id);
        if($category){
        return view('admin.category.edit',compact('category'));
    }
    else{
        return redirect('admin/categories')->back()->with('error','Category not found!');
    }
}
    public function update(request $request,$id){
        $category=Category::find($id);

        if($category){
        $category->title=$request->title;
        $category->description=$request->description;
        $category->slug=Str::slug($request->slug);
        $destination='uploads/category/'.$category->image;
        if(File::exists($destination)){
            File::delete($destination);
            }   
        if($request->hasFile('image')){
        $file=$request->file('image');
        $filename=time().'.'.$file->getClientOriginalExtension();
        $file->move('uploads/category/',$filename);
        $category->image=$filename;
    }
        $category->meta_title=$request->meta_title;
        $category->meta_description=$request->meta_description;
        $category->update();
       return redirect()->back()->with('success','Category updated successfully');
    }
     else{
            return redirect()->back()->with('error','Category not found!');
        }

    }

    public function destroy($id){
        $category=Category::find($id);
        if($category){
            $destination='uploads/category/'.$category->image;
            if(File::exists($destination)){
                File::delete($destination);
                }       

                $category->delete();
                return redirect()->back()->with('success','Category deleted successfully!');        
                }
                else{
            return redirect()->back()->with('error','Category not found!');
        }

    }
}
