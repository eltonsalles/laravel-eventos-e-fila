<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\StockEntryCreated'  => [
            'App\Listeners\IncrementsStockListener',
        ],
        'App\Events\StockOutputCreated' => [
            'App\Listeners\DecrementsStockListener',
        ],
        'App\Events\ProductUpdated'     => [
            'App\Listeners\CheckStockMaxListener',
            'App\Listeners\CheckStockMinListener',
        ],
        'App\Events\OrderProductsSaveCompleted' => [
            'App\Listeners\CalculateTotalOrderListener',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
