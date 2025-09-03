<?php

namespace BlissJaspis\Myui\App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public string $type;
    public string $placeholder;
    public string $value;

    /**
     * Create a new component instance.
     */
    public function __construct(
        string $type = 'text',
        string $placeholder = '',
        string $value = ''
    ) {
        $this->type = $type;
        $this->placeholder = $placeholder;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('myui::components.input');
    }
}
