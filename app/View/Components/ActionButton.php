<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ActionButton extends Component
{
    public $show;
    public $edit;
    public $delete;
    public $index;
    public $slug;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($show, $edit, $delete, $index, $slug)
    {
        $this->show = $show;
        $this->edit = $edit;
        $this->delete = $delete;
        $this->index = $index;
        $this->slug = $slug;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.action-button');
    }
}