@extends ('layout')

@section ('content')

    <div class="content mt-4">
        <div class="row">

          <div class="col-sm-4"></div>

          <div class="col-sm-4">

            <form action="/items" method="POST">
              @csrf
              <div class="form-group mb-2">
                <input id="item" name="item" type="text" class="form-control" placeholder="Item">
              </div>
              <button type="submit" class="btn btn-primary mb-2 form-control">Add Item</button>
            </form>

            <ul>
              @foreach ($items as $item)
              <li><a href="/items/{{ $item->id }}">{{ $item->item }}</a></li>
              @endforeach
            </ul>

          </div>

          <div class="col-sm-4"></div>

        </div>
    </div>

@endsection