    <div class="py-2 ml-10">
      <div class="flex justify-between">
        <textarea wire:model="newText" type="textarea" class="w-3/4 p-2 m-2" placeholder="text"></textarea>
        <input wire:model="newAuthor" wire:keydown.enter="create" type="text" class="w-1/4 m-2" placeholder="author">
      </div>
      <div wire:click="create"
        class="flex justify-center px-4 py-2 m-2 text-white bg-gray-400 rounded cursor-pointer hover:bg-blue-500 text-bold">
        Create</div>
    </div>
