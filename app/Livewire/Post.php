<?php

namespace App\Livewire;

use Livewire\Component;

class Post extends Component
{
    public $id;
    public $title;

    public function render()
    {
        return view('livewire.post');
    }

    public function mount($id)
    {
        $post = \App\Models\Post::find($id);

        $this->title = $post->title;
    }
}
