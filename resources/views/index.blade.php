@extends('layout')


@section('content')
    <h3 class="card-title">Posts</h3>
    @foreach ($posts as $post)
        <div class="card mt-4">
            <a href="/posts/{{ $post->id }}" class="text-dark text-decoration-none">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    {{ $post->body }}
                </div>
            </a>
        </div>
    @endforeach
@endsection
