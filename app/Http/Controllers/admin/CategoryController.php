<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryStoreRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::paginate(15);
        return view('AdminPanel.categories.index',
        [
            'title' => 'Categories',
            'active' => 'categories',
            'breadcrumbs' => [
                [
                    'url' => '',
                    'text' => 'Categories',
                ]
            ]
        ], compact('categories'));
    }
    public function store(CategoryStoreRequest $request){
        $category = Category::create($request->validated());
        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = $image->hashName();
            $image->move(public_path('uploads/categories/' . $category->id), $filename);
            $category->image = $filename;
            $category->update();
        }
        if($category){
            return redirect()->route('category.index')
                            ->with('success','تم حفظ البيانات بنجاح');
        }else{
            return redirect()->back()
                            ->with('failed','لم نستطع حفظ البيانات');
        }
    }
}
