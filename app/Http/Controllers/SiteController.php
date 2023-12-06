<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Category;
use App\Models\News;
use App\Models\Partners;
use App\Models\Skills;
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
        return view('site.index',[
            'categories' => $categories,
            'partners' => $partners,
            'news' => $news,
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
        return view('site.about',[
            'about' => $about,
            'partners' => $partners,
            'skills' => $skills,
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
