        @extends('layouts.app')

        @section('content') <!-- blades templates open with section and end with endsection -->
          <h1>{{$title}}</h1>
          <p>This is the Laravel application from the Laravel From Scratch Youtube Series</p>
          <div class="container">
            <li class="btn btn-default"><a href="{{ route('login') }}">Login</a></li>
            <li class="btn btn-default"><a href="{{ route('register') }}">Register</a></li>
          </div>
        @endsection
