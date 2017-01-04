<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;



class ItemsController extends Controller
{

    public function index()
    {

        $items = Item::orderBy('id', 'ASC')->paginate(5);

        return view('backend.item.list')->with("items", $items);
    }

    public function create()
    {
        return view('backend.item.form');
    }


    public function store(Request $request)
    {
        // mejora:
        // $item = new Item($request->all());
        $item = new Item;
        $item->name = $request->get('name');
        $item->pompadour = $request->get('pompadour');
        $item->description = $request->get('description');
        $item->outstanding_image = $request->get('outstanding_image');
        if ($request->hasFile('outstanding_image')){
            $file = $request->file('outstanding_image');
            $path = public_path('/item/image/' . $items->id);
            $request->file('outstanding_image')->move($path, $file->getClientOriginalName());
            var_dump($file->getClientOriginalName());
            die();
        }
        
        Flash::success("Se ha agregado un nuevo item " . $item->name . " con exito");

        return redirect()->route('item.index');
    }

    public function show($id)
    {
        $item = Item::find($id);

    }


    public function edit($id)
    {
         $item = Item::find($id);
         return view('backend.item.edit')->with('item', $item);
    }

    public function destroy($id)
    {
        $item = Item::find($id);
        $item->delete();

        Flash::error("El item " . $item->name . " ha sido eliminado correctamente");

        return redirect()->route('item.index');
    }

    public function update(Request $request, $id)
    {
        $item = Item::find($id);
        $item->name = $request->name;
        $item->pompadour = $request->pompadour;
        $item->description = $request->description;
        $item->save();

        Flash::info("El item " . $item->name . " ha sido editado correctamente");

        return redirect()->route('item.index');

    }
}