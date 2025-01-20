<x-layout>
  <form action="{{ route('login') }}" method="POST" class="space-y-5">
    @csrf

    <div class="text-center font-bold">Login</div>

    <section class="flex flex-col gap-2">
      <label for="email">Email</label>
      <input required class="border rounded px-3 py-2" type="email" name="email" id="email" value="{{ old('email') }}">
      @error('email')
      <p class="text-red-500 text-sm">{{ $message }}</p>
      @enderror
    </section>

    <section class="flex flex-col gap-2">
      <label for="password">Password</label>
      <input required class="border rounded px-3 py-2" type="password" name="password" id="password"
        value="{{ old('password') }}">
      @error('password')
      <p class="text-red-500 text-sm">{{ $message }}</p>
      @enderror
    </section>

    <button type="submit" class="w-full text-white text-center px-5 py-2 bg-gray-500 rounded hover:opacity-70">
      Login
    </button>
  </form>
</x-layout>