<?php

namespace App\Http\Controllers;

use App\Features\ListItemsFeature;
use App\Features\SaveItemFeature;
use Lucid\Units\Controller;

class ItemController extends Controller
{
    public function index()
    {
        return view('create');
    }

    public function create()
    {
        $this->serve(SaveItemFeature::class);
        return back();
    }

    public function show()
    {
        $items = $this->serve(ListItemsFeature::class);
        return view('show', compact('items'));
    }
}
