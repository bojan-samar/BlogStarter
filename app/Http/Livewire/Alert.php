<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Alert extends Component
{
    public $message;

    protected $listeners = ['alertSuccess', 'alertError'];

    public function alertSuccess($message){
        $this->message = $message;
        $this->dispatchBrowserEvent('alert-success');
    }

    public function alertError($message){
        $this->message = $message;
        $this->dispatchBrowserEvent('alert-error');
    }

    public function render()
    {
        return view('livewire.alert');
    }
}
