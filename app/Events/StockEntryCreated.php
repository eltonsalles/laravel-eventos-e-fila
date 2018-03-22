<?php

namespace App\Events;

use App\StockEntry;

class StockEntryCreated
{
    /**
     * @var StockEntry
     */
    private $entry;

    /**
     * StockEntryCreated constructor
     *
     * @param StockEntry $entry
     */
    public function __construct(StockEntry $entry)
    {
        //
        $this->entry = $entry;
    }

    /**
     * @return StockEntry
     */
    public function getEntry()
    {
        return $this->entry;
    }
}
