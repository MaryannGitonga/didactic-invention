<?php

namespace App\Features;

use App\Domains\Item\Jobs\SaveItemJob;
use App\Domains\Item\Jobs\ValidateItemNameJob;
use App\Domains\Item\Requests\CreateItem;
use Illuminate\Http\Request;
use Lucid\Units\Feature;

class SaveItemFeature extends Feature
{
    public function handle(CreateItem $request)
    {
        $validated = $request->validated();

        $this->run(SaveItemJob::class, [
            'name' => $validated['name']
        ]);

    }
}
