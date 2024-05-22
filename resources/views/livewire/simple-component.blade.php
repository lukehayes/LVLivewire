<div class='p-4 bg-gray-300'>
    {{-- The Master doesn't talk, he acts. --}}
    <p>Simple Component Text.</p>

    @foreach($posts as $post)
        @livewire('post', ['id' => $post->id])
    @endforeach()

</div>
