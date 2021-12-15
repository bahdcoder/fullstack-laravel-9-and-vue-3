<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoriesController extends Controller
{
    public function show($categorySlug) {
        $category = Category::where('slug', $categorySlug)
                        ->with('posts')
                        ->firstOrFail();

        return view('categories.show', [
            'category' => $category
        ]);
    }
}
