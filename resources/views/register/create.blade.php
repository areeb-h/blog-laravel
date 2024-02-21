@extends('.layouts.default')

@section('title')
    Blog - Register
@endsection

@section('content')
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        <form class="mx-auto max-w-md p-4 bg-slate-50 rounded-xl /space-y-5" method="POST" action="/register">
            <h1 class="font-bold text-slate-800 text-center mb-6">Regsiter</h1>
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                       for="username">
                    Username
                </label>
                <input
                    class="border border-gray-400 p-2 w-full rounded-md"
                    type="text"
                    name="username"
                    id="username"
                    required
                >
            </div>
            <div class="/mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                       for="password">
                    Password
                </label>
                <input
                    class="border border-gray-400 p-2 w-full rounded-md"
                    type="password"
                    name="password"
                    id="password"
                    required
                >
            </div>
        </form>
    </main>
@endsection
