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

        $this->validate($request, [
            'name' => ['required', 'min:2'],

            'detail'  => ['required'],

            'price'  => ['required'],

            'stock'  => ['required'],

            'category_id'  => ['required']
        ]);

        if ($request->has('back')) {
            return redirect('/add')->withInput();
        }


        if ($request->has('send')) {
            /* Contact モデルのオブジェクトを作成 */
            $new_item = new Item();

            /* リクエストで渡された値を設定する */
            $new_item->name = $request->name;
            $new_item->detail = $request->detail;
            $new_item->price = $request->price;
            $new_item->stock = $request->stock;
            $new_item->category_id = $request->category;
            /* データベースに保存 */
            $new_item->save();

            /* 完了画面を表示する */
            return redirect('/beer/list');
        }
        return view('beer.confirm', compact('request'));
    }
}
