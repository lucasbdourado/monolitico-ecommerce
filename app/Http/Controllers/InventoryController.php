<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Product;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    //

    public function index()
    {
        $inventories = Inventory::all();


        return view('admin.inventories.index')->with('inventories', $inventories);
    }

    public function create()
    {
        $products = Product::all();


        return view('admin.inventories.create')->with('products', $products);
    }

    public function edit($id, Request $request)
    {
        if(!$inventory = Inventory::findorFail($id)){
            return redirect()->route('inventories.index');
        }
        $products = Product::all();

        return view('admin.inventories.edit')->with(['inventory' => $inventory, 'products' => $products]);
    }

    public function update($id, Request $request)
    {
        if(!$inventory = Inventory::findOrFail($id))
            return redirect()->route('inventories.index');;

        $inventory->update($request->except(['_token']));

        return to_route('inventories.index');
    }

    public function store(Request $request)
    {
        Inventory::create($request->all());

        return to_route('inventories.index');
    }

    function destroy($id, Request $request)
    {
        $user = Inventory::findOrFail($id);
        $user->destroy($id);

        return to_route('inventories.index');
    }

}
