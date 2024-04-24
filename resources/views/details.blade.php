<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-toast />
    @include('layouts.navigation')
    <div class="py-12">
        <div class="px-2 mx-auto space-y-8 max-w-7xl sm:px-6 lg:px-8">
            <div class="grid sm:grid-cols-2">
                <img class="object-contain mx-auto h-80 aspect-square"
                src="{{ asset('storage/' . $movie->poster) }}">
                <div class="px-4 space-y-4 sm:px-0">
                    <h2 class="text-xl font-bold">{{ $movie->title }} ({{ $movie->year }}) ({{$movie->durasi}})
                    </h2>
                    <div class="flex items-center gap-4">
                        <div class="flex items-center gap-2">
                            <x-lucide-star class="text-yellow-400 fill-current size-4" /> 7.5
                        </div>
                        <div class="flex gap-2">
                            @foreach ($movie->genres as $genre)
                                <span
                                    class="bg-yellow-100 text-yellow-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">{{ $genre->genre }}</span>
                            @endforeach
                        </div>
                    </div>
                    <p>{{$movie->sinopsis}}</p>
                    <p>{{$movie->description}}</p>

                    <p>
                        {{$movie->actors}}
                    </p>
                </div>
            </div>

            <div class="overflow-hidden rounded-lg">
                <iframe class="w-full aspect-video" src="{{$movie->trailer}}"
                    title="SPIDER-MAN: HOMECOMING - Official Trailer (HD)" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>

            <div class="">
                <h3 class="text-xl font-semibold">Comment</h3>
                <form action="{{route('ratings.create')}}" class="mt-4 space-y-2" method="POST">
                    @csrf
                    <!-- Rating -->
                    <div class="flex flex-row-reverse items-center justify-end">
                        @for ($i = 0; $i < 10; $i++)
                            <input id="star-{{ $i }}" type="radio"
                                class="text-transparent bg-transparent border-0 appearance-none cursor-pointer peer -ms-5 size-5 checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0"
                                name="star" value="{{ $i }}">
                            <label for="star-{{ $i }}"
                                class="text-gray-300 pointer-events-none peer-checked:text-yellow-400">
                                <x-lucide-star class="fill-current size-5" />
                            </label>
                        @endfor
                    </div>
                    <!-- End Rating -->
                    <input type="hidden" name="movie_id" value="{{$movie->id}}">

                    <div class="w-full mx-auto">
                        <textarea x-data="{
                            resize() {
                                $el.style.height = '0px';
                                $el.style.height = $el.scrollHeight + 'px'
                            }
                        }" x-init="resize()" @input="resize()" type="text"
                            placeholder="Type your message here. I will resize based on the height content."
                            class="flex w-full h-auto min-h-[80px] px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-400 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50"></textarea>
                    </div>

                    <div class="flex justify-end">
                        <x-primary-button>Submit</x-primary-button>
                    </div>
                </form>
                <div class="mt-8 space-y-4">
                    @foreach ($movie->ratings as $rating)
                        <x-comment count="{{$rating->star}}" name="{{$rating->user->name}}">
                        {{$rating->comment}}
                        </x-comment>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</body>

</html>
