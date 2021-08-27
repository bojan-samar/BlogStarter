<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component
{
    public $class;

    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function __construct($class = '')
    {
        $this->class = $class;
    }

    public function render()
    {
        return view('layouts.app');
    }
}
