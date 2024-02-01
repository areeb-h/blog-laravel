@extends('layouts/default')

@section('title')
    Blog - {{ $post->title }}
@endsection

@section('content')
    <article class="bg-slate-50/80">
        <h1>{{ $post->title }}</h1>

        <p>
            By
            <a class="font-bold" href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a>
            in
            <a class="font-bold" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        </p>

        <p class="bg-white border p-2 rounded-lg">
            {{ $post->body }}
        </p>

        <div>
            <a class="btn-return" href="/">Go back</a>
        </div>
    </article>
@endsection
