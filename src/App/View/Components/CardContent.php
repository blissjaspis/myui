<?php

namespace BlissJaspis\Myui\App\View\Components;

use Illuminate\View\Component;

class CardContent extends Component
{
    public function __construct() {}

    public function render()
    {
        return view('myui::components.card-content');
    }
}
