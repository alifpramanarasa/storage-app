@extends('component.app')

@section('content')
  <div class="container mt-5">
    <h1>Hello {{ $name }}, Im from {{ $location }}</h1>
  </div>
@endsection