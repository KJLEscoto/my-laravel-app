<x-layout>
  @if (session('success'))
  <x-flash-msg :msg="session('success')" />
  @endif

  <div class="flex flex-col gap-10 w-full h-auto">
    {{-- Publish form --}}
    <form action="{{ route('books.store') }}" method="POST" class="space-y-5 max-w-[60%] w-full mx-auto">
      @csrf
      {{-- Title --}}
      <x-title title="Publish a book" />
      <div class="my-2">
        <x-form.error name="invalid" />
      </div>
      {{-- Input for Title --}}
      <x-form.input label="Title" name_id="title" type="text" />
      {{-- Text Area for Body --}}
      <x-form.text-area label="Body" name_id="body" />
      {{-- Submit Button --}}
      <x-form.button label="Submit" />
    </form>

    {{-- Display published books if any exist --}}
    @if ($books->isNotEmpty())
    <hr>
    <div class="space-y-7">
      <x-title title="Your published books" />
      <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-7 gap-y-10">
        @foreach ($books as $book)
        <a href="{{ route('books.show', $book->id) }}" class="space-y-3">
          <x-book :book="$book" />
        </a>
        @endforeach
      </div>
      <div>{{ $books->links() }}</div>
    </div>
    @endif
  </div>
</x-layout>