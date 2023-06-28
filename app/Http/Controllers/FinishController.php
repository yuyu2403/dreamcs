<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Cart;
use App\Models\Category;
use App\Models\User;




class FinishController extends Controller
{
    public function Confirm()
    {
        // カートから選択した商品の情報を取得
        $cartItems = session('cart'); // 仮にセッションからカートの情報を取得する例とします

        $items = []; // 商品情報を格納する空の配列
        $totalQuantity = 0; // 個数の合計の初期値
        $totalPrice = 0; // 価格の合計の初期値

        // カート内の商品情報を取得して配列に追加
        foreach ($cartItems as $cartItem) {
            $product = Cart::find($cartItem['product_id']); // 商品情報をデータベースから取得する例とします

            $item = [
                'name' => $product->name,
                'price' => $product->price,
                'num' => $cartItem['quantity'],
            ];

            $items[] = $item;

            $totalQuantity += $cartItem['quantity'];
            $totalPrice += $product->price * $cartItem['quantity'];
        }

        // ビューを返す
        return view('confirm', compact('items', 'totalQuantity', 'totalPrice'));
    }
}
