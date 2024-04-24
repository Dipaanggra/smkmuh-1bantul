<x-app-layout>
    <div class="hidden sm:block">
        {{-- <label for="icon" class="sr-only">Search</label>
        <div class="relative min-w-72 md:min-w-80">
            <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-4">
                <svg class="flex-shrink-0 size-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8" />
                    <path d="m21 21-4.3-4.3" />
                </svg>
            </div>
            <input type="text" id="icon" name="icon"
                class="py-2 px-4 ps-11 block  w-1/4 mt-5 justify- border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                placeholder="Search"> --}}

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <x-carousel></x-carousel>
                    <div class="flex gap-4 overflow-x-auto p-2">
                        @for ($i = 0; $i < 7; $i++)
                            <div>
                                <x-movie-card></x-movie-card>
                                <x-movie-card></x-movie-card>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
