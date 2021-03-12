<div class="px-6 py-6 bg-white border-b border-gray-200">
  <div class="flex items-center">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
      class="w-6 text-gray-600">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
    </svg>
    <div class="ml-4 text-lg font-semibold leading-7 text-gray-600">Team Quotes</div>
  </div>

  <div class="mt-8 text-xl">
    @livewire('quote-list')
  </div>
</div>

<div class="grid grid-cols-1 bg-gray-200 bg-opacity-25 md:grid-cols-1">
  <div class="p-6">
    <div class="flex items-center">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
        class="w-6 text-gray-600">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
      </svg>
      <div class="ml-4 text-lg font-semibold leading-7 text-gray-600"><a href="https://laravel.com/docs">Create New
          Quote</a></div>
    </div>
    @livewire('new-quote')
  </div>
</div>
