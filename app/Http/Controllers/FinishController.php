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

    public function Confirmmmmmm(Request $request)
    {
        // ユーザーの情報取得
        $user = Auth::user();

        // カートから選択した商品の情報を取得
        // $cartItems = session('cart'); // 仮にセッションからカートの情報を取得する例とします
        $cart_items = Cart::where('user_id', $user->id)->get();


        $items = []; // 商品情報を格納する空の配列
        $totalQuantity = 0; // 個数の合計の初期値
        $totalPrice = 0; // 価格の合計の初期値

        // カート内の商品情報を取得して配列に追加
        foreach ($cart_items as $cart_item) {
            $product = Cart::find($cart_item['product_id']); // 商品情報をデータベースから取得する例とします

            $item = [
                'name' => $product->name,
                'price' => $product->price,
                'num' => $cart_item['quantity'],
            ];

            $items[] = $item;

            $totalQuantity += $cart_item['quantity'];
            $totalPrice += $product->price * $cart_item['quantity'];
        }
        // ビューを返す
        return view('confirm', compact('items', 'totalQuantity', 'totalPrice'));
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
