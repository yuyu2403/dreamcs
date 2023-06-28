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
            'name' => ['required', 'min:2', 'max:100'],

            'tel'  => ['required'],

            'address'  => ['required'],

            'point'  => ['required']
        ]);
        if ($request->has('back')) {
            return redirect('/MessageBoard')->withInput();
        }
        if ($request->has('send')) {
            /* Contact モデルのオブジェクトを作成 */
            $new_contact = new Contact();

            /* リクエストで渡された値を設定する */
            $new_contact->name = $request->name;
            $new_contact->tel = $request->tel;
            $new_contact->address = $request->address;
            $new_contact->point = $request->point;
            /* データベースに保存 */
            $new_contact->save();

            /* 完了画面を表示する */
            return redirect('/MessageBoard/complete');
        }
        return view('MessageBoard.confirm', compact('request'));
    }
}
