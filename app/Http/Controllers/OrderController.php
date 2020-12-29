<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index() {

        $orders = Order::all();

        return view('admin.orders.list', compact('orders'));
    }

    public function orderDetail($id) {

        $order = Order::findOrFail($id);
        $books = Book::all();

        return view('admin.orders.orderDetail', compact('books', 'order'));
    }

    public function confirm($id) {

        $order = Order::findOrFail($id);


        if($order->status == 1) {
            $order->status = 2;
            $order->save();


            foreach ($order->books as $item) {
                $book = Book::find($item->id);
                $book->inStock -= $item->pivot->quantity_order;
                $book->sold += $item->pivot->quantity_order;
                $book->save();
            }

            $message = 'Successfully Confirm This Order!';
            return redirect()->route('orders.index')->with('success',$message);
        } else {
            $message = 'This Order Has Been Confirm!';
            return redirect()->route('orders.index')->with('info',$message);
        }
    }
}

