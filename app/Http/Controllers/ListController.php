<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD

use App\Models\UploadImage;
use App\Models\List;

=======
App\Models\List;
>>>>>>> origin/main



class ListController extends Controller
{
    public function list(Request $request){
        $keyword = $request->input('keyword');
        $query = List::query();
        if ($request->has('check')) {
            /* Contact モデルのオブジェクトを作成 */
            $id = $request->id;
            $new_contact = List::find($id);
            /* リクエストで渡された値を設定する */
            $new_contact->check = $request->check;
            /* データベースに保存 */
            $new_contact->save();
            /* 完了画面を表示する */
            return redirect('/beer/list');
        }
        if (!empty($keyword)) {
            $query->where('name', 'LIKE', "%{$keyword}%")
                ->orWhere('tel', 'LIKE', "%{$keyword}%")
                ->orWhere('address', 'LIKE', "%{$keyword}%")
                ->orWhere('point', 'LIKE', "%{$keyword}%");
        }
        $contacts = $query->get();
        return view('beer.list', compact('contacts', 'keyword'));
    }

    public function list(Request $request){
        return view('beer.list', ['products' => $products]);
    }

}
