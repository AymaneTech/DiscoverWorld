<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=devi   ce-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('vendor/bladewind/css/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/bladewind/css/bladewind-ui.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('vendor/bladewind/js/helpers.js') }}"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body {{ $attributes->merge(["class" => ""])  }}">
<header class="">
    <nav class="container mx-auto flex justify-between">
        <div class="logo mt-2">
            <h2 class="text-xl font-bold">Bug <span class="text-[#515F08]">Tracker</span></h2>
        </div>
        <div class="flex gap-2 mt-2">
            @auth
                <a href="/posts/create" class="font-semibold text-white bg-[#515F08] px-8 py-2 rounded-3xl">Share Post</a>
                <form action="/logout" method="post">
                    <button class="font-semibold text-[#515F08] border border-[#515F08] px-8 py-2 rounded-3xl">Logout</button>
                    @csrf
                </form>
            @else
                <a href="/login" class="font-semibold text-white bg-[#515F08] px-8 py-2 rounded-3xl">login</a>
                <a href="/register" class="font-semibold text-white bg-[#515F08] px-8 py-2 rounded-3xl">Register</a>
            @endauth
        </div>
    </nav>
</header>
{{$slot}}


<x-flash/>
</body>
</html>
