<div>
    {{ $updateStateId }}
    @foreach ($posts as $post)
        <div class="flex-col p-4 my-4 bg-white shadow-xl rounded-md">
            <div>
                <span class="text-xl font-bold">{{ $post->user->name }}</span>
                <span class="text-gray-400">{{ $post->created_at->diffForHumans() }}</span>
                <button 
                    class="p-2 bg-yellow-600 hover:bg-yellow-300 text-white rounded-md"
                    wire:click="showUpdateForm({{  $post->id }})"
                >Edit
                </button>
                <button 
                    onclick="return confirm('Apa anda yakin ingin menghapus!') || event.stopImmediatePropagation()" 
                    wire:click="delete({{  $post->id }})"
                    class="p-2 bg-red-600 hover:bg-red-300 text-white rounded-md"
                >Delete
                </button>
            </div>
            <div>
                @if ($updateStateId !== $post->id)
                    <span>{{ $post->body }}</span>    
                @endif

                @if ($updateStateId === $post->id)
                <textarea
                    wire:model="body"
                    class="appearance-none rounded-none relative block w-full px-3 py-2 
                        border border-gray-300 placeholder-gray-500 text-gray-900 
                        rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 
                        focus:z-10 sm:text-sm"
                    rows="3">
                </textarea>
                <button 
                    wire:click="update({{ $post->id }})"
                    class="px-4 py-2 my-1 bg-blue-600 text-white hover:bg-blue-400 rounded-md"
                >Post</button>   
                @endif
            </div>
        </div>
    @endforeach
</div>
