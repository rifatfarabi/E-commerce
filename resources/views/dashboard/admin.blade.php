@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col">
        <h2>Welcome to Admin Page</h2>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </div>
</div>

@endsection
