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

            'category_id'  => ['required'],
        ]);

        $request->validate([
            'image' => 'required|max:1024|mimes:jpg,jpeg,png,gif'
        ]);

        $imageName = $request->file('image')->getClientOriginalName();
        $extension = $request->file('image')->getClientOriginalExtension();

        // 新しいファイル名を生成（形式：元のファイル名_ランダムの英数字.拡張子）
        $newImageName = pathinfo($imageName, PATHINFO_FILENAME) . "_" . uniqid() . "." . $extension;
        $request->file('image')->move(public_path() . "/img/tmp", $newImageName);
        $image = "/img/tmp/" . $newImageName;
        // $file_path = $request->file('image')->store('images', 'public');

        return view('beer.addconfirm', compact('request', 'category', 'image', 'newImageName'));
        // return view('beer.addconfirm', compact('request', 'category', 'file_path', 'image', 'newImageName'));
    }

    public function send_or_back(Request $request,)
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
            $new_item->filepath = $request->image;
            // $new_item->filename = $request->file('image')->getClientOriginalName();
            // $new_item->filepath = $request->file('image')->store('images', 'public');
            $new_item->save();




            // レコードを挿入したときのIDを取得
            $lastInsertedId = $new_item->id;

            // ディレクトリを作成
            if (!file_exists(public_path() . "/img/" . $lastInsertedId)) {
                mkdir(public_path() . "/img/" . $lastInsertedId, 0777);
            }

            // 一時保存から本番の格納場所へ移動
            rename(public_path() . "/img/tmp/" . $request->image, public_path() . "/img/" . $lastInsertedId . "/" . $request->image);

            // 一時保存の画像を削除
            // \File::cleanDirectory(public_path() . "/img/tmp");


            return redirect('/list');
        }
    }
}
