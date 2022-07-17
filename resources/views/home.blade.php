@extends('layouts.app')

@section('content')

<div class="jumbotron">
    <h1>Hi, {{ auth()->user()->name }}</h1>
        
        <table class="table">
            <tr>
                <th></th>
            </tr>
        </table>
</div>

@endsection
