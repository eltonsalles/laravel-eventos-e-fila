<?php

namespace App;

use App\Events\ProductUpdating;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $events = [
        'updating' => ProductUpdating::class,
    ];
}
