<x-layout>
  <div class="flex flex-col gap-5">

    @if (session('success'))
    <p>{{ session('success') }}</p>
    @endif

    <x-title title="Latest Published" />

    <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7">
      @foreach ($books as $book)
      <div class="p-10 rounded-xl bg-gray-100 space-y-3 h-[500px] flex flex-col">
        <div class="space-y-1">
          <h1 class="text-lg font-bold">{{ $book->title }}</h1>
          <h5 class="text-xs font-medium text-gray-500">
            USERNAME | Posted {{ $book->created_at->diffForHumans() }}.
          </h5>
        </div>
        <hr>
        <p class="flex-grow line-clamp-5">
          {{ $book->body }}
        </p>
        <div>
          <a href="{{ route('books.show', $book->id) }}">Read more.</a>
        </div>
      </div>
      @endforeach
    </div>

    <div>{{ $books->links() }}</div>
  </div>
</x-layout>