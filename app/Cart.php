<?php

namespace App;

class Cart {

    public $items = [];
    public $totalPrice = 0;
    public $totalQty = 0;

    public function __construct($oldCart)
    {
        if($oldCart) {
            $this->items = $oldCart->items;
            $this->totalPrice = $oldCart->totalPrice;
            $this->totalQty = $oldCart->totalQty;
        }
    }

    public function add($product) {

        $storeItem = [
            "product" => $product,
            "totalQty" => 0,
            "totalPrice" => 0,
        ];

        if(array_key_exists($product->id, $this->items)) {
            $storeItem = $this->items[$product->id];
        }

        $storeItem['totalQty'] += 1;
        $storeItem['totalPrice'] += $product->price;

        $this->items[$product->id] = $storeItem;
        $this->totalQty++;
        $this->totalPrice += $product->price;

    }

    public function decrease ($product) {
        $storeItem = [
            "product" => $product,
            "totalQty" => 0,
            "totalPrice" => 0,
        ];

        $storeItem = $this->items[$product->id];

        $storeItem['totalQty'] -= 1;
        $storeItem['totalPrice'] -= $product->price;

        $this->items[$product->id] = $storeItem;
        $this->totalQty--;
        $this->totalPrice -= $this->items[$product->id]['product']->price;

        if ($storeItem['totalQty'] == 0) {
            unset($this->items[$product->id]);
        }
    }

    public function removeByOne($product) {

        if(array_key_exists($product->id, $this->items)) {
            $deleteItem = $this->items[$product->id];

            $this->totalQty -= $deleteItem['totalQty'];
            $this->totalPrice -= $deleteItem['totalPrice'];

            unset($this->items[$product->id]);
        }
    }

}
