@extends('layout')

@section('content')
    
  <div class="content">

    <h3>{{ $item->item }}</h3>
    <form action="/items/{{ $item->id }}" method="POST">
      @method('DELETE')
      @csrf
      <button class="btn btn-danger">Delete</button>
    </form>

  </div>

@endsection