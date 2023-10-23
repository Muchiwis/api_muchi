<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Database\Seeders\ProductSeeder;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResource
    {
        $products = Product::all();
        return ProductResource::collection($products);
    }

    public function store(ProductRequest $request): JsonResponse
    {
        $product = Product::create($request->all());
        return response()->json([
            'success' => true,
            'data' => new ProductResource($product),
        ], 201);
    }

    public function show(string $id): JsonResource
    {
        $product = Product::find($id);
        return new ProductResource($product);
    }

    public function update(ProductRequest $request, string $id): JsonResponse
    {
        $product = Product::find($id);
        $product->update($request->all());
        return response()->json([
            'success'=>true,
            'data'=> new ProductResource($product),
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): JsonResponse
    {
        Product::destroy($id);
        return response()->json([
            'success'=>true,
        ]);
    }
}
