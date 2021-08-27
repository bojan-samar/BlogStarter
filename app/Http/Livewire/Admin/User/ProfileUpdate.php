<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Livewire\Component;

class ProfileUpdate extends Component
{
    public $state = [];
    public $user;

    public function mount(User $user)
    {
        $this->state = $user->only('id','name','email','role');
    }

    public function updateProfileInformation(){
        Validator::make($this->state, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($this->state['id'])],
            'role' => ['required', 'string', 'max:255'],
        ])->validateWithBag('updateProfileInformation');

        $this->user->forceFill([
            'name' => $this->state['name'],
            'email' => $this->state['email'],
            'role' => $this->state['role'],
        ])->save();

        $this->emit('alertSuccess','User successfully updated');
    }

    public function render()
    {
        return view('livewire.admin.user.profile-update');
    }
}
