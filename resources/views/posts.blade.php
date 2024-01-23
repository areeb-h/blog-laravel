<!DOCTYPE html>

<title>Laravel</title>

@vite('resources/css/app.css')
@vite('resources/js/app.js')

<body>
    <div class="articles">
        @foreach ($posts as $post)
        <article>
            <h1>
                <a href="posts/{{ $post->slug }}"><?= $post->title ?></a>
            </h1>

            <p>
                {{ $post->excerpt }}
            </p>
        </article>
        @endforeach
    </div>
</body>
