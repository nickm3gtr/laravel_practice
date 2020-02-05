<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemController extends Controller
{
  public function index()
  {
    $items = Item::all();

    return view('welcome', [
      'items' => $items
    ]);
  }

  public function show($id)
  {
    $item = Item::findOrFail($id);
    
    return view('items.show', [
      'item' => $item
    ]);
  }

  public function store()
  {
    $item = new Item;

    $item->item = request('item');
    $item->save();

    return redirect('/');
  }

  public function destroy($id)
  {
    $item = Item::find($id);

    $item->delete();

    return redirect('/');
  }
}
