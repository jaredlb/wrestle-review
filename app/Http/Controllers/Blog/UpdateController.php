<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UpdateController extends Controller
{
    public function update(Request $request, ?Blog $blog)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $blog->fill($request->all());
        if (!$blog->exists) {
            $blog->user_id = Auth::id() ?? 1;
        }

        $blog->save();
    }
}
