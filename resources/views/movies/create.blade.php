<x-admin-layout>
    <div class="flex justify-between">
        <h2>Create Movie</h2>
    </div>

    <form class="grid grid-cols-2 gap-3" action="{{ route('movies.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="">
            <x-input-label>Title</x-input-label>
            <x-text-input class="w-full" name="title" placeholder="title" />
        </div>
        <div class="">
            <x-input-label>Actors</x-input-label>
            <x-text-input class="w-full" name="actors" placeholder="actors" />
        </div>
        <div class="">
            <x-input-label>Year</x-input-label>
            <x-text-input class="w-full" name="year" placeholder="year" />
        </div>
        <div class="">
            <x-input-label>Trailer</x-input-label>
            <x-text-input class="w-full" name="trailer" placeholder="trailer" />
        </div>
        <div class="">
            <x-input-label>Durasi</x-input-label>
            <x-text-input class="w-full" name="durasi" placeholder="durasi" />
        </div>
        <div class="col-span-2">
            <x-input-label>Sinposis</x-input-label>
            <textarea
                class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                rows="3" placeholder="" name="sinposis"></textarea>

        </div>
        <div class="col-span-2">
            <x-input-label>Description</x-input-label>
            <textarea
                class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                rows="3" placeholder="" name="description"></textarea>

        </div>
        <div class="">
            <x-input-label>Poster</x-input-label>
            <label for="file-input" class="sr-only">Choose file</label>
            <input type="file" name="poster" id="file-input"
                class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none
    file:bg-gray-50 file:border-0
    file:me-4
    file:py-3 file:px-4
   ">
        </div>
        <div class="">
            <x-input-label>Genre</x-input-label>
            <select
                data-hs-select='{
  "placeholder": "Select multiple options...",
  "toggleTag": "<button type=\"button\"></button>",
  "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 px-4 pe-9 flex text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:border-blue-500 focus:ring-blue-500 before:absolute before:inset-0 before:z-[1] dark:bg-white dark:border-neutral-700 dark:text-neutral-400",
  "dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-900 dark:border-neutral-700",
  "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800",
  "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"flex-shrink-0 size-3.5 text-blue-600 dark:text-blue-500\" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>",
  "extraMarkup": "<div class=\"absolute top-1/2 end-3 -translate-y-1/2\"><svg class=\"flex-shrink-0 size-3.5 text-gray-500 \" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"m7 15 5 5 5-5\"/><path d=\"m7 9 5-5 5 5\"/></svg></div>"
}'
                class="hidden">
                <option value=""></option>
                @foreach (App\Models\Genre::all() as $genre)
                    <option value="{{ $genre->id }}">{{ $genre->genre }}</option>
                @endforeach
            </select>
        </div>
        <div class="flex justify-end col-start-2">
            <button class="py-2 px-4 bg-yellow-400 hover:bg-yellow-500 rounded-lg text-sm">Add Movie</button>
        </div>
    </form>
</x-admin-layout>