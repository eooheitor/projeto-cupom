<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Grid extends Component
{
    public $grid;

    public function __construct($grid)
    {
        $this->grid = $grid;
    }

    public function render()
    {
        return view('components.grid');
    }
}
