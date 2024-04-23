<div class="w-44 rounded-lg bg-card hover:shadow-lg shadow transition-shadow p-2">
    {{-- <img src="{{ asset('storage/' . $movie->poster) }}" alt="" class="rounded" /> --}}
    <img src="https://m.media-amazon.com/images/S/pv-target-images/6ab1a7387a5971a36a576707f5e8f98611745fb78b6c5f90196fb4b6f839ec91.jpg" alt="">
    Elemental
    <div class="grid space-y-4 pt-2">
        {{-- <div class="truncate">{{ $movie->title }}</div> --}}
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-2">
                <x-lucide-star class="size-4 fill-current text-yellow-400"></x-lucide-star>
                7,5
                {{-- <div class="text-sm">{{$movie->ratings()->avg('score')}}</div> --}}
            </div>
            {{-- <div class="text-sm">{{ $movie->year }}</div> --}} 2023
        </div>
        <button
            class="flex items-center justify-center gap-2 rounded bg-red-600 px-4 py-2 hover:bg-red-500 text-white" >
            Detail
        </button>
    </div>
</div>
