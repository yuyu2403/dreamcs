<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Cart;
use App\Models\Category;
use App\Models\User;




class FinishController extends Controller
{
    public function delete($id)
    {
        $cart_to_delete = Cart::find($id);
        $cart_to_delete->delete();
        // return view('beer.cart', compact('items'));
        return redirect('/cart');
    }


    public function confirm(Request $request)
    {
        $user = Auth::user();
        $items = Item::all();
        $cart_items = Cart::where('user_id', $user->id)->get();

        if ($request->has('back')) {
            return redirect('/cart');
        }

        // 購入完了しますボタンおしたら
        if ($request->has('send')) {
            $user = Auth::user();
            // $items = Item::all();
            $cart_items = Cart::where('user_id', $user->id)->get();

            foreach ($cart_items as $cart_item) {
                $item = Item::where('id', $cart_item->item_id)->first();
                $item->decrement('stock', $cart_item->num);
                $cart_item->delete();
            }
            return view('beer.finish');
        }
        return view('beer.confirm2', compact('user', 'items', 'cart_items'));
    }
}
