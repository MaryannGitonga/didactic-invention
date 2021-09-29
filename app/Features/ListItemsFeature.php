<?php

namespace App\Features;

use App\Domains\Item\Jobs\ListItemsJob;
use Lucid\Units\Feature;

class ListItemsFeature extends Feature
{
    public function handle()
    {
        $items = $this->run(ListItemsJob::class);

        return view('show', compact('items'));

    }
}
