<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;




class AddconfirmController extends Controller
{
    //
    public function addconfirm(Request $request)
    {
        // dd($request->all());

        $this->validate($request, [
            'name' => ['required', 'min:2'],

            'detail'  => ['required'],

            'price'  => ['required'],

            'stock'  => ['required']
        ]);
        if ($request->has('back')) {
            return redirect('/MessageBoard')->withInput();
        }
        if ($request->has('send')) {
            /* Contact モデルのオブジェクトを作成 */
            $new_contact = new Contact();

            /* リクエストで渡された値を設定する */
            $new_contact->name = $request->name;
            $new_contact->detail = $request->detail;
            $new_contact->price = $request->price;
            $new_contact->stock = $request->stock;
            /* データベースに保存 */
            $new_contact->save();

            /* 完了画面を表示する */
            return redirect('/beer/list');
        }
        return view('beer.confirm', compact('request'));
    }
}
