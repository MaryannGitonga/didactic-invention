<?php

namespace App\Domains\Item\Jobs;

use App\Domains\Item\Requests\CreateItem;
use Lucid\Units\Job;

class ValidateItemNameJob extends Job
{
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(private CreateItem $request)
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
        return $this->request->validated();
    }
}
