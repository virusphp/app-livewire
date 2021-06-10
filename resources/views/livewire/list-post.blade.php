<div>
    {{ $updateStateId }}
    @foreach ($posts as $post)
        <div class="flex-col p-4 my-4 bg-white shadow-xl rounded-md">
            <div>
                <span class="text-xl font-bold">{{ $post->user->name }}</span>
                <span class="text-gray-400">{{ $post->created_at->diffForHumans() }}</span>
                <button class="p-2 bg-yellow-600 hover:bg-yellow-300 text-white rounded-md">Edit</button>
            </div>
            <div>
                <span>{{ $post->body }}</span>
            </div>
        </div>
    @endforeach
</div>
