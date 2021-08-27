<?php

namespace App\Http\Livewire\Admin\User;

use Livewire\Component;
use App\Models\User;

class Main extends Component
{
    protected $step ='index';
    protected $editing = null;

    protected $listeners = ['back','edit'];

    public function back(){
        $this->step = 'index';
    }

    public function edit(User $user){
        $this->editing = $user->toArray();
        $this->step = 'edit';
    }

    public function render()
    {
        return view('livewire.admin.user.main', [
            'step' => $this->step,
            'editing' => $this->editing,
        ]);
    }
}
