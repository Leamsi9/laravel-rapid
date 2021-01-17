<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $author->name }} </title>
    <meta name="description" content="">

    <!-- Tailwind -->
    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }
    </style>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
            integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</head>
<body class="bg-black font-family-karla">

<!-- Top Bar Nav -->
<nav class="w-full py-7 bg-pink-500">
    <div class="w-full container mx-auto flex flex-wrap items-center justify-between">
        <div class="flex items-center text-lg no-underline text-white pr-6">
            {{--            <a class="" href="#">--}}
            {{--                <i class="fab fa-facebook"></i>--}}
            {{--            </a>--}}


            {{--            <a class="pl-6" href="#">--}}
            {{--                <i class="fab fa-instagram"></i>--}}
            {{--            </a>--}}
            {{--            <a class="pl-6" href="#">--}}
            {{--                <i class="fab fa-twitter"></i>--}}
            {{--            </a>--}}
            {{--            <a class="pl-6" href="#">--}}
            {{--                <i class="fab fa-linkedin"></i>--}}
            {{--            </a>--}}
        </div>
    </div>
</nav>

<!-- Text Header -->
<header class="w-full container mx-auto">
    <div class="flex flex-col items-center py-12">
        <a class="font-bold text-white uppercase hover:text-gray-700 text-5xl" href="#">
            {{ $author->name }}'s Blog
        </a>
        <p class="text-lg text-yellow-600">
            Musings about life, the universe and everything
        </p>
    </div>
</header>

{{--<!-- Topic Nav -->--}}
{{--<nav class="w-full py-4 border-t border-b bg-black-100" x-data="{ open: false }">--}}
{{--    <div class="block sm:hidden">--}}
{{--        <a--}}
{{--            href="#"--}}
{{--            class="block md:hidden text-base font-bold uppercase text-center flex justify-center items-center"--}}
{{--            @click="open = !open"--}}
{{--        >--}}
{{--            Topics <i :class="open ? 'fa-chevron-down': 'fa-chevron-up'" class="fas ml-2"></i>--}}
{{--        </a>--}}
{{--    </div>--}}
{{--    <div :class="open ? 'block': 'hidden'" class="w-full flex-grow sm:flex sm:items-center sm:w-auto">--}}
{{--        <div class="w-full container mx-auto flex flex-col sm:flex-row items-center justify-center text-sm font-bold uppercase mt-0 px-6 py-2">--}}
{{--            <a href="#" class="hover:bg-pink-400 rounded py-2 px-4 mx-2">Technology</a>--}}
{{--            <a href="#" class="hover:bg-pink-400 rounded py-2 px-4 mx-2">Automotive</a>--}}
{{--            <a href="#" class="hover:bg-pink-400 rounded py-2 px-4 mx-2">Finance</a>--}}
{{--            <a href="#" class="hover:bg-pink-400 rounded py-2 px-4 mx-2">Politics</a>--}}
{{--            <a href="#" class="hover:bg-pink-400 rounded py-2 px-4 mx-2">Culture</a>--}}
{{--            <a href="#" class="hover:bg-pink-400 rounded py-2 px-4 mx-2">Sports</a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}


<div class="container mx-auto flex flex-wrap py-6">

    <!-- Posts Section -->
    <section class="w-full md:w-2/3 flex flex-col items-center px-3">
        @foreach($posts as $post)

            <article class="flex flex-col shadow my-4">
                <!-- Article Image -->
                <a href="#" class="hover:opacity-75">
                    <img src="{{ $post->featured_image }}">
                </a>
                <div class="bg-black-900 flex flex-col justify-start p-6">
                    <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">{{ $post->tag }}</a>
                    <a href="/blog/{{ $post->slug }}"
                       class="text-green-500 text-3xl font-bold hover:text-pink-500 pb-3"> {{ $post->title }} </a>
                    <p href="#" class="text-sm pb-8">
                        By <a href="#" class="font-semibold hover:text-gray-800">{{ $author->name }}</a>, Published
                        on {{ $post->publish_date }}
                    </p>
                    <a href="#" class="text-red-600 pb-3">{!! $post->body !!}</a>
                    <a href="#" class="uppercase text-yellow-600 hover:text-purple-700">Continue Reading <i
                            class="fas fa-arrow-right"></i></a>
                </div>
            </article>
    @endforeach

    <!-- Pagination -->
        <div class="flex items-center py-8">
            <a href="#"
               class="h-10 w-10 font-semibold text-red-500 hover:text-red-800 text-sm flex items-center justify-center ml-3">Next
                <i class="fas fa-arrow-right ml-2"></i></a>
        </div>

    </section>

    <!-- Sidebar Section -->
    <aside class="w-full md:w-1/3 flex flex-col items-center px-3">

        <div class="w-full bg-black flex flex-col my-4 p-6">
            <p class="text-xl font-semibold text-pink-600 pb-5">About Me</p>
            <p class="text-white pb-2">{!! $author->bio !!}</p>
        </div>

        <div class="w-full bg-black shadow flex flex-col my-4 p-6">
            <p class="text-xl text-red-600 font-semibold pb-5">Topics</p>
            <div class="grid grid-cols-3 gap-3">
                <h1>Test</h1>
                @foreach($tags as $tag)
                    <h1>{{$tag->name}}</h1>
                    <h1>{{$tag->name}}</h1>
                    <h1>{{$tag->name}}</h1>
                    <h1>Test</h1>

                @endforeach

                {{--                <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=1">--}}
                {{--                <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=2">--}}
                {{--                <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=3">--}}
                {{--                <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=4">--}}
                {{--                <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=5">--}}
                {{--                <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=6">--}}
                {{--                <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=7">--}}
                {{--                <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=8">--}}
                {{--                <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=9">--}}
            </div>
            <a href="#"
               class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-6">
                <i class="fab fa-instagram mr-2"></i> Follow @ {{$author->slug}}
            </a>
        </div>

    </aside>

</div>

{{--<footer class="w-full border-t bg-white pb-12">--}}
{{--    <div--}}
{{--        class="relative w-full flex items-center invisible md:visible md:pb-12"--}}
{{--        x-data="getCarouselData()"--}}
{{--    >--}}
{{--        <button--}}
{{--            class="absolute bg-blue-800 hover:bg-blue-700 text-white text-2xl font-bold hover:shadow rounded-full w-16 h-16 ml-12"--}}
{{--            x-on:click="decrement()">--}}
{{--            &#8592;--}}
{{--        </button>--}}
{{--        <template x-for="image in images.slice(currentIndex, currentIndex + 6)" :key="images.indexOf(image)">--}}
{{--            <img class="w-1/6 hover:opacity-75" :src="image">--}}
{{--        </template>--}}
{{--        <button--}}
{{--            class="absolute right-0 bg-blue-800 hover:bg-blue-700 text-white text-2xl font-bold hover:shadow rounded-full w-16 h-16 mr-12"--}}
{{--            x-on:click="increment()">--}}
{{--            &#8594;--}}
{{--        </button>--}}
{{--    </div>--}}
{{--    <div class="w-full container mx-auto flex flex-col items-center">--}}
{{--        <div class="flex flex-col md:flex-row text-center md:text-left md:justify-between py-6">--}}
{{--            <a href="#" class="uppercase px-3">About Us</a>--}}
{{--            <a href="#" class="uppercase px-3">Privacy Policy</a>--}}
{{--            <a href="#" class="uppercase px-3">Terms & Conditions</a>--}}
{{--            <a href="#" class="uppercase px-3">Contact Us</a>--}}
{{--        </div>--}}
{{--        <div class="uppercase pb-6">&copy; myblog.com</div>--}}
{{--    </div>--}}
{{--</footer>--}}

{{--<script>--}}
{{--    function getCarouselData() {--}}
{{--        return {--}}
{{--            currentIndex: 0,--}}
{{--            images: [--}}
{{--                'https://source.unsplash.com/collection/1346951/800x800?sig=1',--}}
{{--                'https://source.unsplash.com/collection/1346951/800x800?sig=2',--}}
{{--                'https://source.unsplash.com/collection/1346951/800x800?sig=3',--}}
{{--                'https://source.unsplash.com/collection/1346951/800x800?sig=4',--}}
{{--                'https://source.unsplash.com/collection/1346951/800x800?sig=5',--}}
{{--                'https://source.unsplash.com/collection/1346951/800x800?sig=6',--}}
{{--                'https://source.unsplash.com/collection/1346951/800x800?sig=7',--}}
{{--                'https://source.unsplash.com/collection/1346951/800x800?sig=8',--}}
{{--                'https://source.unsplash.com/collection/1346951/800x800?sig=9',--}}
{{--            ],--}}
{{--            increment() {--}}
{{--                this.currentIndex = this.currentIndex === this.images.length - 6 ? 0 : this.currentIndex + 1;--}}
{{--            },--}}
{{--            decrement() {--}}
{{--                this.currentIndex = this.currentIndex === this.images.length - 6 ? 0 : this.currentIndex - 1;--}}
{{--            },--}}
{{--        }--}}
{{--    }--}}
{{--</script>--}}

</body>
</html>
