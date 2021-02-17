@extends('layout')


@section('content')
    <h2>Posts</h2>
    <div class="row">
        @foreach ($posts as $post)
            <div class="col-6 mt-4">
                <div class="card">
                    <a href="/posts/{{ $post->id }}" class="text-secondary text-decoration-none">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            {{ $post->body }}
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
