<?php

namespace App\Http\Livewire\Admin\Blog;

use Livewire\Component;
use App\Models\Blog;

class Edit extends Component
{

    public $blog;
    public $confirmingDeletion = false;

    public function update()
    {
        $blog = Blog::where('id', $this->blog['id'])->firstOrFail();
        $blog->update(
            collect($this->blog)->only('title','slug','meta','notes','body','status')->toArray()
        );
        $this->emit('alertSuccess','Blog updated');
    }

    public function destroy()
    {
        $blog = Blog::destroy($this->blog['id']);
        $this->emit('alertSuccess','Blog deleted');
        $this->emitUp('back');
    }

    public function render()
    {
        return view('livewire.admin.blog.edit');
    }
}
