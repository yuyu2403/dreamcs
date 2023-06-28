<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;




class AddController extends Controller
{
    //
    public function add(Request $request, $category_id)
    {
        $all_categorys = Category::all();
        return view('beer.add');
    }
}
