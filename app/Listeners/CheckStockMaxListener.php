<?php

namespace App\Listeners;

use App\Events\ProductUpdated;
use App\Mail\StockGreatherMax;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CheckStockMaxListener
{
    /**
     * Handle the event.
     *
     * @param  ProductUpdated $event
     *
     * @return void
     */
    public function handle(ProductUpdated $event)
    {
        $product = $event->getProduct();
        if ($product->stock >= $product->stock_max) {
            \Mail::to(env('MAIL_STOCK'))->queue(new StockGreatherMax($product));
        }
    }
}
