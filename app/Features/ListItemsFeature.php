<?php

namespace App\Features;

use App\Domains\Item\Jobs\DisplayItemsJob;
use Lucid\Units\Feature;

class ListItemsFeature extends Feature
{
    public function handle()
    {
        return $this->run(DisplayItemsJob::class);

    }
}
