<?php

namespace App\Http\Livewire\Admin\User;

use Livewire\Component;
use App\Models\User;

class Edit extends Component
{
    protected $user;

    public function mount(User $user){
        $this->user = $user;
    }

    public function render()
    {
        return view('livewire.admin.user.edit',[
            'user' => $this->user
        ]);
    }
}
