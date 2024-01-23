<!DOCTYPE html>

<title>Laravel</title>

@vite('resources/css/app.css')
@vite('resources/js/app.js')

<body>
    <article>
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->body }}</p>

        <div>
            <a class="btn-return" href="/">Go back</a>
        </div>
    </article>
</body>
