<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){


          $cart = Cart::find(1);

          return view("index",compact('cart'));
    }
}
