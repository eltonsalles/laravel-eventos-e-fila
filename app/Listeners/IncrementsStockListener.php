<?php

namespace App\Listeners;

use App\Events\StockEntryCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class IncrementsStockListener
{
    /**
     * Handle the event.
     *
     * @param  StockEntryCreated  $event
     * @return void
     */
    public function handle(StockEntryCreated $event)
    {
        $entry = $event->getEntry();
        $product = $entry->product;
        $product->stock = $product->stock + $entry->quantity;
        $product->save();
    }
}
