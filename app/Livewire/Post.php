<?php

namespace App\Livewire;

use Livewire\Component;

class Post extends Component
{
    public $post;

    public function render()
    {
        return view('livewire.post');
    }

    public function mount()
    {
        //$this->post = \App\Models\Post::first();
    }
}
