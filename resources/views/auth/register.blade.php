<x-layout>
  <form action="{{ route('register') }}" method="POST" class="space-y-5">
    @csrf

    <div class="text-center font-bold">Register</div>

    <section class="flex flex-col gap-2">
      <label for="email">Name</label>
      <input class="border rounded px-3 py-2" type="text" name="name" id="name" value="{{ old('name') }}">
      @error('name')
      <p class="text-red-500 text-sm">{{ $message }}</p>
      @enderror
    </section>

    <section class="flex flex-col gap-2">
      <label for="email">Email</label>
      <input class="border rounded px-3 py-2" type="text" name="email" id="email" value="{{ old('email') }}">
      @error('email')
      <p class="text-red-500 text-sm">{{ $message }}</p>
      @enderror
    </section>

    <section class="flex flex-col gap-2">
      <label for="password">Password</label>
      <input class="border rounded px-3 py-2" type="password" name="password" id="password">
      @error('password')
      <p class="text-red-500 text-sm">{{ $message }}</p>
      @enderror
    </section>

    <section class="flex flex-col gap-2">
      <label for="password_confirmation">Confirm Password</label>
      <input class="border rounded px-3 py-2" type="password" name="password_confirmation" id="password_confirmation">
    </section>

    <button type="submit" class="w-full text-white text-center px-5 py-2 bg-gray-500 rounded hover:opacity-70">
      Register
    </button>
  </form>
</x-layout>