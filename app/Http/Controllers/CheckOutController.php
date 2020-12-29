<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCheckOut;
use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckOutController extends Controller
{
    public function formCheckOut() {
        $cart = session('cart');

//      session()->forget('cart');
        return view('website.layout.checkOut', compact('cart'));
    }

    public function checkOut(CreateCheckOut $request) {

        $cart = session('cart');

        $customer = new Customer();

        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        $customer->address = $request->input('address');
        $customer->city = $request->input('city');
        $customer->phone = $request->input('phone');
        $customer->save();

        $order = new Order();
        $order->customer_id = $customer->id;
        $order->status = 1;
        $order->save();

        foreach ($cart->items as $item) {

            $book_id = $item['product']->id;
            $order_id = $order->id;
            $quantity_order = $item['totalQty'];
            $price_each = $item['totalPrice'];

            DB::table('order_details')->insert([
                'book_id' => $book_id,
                'order_id' => $order_id,
                'quantity_order' => $quantity_order,
                'price_each' => $price_each,
            ]);
        }

        session()->forget('cart');

        $message = 'Order Successfully!';

        return redirect()->route('home.index')->with('success',$message);

    }
}
