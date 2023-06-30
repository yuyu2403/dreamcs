<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Cart;
use App\Models\Category;
use App\Models\User;




class CartController extends Controller
{
    public function cart()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $items = Item::all();
            $cart_items = Cart::where('user_id', $user->id)->get();
            // foreach ($cart_items as $cart_item) {
            //     $item2 = Item::find($cart_item->item_id);
            //     $money = $cart_item->num * $item2->price;
            // }
            // $totalMoney=$money;

            return view('beer.cart', compact('user', 'items', 'cart_items'));
        } else {
            return view('auth.login');
        }
    }
    public function delete($id)
    {
        $cart_to_delete = Cart::find($id);
        $cart_to_delete->delete();
        // return view('beer.cart', compact('items'));
        return redirect('/cart');
    }
    public function update(Request $request, $id)
    {

        $cart_to_update = Cart::find($id);
        $cart_to_update->num = $request->num;
        $cart_to_update->save();

        return redirect('/cart');
    }
}
