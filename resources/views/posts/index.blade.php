@extends('layouts.app')

@section('content')
    @foreach ($posts as $post)
        <div class="well">
            <h3>{{ $post->title }}</h3>
            <p>{{ $post->author }}</p>
            <p class="text-muted">{{ $post->created_at }}</p>
        </div>
    @endforeach
@endsection