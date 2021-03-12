    <ul>
      @foreach ($quotes as $quote)
        <li :list="$list" :key="$list->id" wire:sortable="updateListOrder" class="flex flex-col mb-2">
          <div class="p-2 px-4 mb-2 rounded shadow bg-gray-50">"{!! nl2br(e($quote->text)) !!}" <div class="w-48 p-2"> –
              {{ $quote->author ?? 'unknown' }}</div>
            @if (Auth::user()->id === $quote->user_id)
              <button wire:click="delete({{ $quote->id }})"
                class="flex items-center justify-center float-right object-center w-6 h-6 p-2 ml-2 text-sm text-white bg-red-300 border-none rounded-full focus:outline-none hover:bg-red-500">x</button>
            @endif
            <img class="float-right object-cover w-6 h-6 rounded-full" src="{{ $quote->user->profile_photo_url }}"
              alt="{{ Auth::user()->name }}" />
          </div>
        </li>
      @endforeach
    </ul>
