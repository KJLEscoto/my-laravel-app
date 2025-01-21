<x-layout>
  {{-- publish form --}}
  <form action="{{ route('books.store') }}" method="POST" class="space-y-5 max-w-[60%] mx-auto">
    @csrf

    {{-- title --}}
    <x-title title="Publish a book" />

    <div class="my-2">
      <x-form.error name="invalid" />
    </div>

    {{-- email --}}
    <x-form.input label="Title" name_id="title" type="text" />

    {{-- password --}}
    <div class="flex flex-col gap-1">
      <label for="body">Body</label>
      <textarea name="body" id="body" class="h-40 border px-3 py-2">{{ old('body') }}</textarea>
      @error('body')
      <p class="text-red-500 font-semibold tracking-wider text-sm select-none">{{ $message }}</p>
      @enderror
    </div>

    {{-- submit button --}}
    <x-form.button label="Submit" />
  </form>
</x-layout>