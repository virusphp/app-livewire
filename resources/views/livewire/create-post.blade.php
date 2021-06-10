<div class="p-4">
    <textarea
        wire:model="body"
        class="appearance-none rounded-none relative block w-full px-3 py-2 
            border border-gray-300 placeholder-gray-500 text-gray-900 
            rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 
            focus:z-10 sm:text-sm"
        placeholder="Post Sesuatu"
        rows="3">
    </textarea>

    <div class="flex justify-end">
        <button 
            wire:click="createPost"
            class="px-4 py-2 my-1 bg-blue-600 text-white hover:bg-blue-400 rounded-md"
        >Post</button>     
    </div> 
</div>
