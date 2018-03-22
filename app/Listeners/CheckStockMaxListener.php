<?php

namespace App\Listeners;

use App\Events\ProductUpdating;
use App\Mail\StockGreatherMax;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CheckStockMaxListener
{
    /**
     * Handle the event.
     *
     * @param  ProductUpdating  $event
     * @return void
     */
    public function handle(ProductUpdating $event)
    {
        $product = $event->getProduct();
        if ($product->stock >= $product->stock_max) {
            \Mail::to(env('MAIL_STOCK'))->send(new StockGreatherMax($product));
        }
    }
}
