<?php

namespace App\Stock;


use App\Product;

trait DecrementsStocks
{
    public function decrement(Product $product, $quantity)
    {
        $product->stock = $product->stock - $quantity;
        $product->save();
    }
}