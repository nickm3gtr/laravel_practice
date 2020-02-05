@extends('layout')

@section('content')
    
  <div class="content mx-4 my-4">

    <div class="row">

      <div class="col"></div>

      <div class="col">
        <form action="/items/{{ $item->id }}" method="POST">
          @method('PUT')
          @csrf
          <div class="form-group">
            <label>Edit Item</label>
            <input type="text" class="form-control" id="item" name="item" value="{{ $item->item }}">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>

      <div class="col"></div>

    </div>

  </div>

@endsection