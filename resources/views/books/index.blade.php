<x-layout>
  <div class="flex flex-col gap-5">
    <x-title title="Latest Published" />

    <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-7 gap-y-10">
      @foreach ($books as $book)
      <a href="{{ route('books.show', $book->id) }}" class="space-y-3">
        <x-book :book="$book" />
      </a>
      @endforeach
    </div>

    <div>{{ $books->links() }}</div>
  </div>
</x-layout>