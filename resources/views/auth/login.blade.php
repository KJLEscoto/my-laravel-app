<x-layout>

  {{-- login form --}}
  <form action="{{ route('login') }}" method="POST" class="space-y-5 max-w-[60%] mx-auto">
    @csrf

    {{-- title --}}
    <x-title title="Login your account" />

    <div class="my-2">
      <x-form.error name="invalid" />
    </div>

    {{-- email --}}
    <x-form.input label="Email" name_id="email" type="text" />

    {{-- password --}}
    <x-form.input label="Password" name_id="password" type="password" />

    {{-- submit button --}}
    <x-form.button label="Login" />
  </form>
</x-layout>