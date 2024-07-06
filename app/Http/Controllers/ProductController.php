<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{

    public function index()
    {
        return ProductResource::collection(Product::cursorPaginate(25));
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
