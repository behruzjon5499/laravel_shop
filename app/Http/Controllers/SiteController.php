<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Brands;
use App\Models\Category;
use App\Models\Feedbacks;
use App\Models\News;
use App\Models\Partners;
use App\Models\Posts;
use App\Models\Products;
use App\Models\Skills;
use App\Models\Sliders;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Cache::remember('categories_list',now()->addSeconds(300),function (){
            return Category::latest()->get();
        });
        $partners = Cache::remember('partners_list',now()->addSeconds(300),function (){
            return Partners::latest()->get();
        });
        $news = Cache::remember('news_list',now()->addSeconds(300),function (){
            return News::latest()->get();
        });
        $sliders = Cache::remember('sliders_list',now()->addSeconds(300),function (){
            return Sliders::get();
        });
        $products = Cache::remember('products_list',now()->addSeconds(300),function (){
            return Products::latest()->get();
        });
        $brands = Cache::remember('brands_list',now()->addSeconds(300),function (){
            return Brands::latest()->limit(6)->get();
        });
        return view('site.index',[
            'categories' => $categories,
            'partners' => $partners,
            'news' => $news,
            'sliders' => $sliders,
            'products' => $products,
            'brands' => $brands,
        ]);

    }
    /**
     * Display a listing of the resource.
     */
    public function about()
    {
        $about = About::first();
        $partners = Partners::all();
        $skills = Skills::all();
        $posts = Posts::all();
        $products_count = Products::get()->count();
        $users_count = User::get()->count();
        $feedback_count = Feedbacks::get()->count();
        return view('site.about',[
            'about' => $about,
            'partners' => $partners,
            'skills' => $skills,
            'posts' => $posts,
            'products_count' => $products_count,
            'users_count' => $users_count,
            'feedback_count' => $feedback_count,
        ]);

    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
