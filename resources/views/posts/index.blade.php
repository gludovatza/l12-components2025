@extends('components.layout')

@section('content')

    @forelse($posts as $post)

        <article class="post">
            <header>
                <div class="title">
                    <h2><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></h2>
                    <p>{{ $post->slug }}</p>
                </div>
            </header>
        </article>

    @empty
        <p>No posts.</p>
    @endforelse

@endsection
