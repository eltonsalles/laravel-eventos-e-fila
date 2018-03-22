<?php

namespace App\Listeners;

use App\Events\OrderProductCreated;
use App\Stock\DecrementsStocks;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class DecrementStockFromCheckoutListener
{
    use DecrementsStocks;

    /**
     * Handle the event.
     *
     * @param  OrderProductCreated  $event
     * @return void
     */
    public function handle(OrderProductCreated $event)
    {
        $orderProduct = $event->getProduct();
        $this->decrement($orderProduct->product, $orderProduct->quantity);
    }
}
