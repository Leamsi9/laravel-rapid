<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, shrink-to-fit">
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
<nav class="w-full py-1 bg-pink-500">
    <div class="w-full container mx-auto flex flex-wrap items-center justify-between">
        <div class="flex items-center text-lg no-underline text-white pr-4">
            <a class="" href="#">
                <i class="fab fa-facebook"></i>
            </a>


            <a class="pl-6" href="#">
                <i class="fab fa-instagram"></i>
            </a>
            <a class="pl-6" href="#">
                <i class="fab fa-twitter"></i>
            </a>
            <a class="pl-6" href="#">
                <i class="fab fa-linkedin"></i>
            </a>
        </div>
    </div>
</nav>

<!-- Text Header -->
<header class="w-full container mx-auto">
    <div class="flex flex-col items-center py-12">
        <a class="font-bold text-white uppercase hover:text-gray-700 text-5xl" href="#">
            {{ $author->name }}
        </a>
        <p class="text-lg text-yellow-600">
            Musings about life, the universe and everything
        </p>
    </div>
</header>

<div class="container mx-auto flex flex-wrap py-6">

    <!-- Posts Section -->
    <section class="w-full md:w-1/2 flex flex-col items-center px-3">
        @foreach($posts as $post)

            <article class="flex flex-col shadow my-4">
                {{--                <!-- Article Image -->--}}
                {{--                <a href="#" class="hover:opacity-75">--}}
                {{--                    <img src="{{ $post->featured_image }}">--}}
                {{--                </a>--}}
                <div class="bg-black-900 flex flex-col  justify-start p-6">
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
            <div class="grid grid-cols-2 gap-1">
                @foreach($tags as $tag)
                    <span class="text-green-500"> {{$tag->name}} </span>
                    <br>
                @endforeach
            </div>
            <a href="#"
               class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-6">
                <i class="fab fa-twitter mr-2"></i> Follow @ {{$author->slug}}
            </a>
        </div>

    </aside>
</div>
</body>
</html>
