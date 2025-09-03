<?php

namespace BlissJaspis\Myui\App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    public string $variant;
    public string $size;

    /**
     * Create a new component instance.
     */
    public function __construct(
        string $variant = 'default',
        string $size = 'default'
    ) {
        $this->variant = $variant;
        $this->size = $size;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('myui::components.button');
    }
}
