<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReadController extends Controller
{
    public function read(Blog $blog)
    {
        return view('pages.blogs.read', [
            'blog' => $blog
        ]);
    }
}
