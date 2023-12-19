<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\File;
use App\Models\ProductData;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::latest()->paginate(6);

        return view('products.index', [
            'products' => $products,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('products.create', [
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'name_ru' => 'required',
            'name_uz' => 'required',
            'name_en' => 'required',
            'description_en' => 'required',
            'description_uz' => 'required',
            'description_ru' => 'required',
            'category_id' => 'required',
            'date' => 'required',
            'price' => 'required',
            'type' => 'required',
            'items' => 'array',
            'images' => 'array',
            'photo' => [
                'required',
            ],
        ]);
        $data['owner_id'] = auth()->id();
        $file = $request->file('photo');
        $response = Storage::put("public", $file);
        $data['photo'] = $response;
        $model = Products::create($data);
        if (isset($data['images'])) {
            foreach ($data['images'] as $image) {
                $response = Storage::put("public", $image);
                File::create([
                    'name' => $image->getClientOriginalName(),
                    'size' => $image->getSize(),
                    'extension' => $image->getClientOriginalExtension(),
                    'fileable_type' => Products::class,
                    'fileable_id' => $model->id,
                    'file' => $response,
                    'host' => 1,
                ]);
            }
        }

        if (isset($data['items'])) {
            foreach ($data['items'] as $item) {
                ProductData::create([
                    'name' => $item['name'],
                    'value' => $item['value'],
                    'product_id' => $model->id,
                ]);
            }

        }
        if ($model->save()) {
            return back()->with('message', 'Muvaffaqiyatli yaratildi');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Products $product)
    {
        return view('products.show', [
            'products' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $product)
    {
        $categories = Category::all();
        return view('products.edit', [
            'product' => $product,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Products $product)
    {

        $data = $request->validate([
            'name_ru' => 'required',
            'name_uz' => 'required',
            'name_en' => 'required',
            'description_en' => 'required',
            'description_uz' => 'required',
            'description_ru' => 'required',
            'category_id' => 'required',
            'date' => 'required',
            'price' => 'required',
            'type' => 'required',
            'items' => 'array',
            'images' => 'array',
        ]);
        $data['owner_id'] = auth()->id();
        if ($request->hasFile('photo')) {
            if (isset($product->photo)) {
                Storage::delete($product->photo);
            }
        }
        $file = $request->file('photo');
        if ($file) {
            $response = Storage::put("public", $file);
            $data['photo'] = $response;
        }
        $product->update($data);
        if (isset($data['images'])) {
            foreach ($data['images'] as $image) {
                $response = Storage::put("public", $image);
                File::create([
                    'name' => $image->getClientOriginalName(),
                    'size' => $image->getSize(),
                    'extension' => $image->getClientOriginalExtension(),
                    'fileable_type' => Products::class,
                    'fileable_id' => $product->id,
                    'file' => $response,
                    'host' => 1,
                ]);
            }
        }
        if (isset($data['items'])) {
            foreach ($data['items'] as $item) {
                $productData = ProductData::where('name', $item['name'])->where('product_id', $product->id)->first();
                if ($productData) {
                    $productData->update([
                        'name' => $item['name'],
                        'value' => $item['value'],
                        'product_id' => $product->id,
                    ]);
                } else {
                    ProductData::create([
                        'name' => $item['name'],
                        'value' => $item['value'],
                        'product_id' => $product->id,
                    ]);
                }
            }
        }
        if ($product->save()) {
            return back()->with('message', "Muvaffaqiyatli o'zgartirildi");
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $product)
    {
        $product->delete();
        $productData = ProductData::where('product_id', $product->id)->get();

        if (isset($product->photo)) {
            Storage::delete($product->photo);
        }

        if ($productData) {
            foreach ($productData as $data) {
                $data->delete();
            }
        }

        return redirect('/');
    }
}
