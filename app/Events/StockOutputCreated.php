<?php

namespace App\Events;

use App\StockOutput;

class StockOutputCreated
{
    /**
     * @var StockOutput
     */
    private $output;

    /**
     * StockOutputCreated constructor
     *
     * @param StockOutput $output
     */
    public function __construct(StockOutput $output)
    {
        $this->output = $output;
    }

    /**
     * @return StockOutput
     */
    public function getOutput()
    {
        return $this->output;
    }
}
