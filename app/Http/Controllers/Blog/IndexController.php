<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search', '');
        $blogs = Blog::where('title', 'LIKE', '%' . $search . '%')
            ->orWhere('description', 'LIKE', '%' . $search . '%')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('pages.blogs.index', [
            'blogs' => $blogs,
            'search' => $search
        ]);
    }
}
