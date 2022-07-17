@extends('layouts.app')

@section('content')
    <h1>Welcome to Contact Us</h1>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis dolorem alias iure autem quod aperiam laboriosam omnis porro quibusdam atque doloremque fuga ut earum, voluptatum possimus tenetur culpa dicta ipsam.
    </p>

    <form method="post" action="{{ route('contact') }}">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}"/>
            @error('name')
                <strong class="text-danger">{{ $message }}</strong>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}"/>
            @error('email')
                <strong class="text-danger">{{ $message }}</strong>
            @enderror
        </div>
        <div class="form-group">
            <label for="msg">Message</label>
            <textarea class="form-control" name="msg" id="msg" rows="6">{{ old('msg') }}</textarea>
            @error('msg')
                <strong class="text-danger">{{ $message }}</strong>
            @enderror
        </div>
        <input type="submit" value="Send" class="btn btn-default"/>
    </form>
@endsection