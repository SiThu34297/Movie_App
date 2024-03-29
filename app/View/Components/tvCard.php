<?php

namespace App\View\Components;

use Illuminate\View\Component;

class tvCard extends Component
{
    protected $tvshow;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($tvshow)
    {
        $this->tvshow = $tvshow;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tv-card');
    }
}
