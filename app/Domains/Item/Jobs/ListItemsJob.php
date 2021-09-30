<?php

namespace App\Domains\Item\Jobs;

use App\Data\Item;
use Lucid\Units\Job;

class ListItemsJob extends Job
{
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        return Item::all();
    }
}
