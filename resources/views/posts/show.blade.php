@extends('components.layout')

@section('content')
    <article class="post">
        <header>
            <div class="title">
                <h2>{{ $post->title }}</h2>
            </div>
        </header>
        <p>Published at: {{ $post->published_at ?? '-' }}</p>
        <p>Content: {{ $post->body }}</p>
    </article>
@endsection
