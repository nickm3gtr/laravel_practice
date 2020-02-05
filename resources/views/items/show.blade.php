@extends('layout')

@section('content')
    
  <div class="content">

    <h3>{{ $item->item }}</h3>
    <form action="/items/{{ $item->id }}" method="POST">
      @method('DELETE')
      @csrf
      <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="/items/{{ $item->id }}/edit"><button class="btn btn-primary">Edit</button></a>

  </div>

@endsection