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

    protected $validationAttributes = [
        'blog.title' => 'title',
        'blog.slug' => 'slug',
        'blog.meta' => 'meta',
        'blog.notes' => 'notes',
        'blog.body' => 'body',
        'blog.status' => 'status',
    ];

    public function store()
    {
        $this->validate([
            'blog.title' => 'required|string|min:5|max:191',
            'blog.slug' => 'required|string',
            'blog.meta' => 'required|string|min:5|max:191',
            'blog.body' => 'required|string|min:5',
        ]);

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
