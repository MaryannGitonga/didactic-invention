<?php

namespace App\Domains\Item\Jobs;

use App\Data\Item;
use Lucid\Units\Job;

class SaveItemJob extends Job
{
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(private string $name)
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
        Item::create([
            'name' => $this->name
        ]);
    }
}
