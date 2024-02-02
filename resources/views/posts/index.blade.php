@extends('.layouts.default')

@section('content')

    @include('posts._header')

    <main>

        @if($posts->count())

            <x-post-grid :posts="$posts"/>

            {{ $posts->links('pagination::tailwind') }}

        @else
            <p>no post yet</p>
        @endif

    </main>

@endsection
