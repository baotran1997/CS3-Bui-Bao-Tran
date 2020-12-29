<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Models\Book;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function addToCart($idProduct) {

        $product = Book::findOrFail($idProduct);

        $oldCart = session('cart');

        $cart = new Cart($oldCart);

        $cart->add($product);

        session()->put('cart', $cart);

        return back();

    }

    public function showCart() {

        $cart = session('cart');
//    dd($cart);
//        session()->forget('cart');
        return view('website.layout.showCart', compact('cart'));
    }

    public function decreaseCart($idProduct) {
        $product = Book::findOrFail($idProduct);
        $oldCart = session('cart');
        $cart = new Cart($oldCart);

        $cart->decrease($product);
        session()->put('cart', $cart);
        return back();
    }

    public function removeByOne($idProduct) {
        $product = Book::findOrFail($idProduct);
        $oldCard = session('cart');
        $cart = new Cart($oldCard);
        $cart->removeByOne($product);

        if (count($cart->items) > 0) {
            session()->put('cart',$cart);
        } else {
            session()->forget('cart');
        }

        return back();

    }

    public function removeAll() {
        session()->forget('cart');
        return back();
    }


}
