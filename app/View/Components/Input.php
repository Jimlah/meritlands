<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{

    public $name;
    public $type;
    public $placeholder;
    public $value;
    public $label;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $label, $error, $type='text', $placeholder='', $value='')
    {
        $this->name = $name;
        $this->label = $label;
        $this->type = $type;
        $this->placeholder = $placeholder;
        $this->value = $value;
        $this->error = $error;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input');
    }
}