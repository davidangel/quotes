<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{ config('app.name') }}</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Styles -->
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  @livewireStyles
</head>

<body class="antialiased bg-gray-50">
  <div class="relative flex justify-center min-h-screen bg-gray-100 items-top dark:bg-gray-900 sm:items-center sm:pt-0">
    @if (Route::has('login'))
      <div class="fixed top-0 right-0 hidden px-6 py-4 sm:block">
        @auth
          <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
        @else
          <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

          @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
          @endif
        @endauth
      </div>
    @endif

    <div class="flex flex-col">

      @livewire('quote', ['quoteId' => $id])

    </div>
  </div>
  @livewireScripts
</body>

</html>
