<?php

namespace App\Http\Livewire\Admin\User;

use Livewire\Component;
use App\Models\User;

class Index extends Component
{
    public $search = '';

    public function render()
    {
        $users = User::where('name', 'like', '%'. $this->search .'%')->get();
        return view('livewire.admin.user.index',compact('users'));
    }
}
