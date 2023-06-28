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
            return view('beer.cart', compact('user', 'items', 'cart_items'));
        } else {
            return view('auth.login');
        }
    }
}
