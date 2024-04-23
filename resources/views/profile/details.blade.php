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
                    src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/c24sv2weTHPsmDa7jEMN0m2P3RT.jpg"
                    alt="">
                <div class="px-4 space-y-4 sm:px-0">
                    <h2 class="text-xl font-bold">gatau (2121)
                    </h2>
                    <div class="flex items-center gap-4">
                        <div class="flex items-center gap-2">
                            <x-lucide-star class="text-yellow-400 fill-current size-4" /> 7.5
                        </div>
                        <div class="flex gap-2">
                            <span
                                class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">Badge</span>
                            <span
                                class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">Badge</span>
                        </div>
                    </div>
                    <p>This time, while building a hideaway in their new home of the Great Valley, Littlefoot and the
                        gang rescue a mysterious egg from two scheming egg-nappers and make a starling surprise - and
                        new friend - when the egg hatches.</p>

                    <p>
                        Actor: sipa
                    </p>
                </div>
            </div>

            <div class="overflow-hidden rounded-lg">
                <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/rk-dF1lIbIg"
                    title="SPIDER-MAN: HOMECOMING - Official Trailer (HD)" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>

            <div class="">
                <h3 class="text-xl font-semibold">Comment</h3>
                <form action="" class="mt-4 space-y-2">
                    <!-- Rating -->
                    <div class="flex flex-row-reverse items-center justify-end">
                        @for ($i = 0; $i < 10; $i++)
                            <input id="count-{{ $i }}" type="radio"
                                class="text-transparent bg-transparent border-0 appearance-none cursor-pointer peer -ms-5 size-5 checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0"
                                name="count" value="{{ $i }}">
                            <label for="count-{{ $i }}"
                                class="text-gray-300 pointer-events-none peer-checked:text-yellow-400">
                                <x-lucide-star class="fill-current size-5" />
                            </label>
                        @endfor
                    </div>
                    <!-- End Rating -->

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
                    <x-comment count="7" name="Josh">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Vero sint, ab, ut modi eum dicta laborum harum voluptas illum earum et quidem a atque ea nulla
                        optio, tenetur nam deserunt voluptatibus autem totam labore natus recusandae. Illum sunt nobis,
                        reprehenderit consequuntur voluptatum quaerat suscipit aperiam.</x-comment>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
