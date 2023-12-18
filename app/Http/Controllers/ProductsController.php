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
            'photo' => [
                'required',
            ],
        ]);
        $data['owner_id'] = auth()->id();
        $file = $request->file('photo');
        $response =  Storage::put("public", $file);
        $data['photo'] = $response;
        $model = Products::create($data);

        if (isset($data['photo'])){
            File::create([
                'name' =>$file->getClientOriginalName(),
                'size' =>$file->getSize(),
                'extension' =>$file->getClientOriginalExtension(),
                'fileable_type' =>Products::class,
                'fileable_id' =>$model->id,
                'file' =>$response,
                'host' =>1,
            ]);
        }

        if (isset($data['items'])){
            foreach ($data['items'] as $item){
                ProductData::create([
                    'name' =>$item['name'],
                    'value' =>$item['value'],
                    'product_id' =>$model->id,
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
    public function show(Products $products)
    {
         return view('products.show',[
             'products' =>$products
         ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $products)
    {
            return view('products.edit',[
                'product'=>$products
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Products $products)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $products)
    {
        //
    }
}
