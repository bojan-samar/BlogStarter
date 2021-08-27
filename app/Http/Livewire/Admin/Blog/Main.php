<?php

namespace App\Http\Livewire\Admin\Blog;

use Livewire\Component;
use App\Models\Blog;

class Main extends Component
{

    public $step = 'index';
    public $editing = null;

    protected $listeners = ['back', 'edit'];

    public function back(){
        $this->step = 'index';
    }

    public function edit($id){
        $blog = Blog::where('id', $id)->firstOrFail();
        $this->editing = $blog->toArray();
        $this->step = 'edit';
    }

    public function render()
    {
        return view('livewire.admin.blog.main');
    }
}
