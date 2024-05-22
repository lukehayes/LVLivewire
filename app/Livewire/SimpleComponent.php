<?php

namespace App\Livewire;

use Livewire\Component;

class SimpleComponent extends Component
{
    public $posts;

    public function render()
    {
        return view('livewire.simple-component');
    }

    public function mount()
    {
        $this->posts = \App\Models\Post::all();
    }
}
