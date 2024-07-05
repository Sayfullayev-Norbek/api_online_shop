<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{

    public function index()
    {
        return Product::with('stocks')->get();
    }

    public function store(StoreProductRequest $request)
    {
        //
    }

    public function show($id)
    {
        return Product::query()->with('stocks')->where('id', $id)->first();
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    public function destroy(Product $product)
    {
        //
    }
}
