<?php

namespace BlissJaspis\Myui\App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public string $variant;

    public function __construct(string $variant = 'default')
    {
        $this->variant = $variant;
    }

    public function render()
    {
        return view('myui::components.alert');
    }
}
