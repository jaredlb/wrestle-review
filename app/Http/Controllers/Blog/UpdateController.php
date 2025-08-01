<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UpdateController extends Controller
{
    public function update(Request $request, ?Blog $blog)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $blog->fill($request->all());
        if (!$blog->exists) {
            $blog->user_id = Auth::id();
        }

        $blog->save();
    }
}
