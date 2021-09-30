<?php

namespace App\Features;

use Illuminate\Http\Request;
use Lucid\Units\Feature;

class RenderViewFeature extends Feature
{
    public function __construct(private string $view, private bool $redirect = false)
    {

    }

    public function handle()
    {
        return (!$this->redirect) ? view($this->view) : redirect()->route($this->view);
    }
}
