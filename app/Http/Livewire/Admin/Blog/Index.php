<?php

namespace App\Http\Livewire\Admin\Blog;

use Livewire\Component;
use App\Models\Blog;

class Index extends Component
{
    public function render()
    {
        $blogs = Blog::latest()->get();
        return view('livewire.admin.blog.index', compact('blogs'));
    }
}
