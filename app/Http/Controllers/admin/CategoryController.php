<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
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
}
