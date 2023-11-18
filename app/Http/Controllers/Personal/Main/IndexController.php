<?php

namespace App\Http\Controllers\Personal\Main;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        $likedCount = auth()->user()->likedPosts->count();
        $commentsCount = auth()->user()->comments->count();
        return view('personal.main.index', compact('likedCount', 'commentsCount'));
    }

}
