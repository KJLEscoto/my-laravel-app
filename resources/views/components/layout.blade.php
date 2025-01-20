<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple App</title>
  @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body class="p-10">

  {{-- for guest --}}
  @guest
  <div class="flex gap-10 justify-between">
    <a href="{{ route('show.index') }}">
      <h1>Join now!</h1>
    </a>
    <div class="flex gap-3">
      <a href="{{ route('show.login') }}">Login</a>
      <a href="{{ route('show.register') }}">Register</a>
    </div>
  </div>
  @endguest


  {{-- for auth user --}}
  @auth
  <div class="flex gap-10 justify-between">
    <a href="{{ route('show.feed') }}">
      <h1>Welcome back,
        <span class="capitalize">{{ Auth::user()->name }}</span>!
      </h1>
    </a>
    <div class="flex gap-3">
      <a href="{{ route('create.feed') }}">New Post</a>
      <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button class="hover:text-red-500" type="submit">Logout</button>
      </form>
    </div>

  </div>
  @endauth

  <div class="mt-5 h-full">
    {{ $slot }}
  </div>
</body>

</html>