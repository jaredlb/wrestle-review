<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog;

class FormController extends Controller
{
    public function form(?Blog $blog)
    {
        return view('blog.form', [
            'blog' => $blog
        ]);
    }
}
