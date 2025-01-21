@props(['book'])

<div
  class="relative bg-gray-100 space-y-3 h-[500px] w-full rounded-xl overflow-hidden border-2 hover:border-black transition-all duration-150 ease-in">
  <img class="w-full h-full object-cover hover:scale-105 transition-all duration-150 ease-in"
    src="https://picsum.photos/seed/{{ rand(0, 1000) }}/1000" alt="{{ $book->title }}">
  <div class="absolute bottom-3 left-3 flex flex-wrap-reverse justify-start gap-2">
    @for ($i = 1; $i < 6; $i++) <p
      class="text-xs font-semibold px-2 py-1 bg-gray-200 rounded cursor-pointer hover:bg-blue-500 transition-all duration-150 ease-in">
      tags
      {{ $i }}</p>
      @endfor
  </div>
</div>
<div class="space-y-1">
  <h1 class="text-lg font-bold truncate">{{ $book->title }}</h1>
  <div class="text-xs font-medium text-gray-500 space-y-1">
    <div>by USERNAME</div>
    <div>
      Published {{ $book->created_at->diffForHumans() }}.
    </div>
  </div>
</div>