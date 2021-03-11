<div wire:model="quote" class="self-center w-3/4 m-8">
  <div class="relative w-full px-6 py-4 text-2xl text-gray-600 bg-white rounded-md">
    {!! nl2br(e($text)) !!}
  </div>
  <div class="flex flex-col justify-center">
    <div class="ml-8 text-3xl text-white" style="margin-top:-0.5rem;">
      &#9660;
    </div>
    <div class="w-auto text-gray-700">
      {{ $author }}
    </div>
  </div>

  <div class="flex justify-center py-10">
    <div wire:click="random" class="w-4 text-gray-300 cursor-pointer hover:text-gray-600">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
      </svg>
      </button>
    </div>
  </div>
