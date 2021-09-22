<?php

namespace App\View\Components\Misc;

use Illuminate\View\Component;

class Badge extends Component
{
    public $css;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($css)
    {
        $this->css = $css;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.misc.badge');
    }
}
