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

            <p>Post List: </p>

            @foreach($posts as $post)
                @livewire('post', ['id' => $post->id])
            @endforeach()

        </div>
        HTML;
    }
}
