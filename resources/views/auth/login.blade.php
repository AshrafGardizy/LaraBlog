@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <label for="email">E-Mail Address</label>
            <input type="email" id="email" class="form-control" name="email"/>
            @error('email')
                <strong class="text-danger">{{ $message }}</strong>
            @enderror
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" class="form-control" name="password"/>
            @error('password')
                <strong class="text-danger">{{ $message }}</strong>
            @enderror
        </div>
        <div class="form-group">
            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember">Remember Me</label>
        </div>
        <input type="submit" class="btn btn-primary" value="Login"/>
    </form>
@endsection
