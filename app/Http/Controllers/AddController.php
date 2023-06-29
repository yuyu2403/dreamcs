<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Models\Category;


class AddController extends Controller
{

    public function add()

    {
        $all_categories = Category::all();
        return view('beer.add', compact('all_categories'));
    }

    public function addconfirm(Request $request)
    {
        // dd($request->all());

        $category = Category::find($request->category_id);
        $this->validate($request, [
            'name' => ['required', 'min:2'],

            'detail'  => ['required'],

            'price'  => ['required'],

            'stock'  => ['required'],

            'category_id'  => ['required']
        ]);


        return view('beer.addconfirm', compact('request', 'category'));
    }

    public function send_or_back(Request $request)
    {
        if ($request->has('back')) {
            return redirect('/add')->withInput();
        }

        if ($request->has('send')) {
            $new_item = new Item();

            $new_item->name = $request->name;
            $new_item->detail = $request->detail;
            $new_item->price = $request->price;
            $new_item->stock = $request->stock;
            $new_item->category_id = $request->category_id;
            $new_item->filename = $request->filename;
            $new_item->filepath = $file_path;

            $new_item->save();

            return redirect('/list');
            // return view('beer.list');

        }
    }
}
