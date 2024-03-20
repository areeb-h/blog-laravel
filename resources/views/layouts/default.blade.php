<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title', 'Laravel From Scratch Blog')</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<body style="font-family: Open Sans, sans-serif">
<section class="px-6 py-8">
    <nav class="md:flex md:justify-between md:items-center">
        <div>
            <a href="/">
                <img src="/images/logo.svg" alt="Laracasts Logo" width="165" height="16">
            </a>
        </div>

        <div class="mt-8 md:mt-0 flex items-center space-x-4 text-xs font-bold uppercase">
            @auth
                <span class="">Welcome {{ auth()->user()->name }}!</span>

            <form method="POST" action="/logout" class="flex">
                @csrf
                <button class="uppercase border-2 border-slate-400 hover:border-slate-200 px-4 py-2.5 rounded-full text-xs" type="submit">Logout</button>
            </form>
            @else
                <a href="/register" class="text-xs font-bold uppercase">Register</a>
                <a href="/login" class="text-xs font-bold uppercase">Log in</a>
            @endauth

            <a href="#" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                Subscribe for Updates
            </a>
        </div>
    </nav>

    @yield('content')

    <footer class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
        <img src="/images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-6" style="width: 145px;">
        <h5 class="text-3xl">Stay in touch with the latest posts</h5>
        <p class="text-sm mt-3">Promise to keep the inbox clean. No bugs.</p>

        <div class="mt-10">
            <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">

                <form method="POST" action="#" class="lg:flex text-sm">
                    <div class="lg:py-3 lg:px-5 flex items-center">
                        <label for="email" class="hidden lg:inline-block">
                            <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                        </label>

                        <input id="email" type="text" placeholder="Your email address"
                               class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">
                    </div>

                    <button type="submit"
                            class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8"
                    >
                        Subscribe
                    </button>
                </form>
            </div>
        </div>
    </footer>
</section>

<!-- Toast notifications -->
@if (session('error'))
    <div id="toast" class="fixed bottom-4 right-4 bg-red-500/80 text-white py-2 px-4 rounded-lg">
        {{ session('error') }}
        <button class="close-toast text-white ml-2">x</button>
    </div>
@endif
@if (session('success'))
    <div id="toast" class="fixed bottom-4 right-4 bg-green-500/80 text-white py-2 px-4 rounded-lg">
        {{ session('success') }}
        <button class="close-toast text-white ml-2">x</button>
    </div>
@endif
</body>

<script>
    document.addEventListener('click', function(event) {
        if (event.target.matches('.close-toast')) {
            const toast = event.target.closest('#toast');
            toast.classList.add('fade-out');
            setTimeout(() => {
                toast.remove();
            }, 2000);
        }
    });
</script>
