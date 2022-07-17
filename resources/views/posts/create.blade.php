@extends('layouts.app')

@section('content')
    <form method="post" action="{{ route('posts.store') }}">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" class="form-control">
            @error('title')
                <strong class="text-danger">{{ $message }}</strong>
            @enderror
        </div>

        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" id="body" name="body">{{ old('body') }}</textarea>
            @error('body')
                <strong class="text-danger">{{ $message }}</strong>
            @enderror
        </div>

        <button class="btn btn-default">Create</button>
    </form>
@endsection