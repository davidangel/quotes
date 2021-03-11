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
    <div wire:click="random" class="w-6 mx-4 text-gray-300 cursor-pointer hover:text-gray-600">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
      </svg>
      </button>
    </div>

    <div onClick="copyToClipboard('{{ config('app.url') }}/{{ $quoteId }}')"
      class="w-6 mx-4 text-gray-300 cursor-pointer hover:text-gray-600">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
      </svg>
    </div>
    <script>
      const copyToClipboard = str => {
        const el = document.createElement('textarea');
        el.value = str;
        document.body.appendChild(el);
        el.select();
        document.execCommand('copy');
        window.location = str;
        document.body.removeChild(el);
      };

    </script>
  </div>
