@extends('layouts/default')

@section('content')

    @include('components/_posts-header')

    <main>

        @if($posts->count())

            <x-post-grid :posts="$posts"/>

        @else
            <p>no post yet</p>
        @endif

    </main>

@endsection
