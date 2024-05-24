<?php

namespace App\Livewire;

use Livewire\Component;

class PostList extends Component
{
    public $posts;

    public function mount()
    {
        $this->posts = \App\Models\Post::all();
    }

    public function render()
    {

        return <<<'HTML'
        <div class='container mx-auto'>

            <p class='my-6'>Post List: </p>

            <a href="/login" class='bg-indigo-600 p-3 rounded text-white hover:bg-indigo-700'>Login</a>

            @foreach($posts as $post)
                @livewire('post', ['id' => $post->id])
            @endforeach()

        </div>
        HTML;
    }
}
