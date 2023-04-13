<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Contracts\View\View;

class CategoryController extends Controller 
{
    public function categoryCode($code) : View {
        $category = Category::with('banners')->where([
            ['id', $code],
            ['active', true]
        ])->firstOrFail(); 
        
        $banners = $category->banners()
            ->where('active', true)
            ->orderByDesc('active_from')
            ->take(5)
            ->get();

        return view('categoryCode', compact('category', 'banners'));
    }
}