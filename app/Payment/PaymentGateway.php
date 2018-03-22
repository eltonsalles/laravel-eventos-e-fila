<?php

namespace App\Payment;

use App\Events\PaymentCompleted;
use App\Order;

class PaymentGateway
{
    public function payment(Order $order)
    {
        \Log::info("Inicio do processo de pagamento da ordem: {$order->id}");
        sleep(15);
        \Log::info("Fim do processo de pagamento da ordem: {$order->id}");

        event(new PaymentCompleted($order));
    }
}