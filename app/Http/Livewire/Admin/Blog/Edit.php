<?php

namespace App\Http\Livewire\Admin\Blog;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use App\Models\Blog;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;
    public $blog;
    public $confirmingDeletion = false;
    public $photo;

    function deletePhoto(){
        Storage::disk('public')->delete($this->blog['photo']);
        $this->blog['photo'] = null;
        Blog::where('id', $this->blog['id'])->update(['photo' => null]);
    }

    public function update()
    {
        $blog = Blog::where('id', $this->blog['id'])->firstOrFail();
        if ($this->photo){
            $this->blog['photo'] = $this->photo->storePublicly('blog', ['disk' => 'public']);
        }
        $blog->update(
            collect($this->blog)->only('title','slug','meta','notes','body','status','photo')->toArray()
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
