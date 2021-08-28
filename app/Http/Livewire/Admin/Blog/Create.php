<?php

namespace App\Http\Livewire\Admin\Blog;

use Livewire\Component;
use App\Models\Blog;
use Livewire\WithFileUploads;


class Create extends Component
{
    use WithFileUploads;

    public $photo;

    public $blog = [
        'title' => null,
        'slug' => null,
        'meta' => null,
        'notes' => null,
        'body' => null,
        'status' => false,
    ];


    public function store()
    {
        if ($this->photo){
            $this->blog['photo'] = $this->photo->storePublicly('blog', ['disk' => 'public']);
        }
        Blog::create($this->blog);

        $this->emit('alertSuccess','Blog created');
        $this->emitUp('back');
    }


    public function render()
    {
        return view('livewire.admin.blog.create');
    }
}
