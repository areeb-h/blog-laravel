@extends('.layouts.default')

@section('title')
    Blog - Login
@endsection

@section('content')
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        <form class="mx-auto max-w-md p-4 bg-slate-50 rounded-xl space-y-6" method="POST" action="/login">
            @csrf
            <h1 class="font-bold text-slate-800 text-center mb-6">Login</h1>
            <div class="space-y-2">
                <label class="block uppercase font-bold text-xs text-gray-700"
                       for="email">
                    Email
                </label>
                <input
                    class="border border-gray-400 p-2 w-full rounded-md"
                    type="text"
                    name="email"
                    value="{{ old('email') }}"
                    id="email"
                    required
                >
                @error('email')
                    <p class="text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="space-y-2">
                <label class="block uppercase font-bold text-xs text-gray-700"
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
            <button type="submit" class="btn-base">Login</button>
            @if($errors->any())
                <ul class="bg-red-100/20 px-3.5 py-1.5 rounded-md">
                    @foreach($errors->all() as $error)
                        <div class="flex space-x-2 items-center">
                            <div class="h-2 w-2 bg-red-200 rounded"></div>
                            <p class="text-sm text-red-500">{{ $error }}</p>
                        </div>
                    @endforeach
                </ul>
            @endif
        </form>
    </main>
@endsection
