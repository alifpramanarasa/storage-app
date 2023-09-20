@extends('component.app')

@section('content')
  <div class="container mt-5">
    <h1>Hello {{ $name }}, Im from {{ $location }}</h1>
    
    <a href="{{ url('/landing/profile')}}" class="btn btn-primary">
      Profile
    </a>
  </div>
@endsection