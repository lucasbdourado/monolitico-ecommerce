<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    protected $model;

    public function __construct(Product $product)
    {
        $this->model = $product;
    }

    public function index()
    {
        $products = $this->model->all();

        return view('admin.products.index')->with('products', $products);
    }

    public function create()
    {

        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $this->model->create($request->all());

        return to_route('products.index');
    }

    public function edit($id)
    {
        if(!$product = $this->model->findorFail($id)){
            return redirect()->route('products.index');
        }

        return view('admin.products.edit')->with('product', $product);
    }

    public function update($id, Request $request)
    {
        if(!$product = $this->model->findOrFail($id))
            return redirect()->route('products.index');

        $product->update($request->all());
        
        return to_route('products.index');
    }

    function destroy($id)
    {
        $this->model->destroy($id);

        return to_route('products.index');
    }

    function show($url)
    {
        if(!$product = $this->model->where('url', $url)->first())
            return to_route('welcome');

        return view('admin.products.show')->with(['product' => $product, 'inventories' => $product->inventory()]);
    }
}
