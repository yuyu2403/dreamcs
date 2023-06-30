<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


use App\Models\UploadImage;
use App\Models\Item;
use App\Models\Contact;
use App\Models\Cart;
use App\Models\Category;
use App\Models\User;





class ListController extends Controller
{
    // public function list(Request $request){
    //     $keyword = $request->input('keyword');
    //     $query = Item::query();
    //     if ($request->has('check')) {
    //         /* Contact モデルのオブジェクトを作成 */
    //         $id = $request->id;
    //         $new_contact = List::find($id);
    //         /* リクエストで渡された値を設定する */
    //         $new_contact->check = $request->check;
    //         /* データベースに保存 */
    //         $new_contact->save();
    //         /* 完了画面を表示する */
    //         return redirect('/beer/list');
    //     }
    //     if (!empty($keyword)) {
    //         $query->where('name', 'LIKE', "%{$keyword}%")
    //             ->orWhere('tel', 'LIKE', "%{$keyword}%")
    //             ->orWhere('address', 'LIKE', "%{$keyword}%")
    //             ->orWhere('point', 'LIKE', "%{$keyword}%");
    //     }
    //     $contacts = $query->get();
    //     return view('beer.list', compact('contacts', 'keyword'));
    // }

    public function list(Request $request)
    {
        $query = Item::query();
        if (!empty($request)) {
            $search = $request->search;
            $query->where('name', 'LIKE', "%{$search}%");
        }
        $all_items = $query->get();
        return view('beer.list', compact('all_items', 'search'));

        // return view('beer.list', ['products' => $products]);
    }




    public function add_cart(Request $request)
    {
        if ($request->has('add_cart')) {
            $new_cart = new Cart();
            $user = Auth::user();
            /* リクエストで渡された値を設定する */
            $new_cart->item_id = $request->add_cart_beer;
            $new_cart->user_id = $user->id;
            $new_cart->num = 1;
            $new_cart->save();


            return redirect('/cart');
        }
    }
}
