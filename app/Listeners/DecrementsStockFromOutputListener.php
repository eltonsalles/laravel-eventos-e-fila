<?php

namespace App\Listeners;

use App\Events\StockOutputCreated;
use App\Stock\DecrementsStocks;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class DecrementsStockFromOutputListener
{
    use DecrementsStocks;
    /**
     * Handle the event.
     *
     * @param  StockOutputCreated  $event
     * @return void
     */
    public function handle(StockOutputCreated $event)
    {
        $output = $event->getOutput();
        $product = $output->product;
        $this->decrement($product, $output->quantity);
    }
}
