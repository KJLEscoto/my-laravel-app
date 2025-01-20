@props(['label'])

<div>

  {{-- button (label) --}}
  <button type="submit" class="text-center px-8 py-2 bg-slate-600 hover:opacity-75 rounded text-white">
    {{ $label }}
  </button>
</div>