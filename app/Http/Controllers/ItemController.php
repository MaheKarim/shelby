<?php

namespace App\Http\Controllers;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(Request $request)
    {
        $input = $request->all();
        $items = Item::orderBy('id', 'desc')->paginate();
        return view('items.index', compact('input', 'items'));
    }

    public function create()
    {
        return view('items.create');
    }

    public function store(Request $request)
    {
        $item = new Item();
        $item->fill($request->all())->save();

        return redirect()->route('items.index');
    }

    public function edit($id)
    {
        $item = Item::findOrFail($id);

        return view('items.edit', compact('item'));
    }

    public function update($id, Request $request)
    {
        $item = Item::findOrFail($id);
        $item->update($request->all());

        return redirect()->route('items.index');
    }

    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();

       // return back();
        return redirect()->route('items.create');
    }
}
