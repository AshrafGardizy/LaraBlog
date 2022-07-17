@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input id="name" type="text" class="form-control" name="name">
            @error('name')
                <strong>{{ $message }}</strong>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" class="form-control" name="email">
            @error('email')
                <strong>{{ $message }}</strong>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input id="password" type="password" class="form-control" name="password">
            @error('password')
                <strong>{{ $message }}</strong>
            @enderror
        </div>

        <div class="form-group">
            <label for="password-confirm">Password Confirm</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
            @error('password_confirmation')
                <strong>{{ $message }}</strong>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
@endsection
