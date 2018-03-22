<?php

namespace App\Listeners;

use App\Events\ProductUpdated;
use App\Mail\StockGreatherMax;
use App\Mail\StockLessMin;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CheckStockMinListener
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
        if ($product->stock < ($product->stock_max * 0.10)) {
            \Mail::to(env('MAIL_STOCK'))->send(new StockLessMin($product));
        }
    }
}
