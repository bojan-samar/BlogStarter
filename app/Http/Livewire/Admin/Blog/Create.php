<?php

namespace App\Http\Livewire\Admin\Blog;

use Livewire\Component;
use App\Models\Blog;

class Create extends Component
{

    public $blog = [
        'title' => '',
        'slug' => '',
        'meta' => '',
        'notes' => '',
        'body' => '',
        'status' => false,
    ];


    public function store()
    {
        Blog::create($this->blog);
        $this->emit('alertSuccess','Blog created');
        $this->emitUp('back');
    }


    public function render()
    {
        return view('livewire.admin.blog.create');
    }
}
