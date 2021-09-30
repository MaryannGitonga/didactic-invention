<?php

namespace App\Http\Controllers;

use App\Features\ListItemsFeature;
use App\Features\RenderViewFeature;
use App\Features\SaveItemFeature;
use Lucid\Units\Controller;

class ItemController extends Controller
{
    public function index()
    {
        return $this->serve(RenderViewFeature::class, [
            'view' => 'create',
        ]);
    }

    public function create()
    {
        return $this->serve(SaveItemFeature::class);
    }

    public function show()
    {
        return $this->serve(ListItemsFeature::class);
    }
}
