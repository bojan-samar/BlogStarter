<?php

namespace App\Http\Livewire;

use App\Mail\Misc\ContactUsEmail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{
    public $step = 1;
    public $leadModel = null;

    public $state = [
        'name' => null,
        'email' => null,
        'message' => null,
        'hahaha' => null,
    ];

    protected $rules = [
        'state.email' => 'required|email|max:100',
        'state.message' => 'required|string|max:500',
    ];

    protected $validationAttributes = [
        'state.name' => 'name',
        'state.hahaha' => 'string|nullable',
        'state.email' => 'email',
    ];

    public function submit(){
        $this->validate();

        if ($this->state['hahaha']) {
            $this->state['message'] = 'Bot submission';
            Mail::raw('Bot tried filling out the contact form.', function ($message) {
                $message->to(config('mail.from.address'))->subject('Bot Contact');
            });
            return redirect('/');
        }

        Mail::to( config('mail.from.address') )->send(new ContactUsEmail($this->state));

        $this->state = [
            'name' => '',
            'email' => '',
            'message' => '',
        ];

        $this->emit('submitted');
    }


    public function render()
    {
        return view('livewire.contact-form');
    }
}
