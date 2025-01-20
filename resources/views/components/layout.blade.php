<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ env('APP_NAME') }}</title>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body class="h-auto w-auto">

  {{-- for guest --}}
  @guest
  <div class="flex gap-10 justify-between py-5 px-40 shadow-md items-center">
    <a href="{{ route('home') }}">
      <h1>My Laravel App</h1>
    </a>
    <div class="flex gap-3 items-center">
      <a href="{{ route('show.login') }}">Login</a>
      <a href="{{ route('show.register') }}">Register</a>
    </div>
  </div>
  @endguest


  {{-- for auth user --}}
  @auth
  <div class="flex gap-10 justify-between py-5 px-40 shadow-md items-center">
    <a href="{{ route('feed.index') }}">
      <h1>My Laravel App</h1>
    </a>

    {{-- dropdown --}}
    <div x-data="{ open: false }" class="relative flex items-start justify-center">

      {{-- dropdown button --}}
      <button @click="open = !open"
        class="rounded-full focus:outline-none focus:ring-1 focus:ring-gray-300 active:ring-1 p-1">
        <img class="w-10 h-10 object-cover rounded-full" src="https://picsum.photos/200" alt="Sample Image">
      </button>

      {{-- dropdown menu --}}
      <div x-show="open" @click.outside="open = false"
        class="bg-white shadow-lg border absolute top-12 right-0 rounded-md overflow-hidden p-3 space-y-2">
        <p class="capitalize">{{ auth()->user()->username }}</p>
        <form action="{{ route('logout') }}" method="POST">
          @csrf

          <x-form.button label="Logout" />
        </form>
      </div>
    </div>
  </div>
  @endauth

  <div class="py-10 h-full w-full px-40">
    {{ $slot }}
  </div>
</body>

</html>