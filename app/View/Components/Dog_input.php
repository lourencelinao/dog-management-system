<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Dog_input extends Component
{
    public $target;
    public $label;
    public $type;
    public $value;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($target, $label, $type, $value)
    {
        $this->target = $target;
        $this->label1 = $label;
        $this->type = $type;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.dog_input');
    }
}
