<x-layout>

  {{-- registration form --}}
  <form action="{{ route('register') }}" method="POST" class="space-y-5 max-w-[60%] mx-auto">
    @csrf

    {{-- title --}}
    <x-title title="Register a new account" />

    {{-- username --}}
    <x-form.input label="Username" name_id="username" />

    {{-- email --}}
    <x-form.input label="Email" name_id="email" type="text" />

    {{-- password --}}
    <x-form.input label="Password" name_id="password" type="password" />

    {{-- confirm password --}}
    <x-form.input label="Confirm Password" name_id="password_confirmation" type="password" />

    {{-- submit button --}}
    <x-form.button label="Register" />
  </form>
</x-layout>